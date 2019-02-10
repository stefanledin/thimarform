<?php
register_nav_menus(
	array(
		'secondary' => 'Sekundärmeny',
		'main_menu' => 'Huvudmeny',
		'footer_menu' => 'Sidfotmeny'
	)
);

/**
 * Standardinställningar för ob_menu()
 */
add_filter('ob_menu_settings', function ($settings) {
	$default_settings = array(
		'pages' => null,
		'menu_id' => null,
		'menu_name' => null,
		'menu_class' => null,
		'active_li_class' => null,
		'active_a_class' => null,
		'include_child_pages' => null,
		'li_has_child_pages_class' => null,
		'a_has_child_pages_class' => null,
		'submenu' => array(
			'ul_class' => null,
			'active_li_class' => null,
			'active_a_class' => null,
			'include_child_pages' => true,
		)
	);
	return array_replace_recursive($default_settings, $settings);
});

/**
 * Skriver ut en ob_menu() utefter ett menynamn från menyhanteraren.
 */
function ob_nav_menu($settings)
{
    // Kollar att menu_name finns i arrayen med inställningar
	if (empty($settings['menu_name'])) {
		throw new Exception("Du har inte angett ett 'menu_name'");
	}

    // Gör ingenting om menyn är tom.
	if (!$menu_items = get_menu_items($settings['menu_name'])) return;

    // Gör en array med bara sidornas ID
	$settings['pages'] = array_map(function ($menu_item) {
		return $menu_item->object_id;
	}, $menu_items);

	ob_menu($settings);
}

/**
 * Skriver ut ett menyträd utifrån sidors ID:n.
 */
function ob_menu($settings)
{
	$settings = apply_filters('ob_menu_settings', $settings);

    // Kollar så att det finns sidor
	if (empty($settings['pages'])) {
        #throw new Exception("Du har inte angett 'top_pages'");
		return;
	}

	do_action('ob_menu_loop', $settings);
}

/**
 * Loopen som anropas från ob_menu()
 */
add_action('ob_menu_loop', function ($settings) {
    // Öppna <ul>
	do_action('ob_menu_ul_start', $settings);
    
    // Loopa igenom menyalternativen
	foreach ($settings['pages'] as $menu_item) {

        // Gör en array med data om menyalternativet för att
        // lättare kunna skicka med till do_action() funktioner.
		$menu_item = array(
			'ID' => $menu_item,
			'settings' => $settings,
			'child_pages' => child_pages($menu_item)
		);

        // Öppna <li>
		do_action('ob_menu_li_start', $menu_item);

            // Öppna <a>
		do_action('ob_menu_a_start', $menu_item);

		echo get_the_title($menu_item['ID']);

            // Stäng <a>
		do_action('ob_menu_a_end', $menu_item);
            
        // Stäng <li>
		do_action('ob_menu_li_end', $menu_item);
	}

    // Stäng <ul>
	do_action('ob_menu_ul_end');
});

/**
 * Startar <ul>
 */
add_action('ob_menu_ul_start', function ($settings) {
	$ul_class = (isset($settings['menu_class'])) ? $settings['menu_class'] : '';
	echo sprintf(
		'<ul class="%s">',
		apply_filters('ob_menu_ul_classes', $ul_class)
	);
});

/**
 * Stänger <ul>
 */
add_action('ob_menu_ul_end', function () {
	echo '</ul>';
});

/**
 * Startar <li>
 */
add_action('ob_menu_li_start', function ($menu_item) {
    // Gör iordning en array med klasser som ska läggas på <li>
	$li_classes = array_filter(array(
        // 1. Kolla om menyalternativet är aktivt
        // 2. Ska en klass ska läggas på?
		(is_current_menu_item($menu_item['ID']) && $menu_item['settings']['active_li_class'])
			? $menu_item['settings']['active_li_class']
			: null,

        // 1. Kolla om menyalternativet har undersidor 
        // 2. Ska en klass ska läggas på?
		(isset($menu_item['child_pages']) && isset($menu_item['settings']['li_has_child_pages_class']))
			? $menu_item['settings']['li_has_child_pages_class']
			: null,
	));

	if ($li_classes) {
		$li_classes = sprintf(' class="%s"', implode(' ', $li_classes));
	}

	echo sprintf('<li%s>', ($li_classes) ? $li_classes : '');
});

/**
 * Stänger <li>
 */
add_action('ob_menu_li_end', function ($menu_item) {
	echo '</li>';
});

/**
 * Startar <a>
 */
add_action('ob_menu_a_start', function ($menu_item) {
	echo sprintf(
		'<a href="%s"%s>',
		get_permalink($menu_item['ID']),
		(is_current_menu_item($menu_item['ID']) && $menu_item['settings']['active_a_class'])
			? ' class="' . $menu_item['settings']['active_a_class'] . '"'
			: ''
	);
}, 10, 2);

/**
 * Stänger <a>
 */
add_action('ob_menu_a_end', function ($menu_item) {
	echo '</a>';
}, 10);

/**
 * Lägger till en <b> före </a> om det finns undersidor.
 */
add_action('ob_menu_a_end', function ($menu_item) {
	if (isset($menu_item['settings']['menu_id']) && $menu_item['settings']['menu_id'] == 'mainmenu') return;
	if (empty($menu_item['settings']['include_child_pages']) || empty($menu_item['child_pages'])) return;

	$b_class = array_filter(array(
		'expand',
		is_current_menu_item($menu_item['ID']) ? 'active' : null
	));
	$svg = '<svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			<g id="plus" fill="#FFFFFF">
				<path d="M10,19 C14.9705627,19 19,14.9705627 19,10 C19,5.02943725 14.9705627,1 10,1 C5.02943725,1 1,5.02943725 1,10 C1,14.9705627 5.02943725,19 10,19 Z M10,20 C4.4771525,20 0,15.5228475 0,10 C0,4.4771525 4.4771525,0 10,0 C15.5228475,0 20,4.4771525 20,10 C20,15.5228475 15.5228475,20 10,20 Z" id="circle" fill-rule="nonzero"></path>
				<rect id="minus" x="5" y="9" width="10" height="2"></rect>
				<rect x="9" y="5" width="2" height="10" class="vertical-line"></rect>
			</g>
		</g>
	</svg>';
	echo sprintf('<b class="%s">%s</b>', implode(' ', $b_class), $svg);
}, 9);

add_action('ob_menu_a_end', function ($menu_item) {
	if (isset($menu_item['settings']['include_child_pages']) && $menu_item['child_pages']) {
		do_action('ob_submenu', $menu_item['child_pages'], $menu_item['settings']['submenu']);
	}
}, 11);

/**
 * Förbereder $settings arrayen innan ob_menu_loop körs 
 * och skriver ut en undermeny.
 */
add_action('ob_submenu', function ($child_pages, $settings) {
	if (is_array($child_pages)) {
		$pages = array_map(function ($page) {
			return $page->ID;
		}, $child_pages);
	} else {
		$pages = array($child_pages->ID);
	}
	$settings['pages'] = $pages;

	do_action('ob_menu_loop', $settings);
}, 10, 2);

/**
 * Returnerar objekten i en wp_nav_menu
 */
function get_menu_items($menu_name)
{
	return wp_get_nav_menu_items(wp_get_nav_menu_object($menu_name), array(
		'posts_per_page' => -1
	));
}

/**
 * Returnerar undersidor för en sida (ID)
 */
function child_pages($ID)
{
	return get_posts(array(
		'post_parent' => $ID,
		'post_type' => 'page',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	));
}

/**
 * Returnerar ID:t till föräldersidan i trädet.
 */
function get_page_parent_id($post, $ignore_level = 0)
{
	$post_ancestors = get_post_ancestors($post);
    
    // Kolla om sidan ska vara högst i hierarkin.
	if (get_field('menu_tree_parent', $post->ID)) return $post->ID;
    
    // Kolla om någon av sidans föräldrar ska vara högst i hierarkin.
	foreach ($post_ancestors as $index => $ancestor) {
		if (get_field('menu_tree_parent', $ancestor)) return $ancestor;
	}
    
    // Ta bort föräldersidor som ligger högre än den nivå som ska ignoreras.
	if ($ignore_level) {
		$post_ancestors = array_splice($post_ancestors, 0, count($post_ancestors) - $ignore_level);
	}

    // Den sista föräldersidan i trädet...
	$parent_id = end($post_ancestors);
    // ...eller den nuvarande sidan, om ingen förälder finns.
	if (!$parent_id) {
		$parent_id = $post->ID;
	}
	return $parent_id;
}

function is_current_menu_item($id)
{
	global $post;
	$ancestors = get_post_ancestors($post);
	return (($id == $post->ID) || ($id == $post->post_parent) || ($id == end($ancestors)));
}
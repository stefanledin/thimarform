<?php
/**
 * Content
 *
 * 1. Custom post types
 * 2. Enqueue scripts and styles
 * 3. Images
 * 4. Filters
 * 5. Actions
 * 6. Menus
 * 7. Helpers
 */
require 'includes/custom-post-types.php';

require 'includes/enqueue-scripts-styles.php';

require 'includes/images/images.php';
require 'includes/images/custom-image-sizes.php';

require 'includes/filters.php';

require 'includes/actions.php';

require 'includes/menus.php';

require 'includes/helpers.php';

/**
 * Settings pages
 */
acf_add_options_page(array(
    'page_title' => 'Företagsinformation',
    'menu_title' => 'Företagsinfo'
));

/**
 * Knappar
 */
function the_button( $settings ) {
    echo get_button( $settings );
}

function get_button( $settings ) {
    $html = '';
    
    if ( $settings['appearance']['type'] == 'button_with_arrow' ) {
        $html .= sprintf(
            '<a href="%s" class="btn-w-arrow %s" target="%s">',
            $settings['link']['url'],
            $settings['appearance']['button_with_arrow_color'],
            $settings['link']['target']
        );
            $html .= '<span class="btn-w-arrow__label">'.$settings['link']['title'].'</span>';
            $html .= '<span class="btn-w-arrow__arrow"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/></svg></span>';
        $html .= '</a>';
    }

    if ( $settings['appearance']['type'] == 'text_with_arrow' ) {
        $html .= sprintf(
            '<a href="%s" class="btn-text-w-arrow %s" target="%s"> > %s</a>',
            $settings['link']['url'],
            $settings['appearance']['text_with_arrow_color'],
            $settings['link']['target'],
            $settings['link']['title']
        );
    }

    return $html;
}
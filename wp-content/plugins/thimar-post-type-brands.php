<?php
/*
Plugin name: Varumärken
*/

add_action( 'init', function() {
    register_post_type( 'brand', array(
        'labels' => array(
            'name' => 'Varumärken',
            'singular_name' => 'Varumärke',
            'add_new_item' => 'Lägg till varumärke',
            'edit_item' => 'Redigera varumärke'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-store',
        'rewrite' => array(
            'slug' => 'varumarke'
        )
    ) );
} );

function get_brands_by_first_letter() {
    $brands = get_posts( array(
        'post_type' => 'brand',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    ) );

    $brands_ordered_by_first_letter = array();
    
    foreach ($brands as $index => $brand) {
        $first_letter = $brand->post_title[0];
        $brands_ordered_by_first_letter[$first_letter][] = $brand;
    }

    return $brands_ordered_by_first_letter;
}
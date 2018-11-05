<?php
/**
 * Remove emojis
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ob_start_setup() {
  /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 */
	load_theme_textdomain( 'obspace' );
	
}
add_action( 'after_setup_theme', 'ob_start_setup' );

/**
 * Tar bort sidan Comments från menyn i backend
 */
function remove_comments_from_menu() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_comments_from_menu' );
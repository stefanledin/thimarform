<?php 
/*
Template name: Med sektioner
*/
get_header();

if (have_rows('sections')) {
    while (have_rows('sections')) {
        the_row();
        include 'sections/' . get_row_layout() . '.php';
    }
}

?>

<?php get_footer(); ?>
<?php
/*
Template name: Kontakt
*/
get_header(); ?>

<?php 
the_post();

$background_image = get_field('header_background');
?>
<header class="section-wrapper site-header" style="background-image: url('<?php echo $background_image['url']; ?>')"></header>

<section class="my-5">
    <div class="row pt-5">
        <div class="col-sm-12 offset-sm-1 mb-4">
            <h1>Om oss</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 offset-sm-1"><?php the_content();?></div>
        <div class="col-sm-5 offset-sm-1">
            <h3 class="mt-0">Kontakta oss</h3>
            <p>Butiken:<br>
                <?php the_field('company_info_phone', 'options');?><br>
                <?php the_field('company_info_email', 'options');?><br>
                <?php echo get_field('company_info_address', 'options')['store'];?><br>
            </p>
            <p>Öppettider:<br>
                <?php echo get_field('company_info_opening_hours', 'options')['store'];?>
            </p>
        </div>
    </div>
</section>

<?php get_footer();?>
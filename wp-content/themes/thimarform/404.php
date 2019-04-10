<?php get_header();?>
    <?php if ( $background = get_field('404_background', 'options') ) : ?>
        <style>
            .billboard {
                background: url(<?php echo $background['url'];?>);
            }
        </style>
    <?php endif;?>
    <section class="billboard bg-grey-light">
        <div class="row no-gutters">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2" style="min-height: 50vh;">
                <div class="text-center py-5">
                    <h1 class="h1--deluxe">Här är det tomt!</h1>
                    <?php
                    the_field('404_message', 'option');
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>
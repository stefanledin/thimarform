<?php get_header();?>
    <section class="bg-grey-light">
        <div class="row no-gutters">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2" style="min-height: 50vh;">
                <div class="text-center py-5">
                    <h1 class="h1--deluxe">404</h1>
                    <?php
                    echo wpautop( get_field('404_message', 'option') );
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>
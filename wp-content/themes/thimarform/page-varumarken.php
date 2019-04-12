<?php
/*
Template name: Varumärken
*/
get_header();

$brands_ordered_by_first_letter = get_brands_by_first_letter();
?>
    
    <section class="brands bg-grey-light">
        <div class="row no-gutters">
            <div data-aos="fade-up" class="col-10 offset-1 col-lg-8 offset-lg-2">
                <div class="row no-gutters">
                    <div class="col-sm-10 offset-sm-1 mb-5">
                        <?php the_post();?>
                        <?php 
                        echo sprintf(
                            '<h1 class="mt-4 text-center">%s</h1>',
                            ( $headline = get_field('page_headline') )
                                ? $headline
                                : get_the_title()
                        );
                        ?>
                        <div class="my-4">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ( array_chunk($brands_ordered_by_first_letter, ceil(count($brands_ordered_by_first_letter) / 3)) as $column ) : ?>
                        <div class="col-md-4">
                            <?php
                            foreach ( $column as $first_letter => $brands ) {
                                echo '<ul class="list-group"><li class="list-group__header">'.mb_substr($brands[0]->post_title, 0, 1).'</li>';
                                foreach ($brands as $brand) {
                                    echo sprintf(
                                        '<li class="list-group__item"><a href="%s">%s</a></li>',
                                        get_permalink( $brand->ID ),
                                        $brand->post_title
                                    );
                                }
                                echo '</ul>';
                            }
                            ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
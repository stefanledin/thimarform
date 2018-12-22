<?php
/*
Template name: Varumärken
*/
get_header();

$brands_ordered_by_first_letter = get_brands_by_first_letter();
?>
    
    <section class="bg-grey-light" style="padding: 300px 0; position: relative;">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1 mb-5">
                        <?php the_post();?>
                        <h1 class="text-center">Varumärken</h1>
                        <div class="my-4">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ( array_chunk($brands_ordered_by_first_letter, count($brands_ordered_by_first_letter) / 3) as $column ) : ?>
                        <div class="col-sm-4">
                            <?php
                            foreach ( $column as $first_letter => $brands ) {
                                echo '<ul class="list-group"><li class="list-group__header">'.$brands[0]->post_title[0].'</li>';
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
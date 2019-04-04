<?php if ( have_rows('images') ) : ?>
    <section data-aos="fade-up" class="mb-4">
        <div class="row no-gutters">
            <?php while ( have_rows('images') ) : the_row(); ?>
                <div class="col-sm-6 col-md-4">
                    <div class="image-with-description">
                        <?php if ( $text = get_sub_field('text') ) : ?>
                            <span class="image-with-description__span <?php the_sub_field('text_color');?>">
                                <?php echo $text; ?>
                            </span>
                        <?php endif; ?>
                        <?php
                        $image = get_sub_field('image');
                        echo sprintf(
                            '<img src="%s" srcset="%s" sizes="%s">',
                            $image['url'],
                            wp_calculate_image_srcset(
                                array( $image['width'], $image['height'] ),
                                $image['url'],
                                wp_get_attachment_metadata( $image['ID'] ),
                                $image['ID']
                            ),
                            '(min-width: 1920px) 640px, (min-width: 768px) 33.333vw, (min-width: 576px) 50vw, 100vw'
                        );
                        ?>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </section>
<?php endif;?>
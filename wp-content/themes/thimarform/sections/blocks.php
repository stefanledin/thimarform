<section class="mb-3">
    <div class="row no-gutters px-sm-1">
        <?php if ( have_rows('blocks') ) : while ( have_rows('blocks') ) : the_row(); ?>
            <div data-aos="fade-up" class="col-lg-4 px-sm-2">
                <div class="text-on-background">
        
                    <div class="text-on-background__content">
                        <?php if ($headline = get_sub_field('headline')) : ?>
                            <div class="ribbon-wrapper">
                                <div class="ribbon ribbon--small <?php if ( $has_button = get_sub_field('has_button') ) : ?>ribbon--w-button<?php endif;?>">
                                    <h1><?php echo $headline; ?></h1>
                                    <?php if ( $has_button ) : ?>
                                        <div class="ribbon__button">
                                            <div>
                                                <?php the_button( get_sub_field('button') );?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
            
                    <?php if ( $background = get_sub_field('background_image') ) : ?>
                        <div class="text-on-background__image">
                            <?php
                            echo sprintf(
                                '<img src="%s" srcset="%s" sizes="(min-width: 1920px) 634px, (min-width: 992px) 33vw, 100vw">',
                                $background['url'],
                                wp_calculate_image_srcset(
                                    array( $background['width'], $background['height'] ),
                                    $background['url'],
                                    wp_get_attachment_metadata( $background['ID'] ),
                                    $background['ID']
                                )
                            )
                            ?>
                        </div>
                    <?php endif; ?>
            
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>
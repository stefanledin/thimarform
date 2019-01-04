<section class="mb-md-3">
    <div class="row">
        <?php if ( have_rows('blocks') ) : while ( have_rows('blocks') ) : the_row(); ?>
            <div class="col-md-4">
                <div class="text-on-background">
        
                    <div class="text-on-background__content">
                        <?php if ($headline = get_sub_field('headline')) : ?>
                            <div class="ribbon-wrapper">
                                <div class="ribbon <?php if ( $has_button = get_sub_field('has_button') ) : ?>ribbon--w-button<?php endif;?>">
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
                            <img src="<?php echo $background['url']; ?>" alt="Promo">
                        </div>
                    <?php endif; ?>
            
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>
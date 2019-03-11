<section data-aos="fade-up" class="mb-3 text-on-background">

    <div class="text-on-background__content">
        <?php if ( $headline = get_sub_field('headline') ) : ?>
            <div class="ribbon-wrapper">
                <div class="ribbon">
                    <?php
                    echo sprintf('<h1 class="%s">%s</h1>', get_sub_field('headline_color'), $headline);
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="text-on-background__button">
            <?php
            if ( get_sub_field('has_button') ) {
                the_button( get_sub_field('button') );
            }  
            ?>
        </div>
    </div>

    <?php if ( $background = get_sub_field('background_image') ) : ?>
        <div class="text-on-background__image">
            <?php if ( ! empty( $background['small'] ) ) : ?>
                <picture>
                    <source srcset="<?php echo $background['large']['url'];?>" media="(min-width: 768px)">
                    <img src="<?php echo $background['small']['url'];?>">
                </picture>
            <?php else : ?>
                <img src="<?php echo $background['large']['url'];?>">
            <?php endif; ?>
        </div>
    <?php endif;?>

</section>
<section class="my-4 text-on-background">

    <div class="text-on-background__content">
        <?php if ( $headline = get_sub_field('headline') ) : ?>
            <div class="ribbon-wrapper">
                <div class="ribbon">
                    <h1><?php echo $headline;?></h1>
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
            <img src="<?php echo $background['url'];?>" alt="Promo">
        </div>
    <?php endif;?>

</section>
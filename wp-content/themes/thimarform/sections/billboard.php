<?php 
$background_image = get_sub_field('background_image');
$base_background = ( ! empty( $background_image['small']) ) ? $background_image['small'] : $background_image['large'];
?>
<header data-aos="fade-up" class="site-header mb-3">
    <div class="site-header__content">
        <?php
        if ( $headline = get_sub_field('headline') ) {
            echo sprintf('<h1>%s</h1>', $headline);
        }
        ?>
    </div>
    <div class="site-header__image">
        <picture>
            <?php
            if ( ! empty( $background_image['small'] ) ) {
                echo sprintf('<source srcset="%s" media="(min-width: 768px)">', $background_image['large']['url']);
            }
            ?>
            <img src="<?php echo $base_background['url'];?>">
        </picture>
    </div>
</header>
<?php 
$background_image = get_sub_field('background_image');
$base_background = ( ! empty( $background_image['small']) ) ? $background_image['small'] : $background_image['large'];
?>
<style>
    header {
        background-image: url(<?php echo $base_background['url'];?>);
    }
    <?php if ( ! empty( $background_image['small']) ) : ?>
    @media (min-width: 768px) {
        header {
            background-image: url(<?php echo $background_image['large']['url'];?>);
        }
    }
    <?php endif; ?>
</style>
<header data-aos="fade-up" class="billboard site-header mb-3">
    <div class="site-header__content">
        <?php
        if ( $headline = get_sub_field('headline') ) {
            echo sprintf('<h1>%s</h1>', $headline);
        }
        ?>
    </div>
</header>
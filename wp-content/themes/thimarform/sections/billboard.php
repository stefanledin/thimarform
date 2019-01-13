<?php 
$background_image = get_sub_field('background_image');
?>
<header data-aos="fade-up" class="billboard site-header mb-3" style="background-image: url('<?php echo $background_image['url'];?>')">
    <div class="site-header__content">
        <?php
        if ( $headline = get_sub_field('headline') ) {
            echo sprintf('<h1>%s</h1>', $headline);
        }
        ?>
    </div>
</header>
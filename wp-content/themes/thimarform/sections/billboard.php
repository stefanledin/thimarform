<?php 
$background_image = get_sub_field('background_image');
?>
<header class="billboard site-header mb-3 mt-4" style="background-image: url('<?php echo $background_image['url'];?>')">
    <div class="site-header__content">
        <?php
        if ( $headline = get_sub_field('headline') ) {
            echo sprintf('<h1>%s</h1>', $headline);
        }
        ?>
    </div>
</header>
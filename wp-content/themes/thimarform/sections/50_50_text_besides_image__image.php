<?php
$image = get_sub_field('image');
?>
<div class="px-3 pb-3 pb-sm-0 px-sm-0 pl-sm-3">
    <?php
    echo sprintf(
        '<img src="%s" srcset="%s" sizes="(min-width: 1920px) 944px, (min-width: 576px) 50vw, 100vw">',
            $image['sizes']['thumbnail'],
            wp_calculate_image_srcset(
                array( $image['width'], $image['height'] ),
                $image['url'],
                wp_get_attachment_metadata( $image['ID'] ),
                $image['ID']
            )
    );
    ?>
</div>
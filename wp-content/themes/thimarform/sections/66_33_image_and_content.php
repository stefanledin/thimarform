<?php
$class = array(
    1 => 'col-md-8',
    2 => 'col-md-4'
);
$img_sizes_attribute = array(
    1 => '(min-width: 1920px) 1260px, (min-width: 768px) 66vw, 100vw',
    2 => '(min-width: 1920px) 630px, (min-width: 768px) 33vw, 100vw'
);
?>
<section class="my-4">
    <?php if ( have_rows('rows') ) : ?> 
        <div class="container-fluid">
            <?php while ( have_rows('rows') ) : the_row(); ?>
                <div data-aos="fade-up" class="row no-gutters">
                    <?php if ( have_rows('columns') ) : while ( have_rows('columns') ) : the_row(); ?>
                        <div class="<?php echo $class[get_row_index()];?> d-flex flex-column justify-content-center">
                            <?php
                            if (get_sub_field('content_type') == 'image') {
                                $image = get_sub_field('image');

                                echo sprintf(
                                    '<div><img src="%s" srcset="%s" sizes="%s"></div>',
                                    $image['url'],
                                    wp_calculate_image_srcset(
                                        array( $image['width'], $image['height'] ),
                                        $image['url'],
                                        wp_get_attachment_metadata( $image['ID'] ),
                                        $image['ID']
                                    ),
                                    $img_sizes_attribute[get_row_index()]
                                );
                            } else {
                                echo '<div class="p-4">' . get_sub_field('content') . '</div>';
                            }
                            ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            <?php endwhile; ?> 
        </div>
    <?php endif; ?>
</section>
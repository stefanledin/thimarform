<?php
$column_classes = array(
    1 => 'col-sm-12',
    2 => 'col-sm-6'
);

$img_sizes_attribute = array(
    1 => '(min-width: 1920px) 770px, (min-width: 576px) 50vw, 100vw',
    2 => '(min-width: 1920px) 370px, (min-width: 576px) 25vw, 100vw'
);

$headline = ( $headline = get_sub_field('headline') ) ? $headline : get_the_title(); 
$introtext = get_sub_field('introtext');
?>
<section class="mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="row">
                    <?php if ( have_rows('columns') ) : while ( have_rows('columns') ) : the_row(); ?>
                        <div data-aos="fade-up" class="col-sm-6">
                            <?php
                            /**
                             * Högst upp i första spalten ska introtexten vara.
                             */
                            if ( get_row_index() == 1 ) {
                                echo '<div class="row no-gutters">';
                                    echo '<div class="col-10 offset-1 col-md-12 offset-md-0">';
                                        echo sprintf( '<h1 class="mb-4">%s</h1>', $headline );
                                        echo wpautop( $introtext );
                                    echo '</div>';
                                echo '</div>';
                            }
    
                            if ( have_rows('rows') ) : while ( have_rows('rows') ) : the_row(); ?>
    
                                <div class="row">
    
                                    <?php 
                                    if ( $images = get_sub_field('images') ) {
    
                                        foreach ( $images as $image ) {
    
                                            /**
                                             * Start div. Olika klasser beroende på hur många bilder som är i samma rad.
                                             */
                                            echo sprintf(
                                                '<div class="%s">',
                                                'mb-5 ' . $column_classes[count($images)]
                                            );
    
                                                /**
                                                 * Bilden
                                                 */
                                                echo sprintf(
                                                    '<img src="%s" srcset="%s" sizes="%s" alt="%s">',
                                                    $image['image']['url'],
                                                    wp_calculate_image_srcset(
                                                        array( $image['image']['width'], $image['image']['height'] ),
                                                        $image['image']['url'],
                                                        wp_get_attachment_metadata( $image['image']['ID'] ),
                                                        $image['image']['ID']
                                                    ),
                                                    $img_sizes_attribute[count($images)],
                                                    $image['image']['alt']
                                                );
    
                                                /**
                                                 * Bildtexten/Beskrivningen
                                                 */
                                                if ( $image['image_caption'] ) {
                                                    echo sprintf( '<div class="mt-3 text-center">%s</div>', $image['image_caption'] );
                                                }
    
                                            /**
                                             * Stäng diven
                                             */
                                            echo '</div>';
                                        }
                                    }
                                    ?>
                                </div>
                            <?php endwhile; endif; /** have_rows('rows) */ ?>
                        </div>
                    <?php endwhile; endif; /** have_rows('columns') */ ?>
                </div>
            </div>
        </div>
    </div>
</section>
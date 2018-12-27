<?php
$column_classes = array(
    1 => 'col-sm-12',
    2 => 'col-sm-6'
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
                        <div class="col-sm-6">
                            <?php
                            /**
                             * Högst upp i första spalten ska introtexten vara.
                             */
                            if ( get_row_index() == 1 ) {
                                echo sprintf( '<h1 class="mb-4">%s</h1>', $headline );
                                echo wpautop( $introtext );
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
                                                    '<img src="%s" alt="%s">',
                                                    $image['image']['url'],
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
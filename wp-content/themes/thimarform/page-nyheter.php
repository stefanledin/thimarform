<?php
/*
Template name: Nyheter
*/
get_header();
?>

<?php if ( $header = get_field('news_page_header') ) : ?>
    <header data-aos="fade-up" class="mb-4 text-besides-image">
        <div class="row no-gutters">
            <div class="col-sm-6 d-flex order-last order-sm-first">
                <div class="py-4 text-besides-image__content-wrapper bg-grey-light">
                    <div class="row text-besides-image__content d-flex flex-column">
                        <div class="col-10 offset-1">
                            <?php 
                            the_title('<h1 class="mb-4">', '</h1>');
                            if ( $header['introtext'] ) {
                                echo wpautop( $header['introtext'] );
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( $header['block']['background_image'] ) : ?>
            <div class="col-sm-6 d-flex order-first order-sm-last">
                <div class="text-on-background">

                    <div class="text-on-background__content">
                        <div class="ribbon-wrapper">
                            <div class="ribbon">
                                <?php echo '<h1>' . $header['block']['headline'] . '</h1>';?>
                            </div>
                        </div>
                    </div>

                    <div class="text-on-background__image">
                        <?php
                        echo sprintf(
                            '<img src="%s" srcset="%s" sizes="(min-width: 1920px) 944px, (min-width: 576px) 50vw, 100vw" alt="%s">',
                            $header['block']['background_image']['sizes']['thumbnail'],
                            wp_calculate_image_srcset(
                                array($header['block']['background_image']['width'], $header['block']['background_image']['height']),
                                $header['block']['background_image']['url'],
                                wp_get_attachment_metadata($header['block']['background_image']['ID']),
                                $header['block']['background_image']['ID']
                            ),
                            $header['block']['background_image']['alt']
                        );
                        ?>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </header>
<?php endif; ?>

<?php
$posts = get_posts( array(
    'post_type' => 'post',
    'posts_per_page' => -1
) );
if ( $posts ) : ?>
    <section data-aos="fade-up" class="mb-4">
        <div class="row no-gutters">
            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                <div class="col-sm-6 col-md-4">
                    <div class="image-with-description">
                        <span class="image-with-description__span text-white">
                            <time><?php the_time('Y-m-d'); ?></time><br>
                            <?php the_title();?>
                        </span>
                        <?php
                        $thumbnail = wp_get_attachment_metadata( get_post_thumbnail_id() );
                        echo sprintf(
                            '<img src="%s" srcset="%s" sizes="%s" alt="%s">',
                            get_thumbnail_url( $post->ID ),
                            wp_calculate_image_srcset(
                                array( $thumbnail['width'], $thumbnail['height'] ),
                                get_thumbnail_url( $post->ID ),
                                $thumbnail,
                                get_post_thumbnail_id( $post->ID )
                            ),
                            '(min-width: 1920px) 640px, (min-width: 768px) 33vw, (min-width: 576px) 50vw, 100vw',
                            get_the_title()

                        );
                        ?>
                    </div>
                </div>
            <?php wp_reset_postdata(); endforeach;?>
        </div>
    </section>
<?php endif;?>

<?php get_footer();?>
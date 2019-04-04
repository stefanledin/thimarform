<?php get_header(); ?>

<?php if ( $header = get_field('page_header') ) : ?>
    <header data-aos="fade-up" class="mb-4 text-besides-image">
        <div class="row no-gutters">
            <div class="col-sm-6 d-flex order-last order-sm-first">
                <div class="py-4 text-besides-image__content-wrapper bg-grey-light">
                    <div class="row text-besides-image__content d-flex flex-column">
                        <div class="col-10 offset-1">
                            <?php 
                            echo sprintf(
                                '<h1 class="mb-4">%s</h1>',
                                ( ! empty( $header['headline'] ) )
                                    ? $header['headline']
                                    : get_the_title()
                            );
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
                        <div class="ribbon-wrapper ribbon-wrapper--optical-center">
                            <div class="ribbon">
                                <?php echo '<h1>' . $header['block']['headline'] . '</h1>';?>
                            </div>
                        </div>
                    </div>

                    <div class="text-on-background__image">
                        <?php
                        echo sprintf(
                            '<img src="%s" srcset="%s" sizes="(min-width: 1920px) 960px, (min-width: 576px) 50vw, 100vw" alt="%s">',
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
if ( have_rows('sections') ) {
    while (have_rows('sections')) {
        the_row();
        include 'sections/' . get_row_layout() . '.php';
    }
}
?>

<?php get_footer();?>
<?php get_header();?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php
        $brand_info = get_field('brand_info');
        if ( isset( $brand_info['text'] ) ) :
        ?>
            <section data-aos="fade-up" class="mb-md-4 text-besides-image">
                <div class="row no-gutters">
                    <div class="col-sm-6 d-flex order-last order-sm-first py-4">
                        <div class="text-besides-image__content-wrapper">
                            <div class="row text-besides-image__content d-flex flex-column">
                                <div class="col-10 offset-1">
                                    <?php the_title('<h1 class="mb-4">', '</h1>'); ?>
                                    <?php echo wpautop( $brand_info['text'] ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex order-first order-sm-last">
                        <div>
                            <?php
                            echo sprintf(
                                '<img src="%s" srcset="%s" sizes="(min-width: 1920px) 944px, (min-width: 576px) 50vw, 100vw">',
                                $brand_info['image']['sizes']['thumbnail'],
                                wp_calculate_image_srcset(
                                    array( $brand_info['image']['width'], $brand_info['image']['height'] ),
                                    $brand_info['image']['url'],
                                    wp_get_attachment_metadata($brand_info['image']['ID']),
                                    $brand_info['image']['ID']
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;?>

        <?php if ( $products = get_field('brand_products') ) : ?>
            <section class="mb-4">
                <div class="row no-gutters px-sm-1">
                    <?php foreach ( $products as $product ) : ?>
                        <div data-aos="fade-up" class="col-sm-6 col-md-4">
                            <div class="image-with-description">
                                <span class="image-with-description__span text-black"><?php echo $product['name'];?></span>
                                <?php
                                echo sprintf(
                                    '<img src="%s" srcset="%s" sizes="%s" alt="%s">',
                                    $product['image']['url'],
                                    wp_calculate_image_srcset(
                                        array( $product['image']['width'], $product['image']['height'] ),
                                        $product['image']['url'],
                                        wp_get_attachment_metadata( $product['image']['ID'] ),
                                        $product['image']['ID']
                                    ),
                                    '(min-width: 1920px) 623px, (min-width: 768px) 33.333vw, (min-width: 576px) 50vw, 100vw',
                                    $product['name']
                                );
                                ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif;?>

    <?php endwhile; endif; ?>

<?php get_footer();?>
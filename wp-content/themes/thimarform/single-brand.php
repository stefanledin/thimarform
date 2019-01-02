<?php get_header();?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php
        $brand_info = get_field('brand_info');
        if ( isset( $brand_info['text'] ) ) :
        ?>
            <section class="mb-4 text-besides-image bg-grey-light">
                <div class="row no-gutters">
                    <div class="col-sm-6 d-flex">
                        <div class="text-besides-image__content-wrapper">
                            <div class="text-besides-image__content d-flex flex-column">
                                <?php the_title('<h1 class="mb-4">', '</h1>'); ?>
                                <?php echo wpautop( $brand_info['text'] ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex">
                        <div><img src="<?php echo $brand_info['image']['url'];?>"></div>
                    </div>
                </div>
            </section>
        <?php endif;?>

        <?php if ( $products = get_field('brand_products') ) : ?>
            <section class="mb-4">
                <div class="row no-gutters">
                    <?php foreach ( $products as $product ) : ?>
                        <div class="col-sm-4">
                            <div class="image-with-description">
                                <span class="image-with-description__span image-with-description__span--bottom text-black"><?php echo $product['name'];?></span>
                                <img src="<?php echo $product['image']['url'];?>" alt="<?php echo $product['name'];?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif;?>

    <?php endwhile; endif; ?>

<?php get_footer();?>
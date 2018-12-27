<?php
/*
Template name: Nyheter
*/
get_header();
?>

<?php if ( $header = get_field('news_page_header') ) : ?>
    <header class="mb-4 text-besides-image">
        <div class="row no-gutters">
            <div class="col-sm-6 d-flex order-last order-sm-first">
                <div class="py-4 text-besides-image__content-wrapper bg-grey-light">
                    <div class="text-besides-image__content d-flex flex-column">
                        <?php 
                        the_title('<h1 class="mb-4">', '</h1>');
                        if ( $header['introtext'] ) {
                            echo wpautop( $header['introtext'] );
                        }
                        ?>
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
                        <img src="<?php echo $header['block']['background_image']['url'];?>" alt="<?php echo $header['block']['background_image']['alt'];?>">
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
    <section class="mb-4">
        <div class="row no-gutters">
            <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                <div class="col-sm-4">
                    <div class="image-with-description">
                        <span class="image-with-description__span text-white">
                            <time><?php the_time('Y-m-d'); ?></time><br>
                            <?php the_title();?>
                        </span>
                        <?php the_post_thumbnail();?>
                    </div>
                </div>
            <?php wp_reset_postdata(); endforeach;?>
        </div>
    </section>
<?php endif;?>

<?php get_footer();?>
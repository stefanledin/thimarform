<?php
$class = array(
    1 => 'col-sm-8',
    2 => 'col-sm-4'
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
                                echo '<div><img src="'.$image['url'].'"></div>';
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
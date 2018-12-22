<?php
$class = array(
    1 => 'col-sm-8',
    2 => 'col-sm-4'
);
?>
<section class="my-4">
    <?php if ( have_rows('rows') ) : ?> 
        <?php while ( have_rows('rows') ) : the_row(); ?>
            <div class="row">
                <?php if ( have_rows('columns') ) : while ( have_rows('columns') ) : the_row(); ?>
                    <div class="<?php echo $class[get_row_index()];?> d-flex flex-column justify-content-center">
                        <?php
                        if (get_sub_field('content_type') == 'image') {
                            $image = get_sub_field('image');
                            echo '<div><img src="'.$image['url'].'"></div>';
                        } else {
                            the_sub_field('content');
                        }
                        ?>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        <?php endwhile; ?> 
        
    <?php endif; ?>
</section>
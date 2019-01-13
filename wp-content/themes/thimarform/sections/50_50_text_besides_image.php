<?php if ( have_rows('columns') ) : ?>
    <section data-aos="fade-up" class="mb-3 text-besides-image px-sm-3">
        <div class="row no-gutters">
            <?php while (have_rows('columns')) : the_row(); ?>
                <div class="col-sm-6 d-flex <?php echo ( get_row_index() == 1 ) ? 'order-sm-last' : 'order-sm-first';?>">
                    <?php include '50_50_text_besides_image__' . get_sub_field('content_type') . '.php';?>
                </div>
            <?php endwhile;?>
        </div>
    </section>
<?php endif;?>
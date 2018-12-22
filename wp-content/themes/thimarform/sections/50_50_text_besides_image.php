<?php if ( have_rows('columns') ) : ?>
    <section class="mb-4 text-besides-image">
        <div class="row">
            <?php while (have_rows('columns')) : the_row(); ?>
                <div class="col-sm-6 d-flex">
                    <?php include '50_50_text_besides_image__' . get_sub_field('content_type') . '.php';?>
                </div>
            <?php endwhile;?>
        </div>
    </section>
<?php endif;?>
<?php if ( $columns = get_sub_field('news_collage') ) : ?>
    <section class="my-4">
        <div class="row no-gutters">
            <?php foreach ( $columns as $index => $column ) : ?>
                <div class="col-md-4">
                    <?php
                    foreach ($column as $images) {
                        foreach ($images as $image) {
                            echo sprintf('<img src="%s">', $image['url']);
                        }
                        if ($index == 'column_3') : ?>
                            <div class="bg-black p-4">
                                <h1 class="text-white mb-4">Nyheter.</h1>
                                <a href="<?php echo get_permalink_by_path('/nyheter');?>" class="bg-redbrown-light p-2 text-black">Jag vill läsa mer</a>
                            </div>
                        <?php endif;
                    }
                    ?>
                </div>
            <?php endforeach;?>
        </div>
    </section>
<?php endif;?>
<div class="text-besides-image__content-wrapper <?php the_sub_field('background_color'); echo ( get_row_index() == 1 ) ? ' ml-sm-2' : ' mr-sm-2';?>">
    <div class="row no-gutters text-besides-image__content d-flex flex-column py-4">
        <div class="col-10 offset-1">
            <?php
            $headline = get_sub_field('headline');
            if ( ! empty( $headline['text'] ) ) {
                if ( $headline['size'] == 'h1' ) {
                    echo sprintf('<h1 class="mb-4">%s</h1>', $headline['text']);
                }
                if ( $headline['size'] == 'h2' ) {
                    echo sprintf('<h2 class="text-besides-image__h2 mb-4">%s</h2>', $headline['text']);
                }
            }
            if ($text = get_sub_field('text')) {
                echo wpautop($text);
            }
            ?>
            <div class="text-besides-image__button-wrapper">
                <?php
                if (get_sub_field('has_button')) {
                    the_button(get_sub_field('button'));
                }
                ?>
            </div>
        </div>
     </div>
</div>
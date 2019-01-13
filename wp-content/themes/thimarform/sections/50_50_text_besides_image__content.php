<div class="text-besides-image__content-wrapper bg-bluegrey-light">
    <div class="row no-gutters text-besides-image__content d-flex flex-column py-4">
        <div class="col-10 offset-1">
            <?php
            if ($headline = get_sub_field('headline')) {
                echo sprintf('<h1 class="text-besides-image__h1 mb-4">%s</h1>', $headline);
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
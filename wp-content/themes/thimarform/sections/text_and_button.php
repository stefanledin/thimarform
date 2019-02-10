<div class="row no-gutters">
    <div class="col-10 offset-1">
        <div class="text-center">
            <?php echo wpautop( get_sub_field('text') );?>
        </div>
        <?php
        $button = get_sub_field('button');
        if ( !empty($button['link']) ) :
        ?>
            <div class="text-center mb-4">
                <?php the_button( $button );?>
            </div>
        <?php endif; ?>
    </div>
</div>
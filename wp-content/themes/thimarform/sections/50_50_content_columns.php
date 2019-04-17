<section data-aos="fade-up" class="my-5">
    <div class="row no-gutters pt-md-5">
        <div class="col-10 offset-1 mb-2">
            <?php
            if ( $headline = get_sub_field('headline') ) {
                echo sprintf('<h1>%s</h1>', $headline);
            }
            ?>
        </div>
    </div>
    <div class="row no-gutters">
        <?php
        $columns = get_sub_field('columns');
        foreach (array('first', 'second') as $index => $key) {
            if ( ! empty( $columns[$key] ) ) {
                echo '<div class="col-10 offset-1 col-md-5 '.( ($index == 0) ? 'offset-md-1 pr-md-4' : 'offset-md-0 pl-md-4') .'">'.$columns[$key].'</div>';
            }
        }
        ?>
    </div>
</section>
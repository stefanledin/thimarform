<section data-aos="fade-up" class="my-5">
    <div class="row no-gutters pt-md-5">
        <div class="col-10 offset-1 mb-4">
            <?php
            echo sprintf(
                '<h1>%s</h1>', 
                ( $headline = get_sub_field('headline') ) 
                    ? $headline 
                    : get_the_title() 
            );
            ?>
        </div>
    </div>
    <div class="row no-gutters">
        <?php
        $columns = get_sub_field('columns');
        foreach (array('first', 'second') as $key) {
            if ( ! empty( $columns[$key] ) ) {
                echo '<div class="col-10 offset-1 col-md-4 offset-md-1">'.$columns[$key].'</div>';
            }
        }
        ?>
    </div>
</section>
<?php

/**
 * Visar en knapp med pil i rund boll.
 * @param string $link Länken
 * @param string $label Knapptexten
 */
function button_w_arrow( $link, $label = 'Jag vill läsa mer') {
    ?>
    <a href="<?php echo $link;?>" class="btn-w-arrow">
        <span class="btn-w-arrow__label"><?php echo $label;?></span>
        <span class="btn-w-arrow__arrow"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M4 .755l14.374 11.245-14.374 11.219.619.781 15.381-12-15.391-12-.609.755z"/></svg></span>
    </a>
    <?php
}

/**
 * Länk till asset-mappen
 * @param  string $path T.ex. 'img/logo.png'
 * @return string
 */ 
function asset( $path ) {
    return get_bloginfo( 'template_directory' ) . '/assets/' . $path;
}

/**
 * Returnerar dela-länkar
 * @param  string $url Valfri URL eller den nuvarande sidans
 * @return string
 */
function facebook_share_link( $url = null ) {
    return 'https://www.facebook.com/sharer/sharer.php?u=' . ( ( $url ) ? $url : get_permalink() );
}
function twitter_share_link( $url = null ) {
    return 'https://twitter.com/home?status=' . ( ( $url ) ? $url : get_permalink() );
}
function email_share_link( $url = null ) {
    return 'mailto:?&body=' . ( ( $url ) ? $url : get_permalink() );
}

/**
 * Hjälpfunktion för att skriva ut
 * permalänk baserat på en sidas namn.
 * T.ex. 'om-oss/kontakt'
 *
 * @param $path
 * @return false|string
 */
function get_permalink_by_path ( $path ) {
    return get_permalink( get_page_by_path( $path ) );
}

function dd( $value ) {
    die(var_dump($value));
}
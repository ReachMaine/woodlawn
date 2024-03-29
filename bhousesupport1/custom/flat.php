<?php
// override of plugable flatsome functions


if ( ! function_exists( 'flatsome_posted_on' ) ) {

    /**
     * Prints HTML with meta information for the current post-date/time and author.
     * mods:
     *     12Nov15 zig - dont show author in meta
     */
    function flatsome_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );

        $posted_on = sprintf(
            esc_html_x( '%s', 'post date', 'flatsome' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );
        /* $byline = sprintf(
            esc_html_x( 'by %s', 'post author', 'flatsome' ),
            '<span class="meta-author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';
        */
        echo '<span class="posted-on">' . $posted_on . '</span>';
    }
} // end if defined flatsome_posted_on

//add_action('flatsome_after_header', 'wlm_homeslideshow');
function wlm_homeslideshow() {
  if ( is_front_page() ) {
    echo do_shortcode('<div class="wlm-homeslider-block">[block id="huge-it-slider"]</div>');
  }
}

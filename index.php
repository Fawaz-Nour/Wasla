<?php
/**
 * The main template file
 */
get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
    the_post();
        the_title( '<h1>', '</h1>' );
        the_content();
    }
} else {
    _e( 'Sorry, no pages matched your criteria.', 'fawaz' ); 
}
get_footer();
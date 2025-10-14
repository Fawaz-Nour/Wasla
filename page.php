<?php
/**
 * Single Post Template
 */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content/fw-content-page', get_post_format() ); ?>
    <?php
    endwhile;
else :
    get_template_part( 'template-parts/content/fw-content-none', get_post_format() );
endif;

get_footer();
?>
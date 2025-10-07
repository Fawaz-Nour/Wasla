<?php
/**
 * Single Post Template
 */
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
    
    <div class="container bg-e pt-5 justify-content-space-between">
        <?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
        <hr class="text-third">
        <?php the_content(); ?>
    </div>

<?php 
    endwhile;
else :
    _e( 'Sorry, no pages matched your criteria.', 'fawaz' ); 
endif;
get_footer();
?>
<?php
/**
 * Single Post Template
 */
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
    
    <div class="container singl-container">
        <div class="row align-items-center py-5">
            <div class="col-lg-8 pe-5">
                <?php if ( has_post_thumbnail() ) { ?>
                    <?php the_post_thumbnail( 'full', array('class' => 'img-fluid rounded-4') ); ?>
                <?php } else { ?>
                    
                <?php } ?>
            </div>
            <div class="col-lg-4 text-sub">
                <?php the_title( '<h1>','</h1>'); ?>
                <p class="text-white mt-4"><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>
        <div class="row singil">
            <div class="col-9 rounded-4">
                <div class="py-3">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-3">
                 <div class="form">
                    <iframe data-form-title="app.htm" height="500" style="border: none; width: 100%" src='https://atiraspace.com/api/form/67fe277b26e41e393c74a949/generate'></iframe>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    endwhile;
else :
    _e( 'Sorry, no pages matched your criteria.', 'fawaz' ); 
endif;
get_footer();
?>
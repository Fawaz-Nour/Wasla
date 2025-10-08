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
                <p class=" mt-4"><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>
        <div class="row singil">
            <div class="col-9 rounded-4">
                <div class="py-3">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-3">
                 <div class="form bg-white rounded-3 s">
                    <iframe data-form-title="form" height="400" style="border: none; width: 100%" src='https://atiraspace.com/api/form/68e69a2ac1ec9ad7e74fb693/generate'></iframe>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    endwhile;
else :
    _e( 'عذرا، لا توجد صفحات تطابق معاييرك.', 'fawaz' ); 
endif;
get_footer();
?>
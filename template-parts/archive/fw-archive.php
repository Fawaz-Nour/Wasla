<div class="col-lg-4 col-12 mb-5">
    <div class="card fw-card h-100 m-auto" style="max-width:440px;" data-aos="fade-up" data-aos-delay="100">
        <div class="fw-head">
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( 'full', array('class' => 'img-fluid fw-img') ) ;?>
                </a>
            <?php else : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php echo '<img class="img-fluid fw-img" src="' . get_template_directory_uri() . '/assets/img/default.jpg" alt="Default" />'; ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="card-body">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title('<h3>','</h3>'); ?>
            </a>
            <div class="excerpt">
                <?php the_excerpt(); ?>
            </div>
        </div>
        <div class="card-footer text-start">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php _e('<i class="fa fa-arrow-left me-2"></i>', 'wasla'); ?>
                <?php _e('اقرأ المزيد','wasla') ?>
            </a>
        </div>
    </div>
</div>
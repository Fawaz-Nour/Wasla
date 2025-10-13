<div class="fw-single container">
    <div class="fw-single-hero row align-items-center gy-4">
        <div class="col-12 col-lg-8">
            <div class="fw-single-image">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid rounded-4' ) ); ?>
                <?php else : ?>
                    <img class="img-fluid rounded-4" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/default.jpg' ); ?>" alt="Default">
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="fw-single-titl">
                <?php the_title( '<h1 class="fw-title text-main">','</h1>'); ?>
                <p class="fw-excerpt mt-4"><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 rounded-4">
            <div class="fw-post-meta d-flex align-items-center justify-content-between flex-wrap mt-2 mt-lg-4 p-3 rounded-3 shadow-sm">
                <div class="meta-item d-flex align-items-center gap-2">
                    <i class="fa-regular fa-calendar text-main"></i>
                    <span><?php echo get_the_date('j F Y'); ?></span>
                </div>
                <div class="meta-item d-flex align-items-center gap-2">
                    <i class="fa-regular fa-eye text-sub"></i>
                    <span><?php echo pw_get_post_views(get_the_ID()); ?> مشاهدة</span>
                </div>
            </div>
            <div class="fw-single-content shadow-sm rounded-4 bg-white p-3 p-lg-4 mt-2 mt-lg-4">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="fw-single-sidebar mt-2">
                <iframe data-form-title="form" height="450" style="border: none; width: 100%" src='https://staging.app.atiraspace.com/api/form/68ed2678f5c05bd39291e8e3/generate'></iframe>
            </div>
        </div>
    </div>
</div>
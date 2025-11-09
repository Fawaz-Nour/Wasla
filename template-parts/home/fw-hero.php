<?php
	$whatsapp_floating   = esc_url( trim( get_theme_mod('fw_floating_whatsapp') ) );
?>

<!-- Hero -->
<section class="fw-hero" id="fw-home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="hero-content">
                    <h1>
                        <?php _e('كل مهارة متوفرة <span class="highlight">هنا</span>', 'wasla'); ?>
                    </h1>
                    <p><?php _e('تعلم بسهولة وارتقِ بمهاراتك خطوة خطوة — دورات وخدمات متوفرة لك في مكان واحد لتبدأ وتتقدم بالطريقة التي تناسبك.', 'wasla'); ?></p>
                    <div class="hero-buttons" data-aos="fade-up" data-aos-delay="300">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?cat=22" class="btn fw-btn btn-main"><?php _e('تصفح الدورات', 'wasla')?></a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>?cat=19" class="btn fw-btn btn-sub"><?php _e('اطلب خدمة', 'wasla')?></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="500">
                <div class="hero-image d-none d-lg-block">
                    <div class="hero-image-container">
                        <img class="shadow rounded-5" src="http://wasla.local/wp-content/uploads/2025/11/person-working-laptop-with-cup-coffee-table-scaled.jpg" alt="Hero">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
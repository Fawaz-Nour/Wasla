<!-- Hero Slider -->
<section class="fw-hero hero-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 3; $i++): 
                $title    = get_theme_mod("slide_title_$i");
                $subtitle = get_theme_mod("slide_subtitle_$i");
                $link     = get_theme_mod("slide_link_$i");
                $image    = get_theme_mod("slide_image_$i");

                if (empty($title) && empty($subtitle) && empty($image)) {
                    continue;
                }
            ?>
                <div class="swiper-slide">
                    <div class="container d-flex justify-content-between align-items-center flex-wrap">
                        <div class="slide-content">
                            <?php if ($title): ?>
                                <h1 class="slide-title"><?php echo esc_html($title); ?></h1>
                            <?php endif; ?>

                            <?php if ($subtitle): ?>
                                <p class="slide-text"><?php echo esc_html($subtitle); ?></p>
                            <?php endif; ?>

                            <?php if ($link): ?>
                                <a href="<?php echo esc_url($link); ?>" class="slide-button">
                                    <?php _e('Learn More', 'realat'); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <?php if ($image): ?>
                            <div class="slide-image">
                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title ?: 'Hero Slide'); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <!-- Pagination & Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
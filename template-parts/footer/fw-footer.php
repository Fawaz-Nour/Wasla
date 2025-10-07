<?php
    // Theme Customizer variables (logo, email, phone, social links)
    $logo      = esc_url( get_theme_mod('fw_logo') );
    $email     = esc_html( trim( get_theme_mod('fw_email') ) );
    $phone     = esc_html( trim( get_theme_mod('fw_phone') ) );
    $facebook  = esc_url( trim( get_theme_mod('fw_facebook') ) );
    $instagram = esc_url( trim( get_theme_mod('fw_instagram') ) );
    $telegram  = esc_url( trim( get_theme_mod('fw_telegram') ) );
    $youtube   = esc_url( trim( get_theme_mod('fw_youtube') ) );
?>
<div class="container">
    <div class="row gy-4">
        <!-- Logo & About -->
        <div class="col-12 col-lg-3">
            <div class="fw-footer-brand pb-lg-0 pb-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/w-icon.png" 
                     alt="<?php esc_attr_e('براعم النور','wasla'); ?>" class="mb-3" style="width:80px;">
                <p class="fw-footer-text">
                    <?php _e('براعم النور منصة متخصصة في تحفيظ وتعليم القرآن الكريم للأطفال بأسلوب ممتع وتفاعلي يجمع بين الأصالة والتقنية الحديثة.', 'wasla'); ?>
                </p>
                <a href="<?php echo esc_url( home_url('/about-us') ); ?>" 
                   class="btn fw-btn-footer mt-2 fw-bold"><?php _e('اقرأ المزيد', 'wasla'); ?></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="col-12 col-lg-3">
            <div class="fw-footer-links">
                <h5 class="fw-bold mb-3"><?php _e('روابط سريعة','wasla'); ?></h5>
                <?php
					wp_nav_menu(array(
							'theme_location' => 'foot-1',
							'container'      => false,
							'menu_class'     => 'list-unstyled',
							'depth'          => 1,
							'fallback_cb'    => false,
						)
					);
				?>
            </div>
        </div>

        <!-- Useful Links -->
        <div class="col-12 col-lg-3">
            <div class="fw-footer-links">
                <h5 class="fw-bold mb-3"><?php _e('روابط مفيدة','wasla'); ?></h5>
                <?php
					wp_nav_menu(array(
							'theme_location' => 'foot-2',
							'container'      => false,
							'menu_class'     => 'list-unstyled',
							'depth'          => 1,
							'fallback_cb'    => false,
						)
					);
				?>
            </div>
        </div>

        <!-- Social Media -->
        <div class="col-12 col-lg-3">
            <div class="fw-footer-social">
                <h5 class="fw-bold mb-3"><?php _e('تواصل معنا','wasla'); ?></h5>

                <ul class="list-unstyled fw-footer-extra">
                    <li class="mb-2">
                        <?php if ( $email ) : ?>
                            <a href="mailto:<?php echo esc_attr($email); ?>">
                                <i class="fas fa-envelope me-2 fs-5"></i> <?php echo esc_html($email); ?>
                            </a>            
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                        <?php if ( $phone ) : ?>
                            <a href="https://wa.me/<?php echo esc_attr($phone); ?>" target="_blank">
                                <i class="fab fa-whatsapp me-2 fs-5"></i> <?php echo esc_html($phone); ?>
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>

                <ul class="list-inline mt-3 mt-lg-5">
                    <li class="list-inline-item">
                        <?php if ( $facebook ) : ?>
                            <a href="<?php echo esc_url($facebook); ?>" class="text-white fs-4" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                    </li>
                    <li class="list-inline-item">
                        <?php if ( $instagram ) : ?>
                            <a href="<?php echo esc_url($instagram); ?>" class="text-white fs-4" target="_blank"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                    </li>
                    <li class="list-inline-item">
                        <?php if ( $telegram ) : ?>
                            <a href="<?php echo esc_url($telegram); ?>" class="text-white fs-4" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                        <?php endif; ?>
                    </li>
                    <li class="list-inline-item">
                        <?php if ( $youtube ) : ?>
                            <a href="<?php echo esc_url($youtube); ?>" class="text-white fs-4" target="_blank"><i class="fab fa-youtube"></i></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Footer Main Menu -->
    <div class="text-center mt-3">
    <?php
	wp_nav_menu(array(
		'theme_location' => 'foot-menu',
		'container'      => false,
		'menu_class'     => 'list-unstyled',
		'depth'          => 1,
		'fallback_cb'    => false,
	));
	?>
    </div>

    <!-- CopyRight -->
    <div class="text-center mt-4 border-top pt-3">
        <p class="mb-0">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php _e('جميع الحقوق محفوظة','wasla'); ?></p>
    </div>
</div>
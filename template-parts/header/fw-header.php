<!-- Header -->
<header class="fw-header">
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

	<!-- Top Banner -->
	<div class="fw-top-banner d-flex justify-content-between align-items-center px-3 py-1">
		<div class="fw-contact-info">
            <?php if ( $email ) : ?>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="fw-email">
                    <i class="fas fa-envelope"></i> <?php echo esc_html($email); ?>
                </a>            
            <?php endif; ?>
            
            <?php if ( $phone ) : ?>
                <a href="https://wa.me/<?php echo esc_attr($phone); ?>" class="fw-phone">
                    <?php echo esc_html($phone); ?> <i class="fas fa-phone-alt"></i>
                </a>
            <?php endif; ?>
		</div>

		<div class="fw-social gap-3 d-none d-lg-flex">
		    <?php if ( $facebook ) : ?>
                <a href="<?php echo esc_url($facebook); ?>" class="fw-social-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>
            <?php if ( $instagram ) : ?>
                <a href="<?php echo esc_url($instagram); ?>" class="fw-social-link" target="_blank"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>
            <?php if ( $telegram ) : ?>
                <a href="<?php echo esc_url($telegram); ?>" class="fw-social-link" target="_blank"><i class="fab fa-telegram-plane"></i></a>
            <?php endif; ?>
            <?php if ( $youtube ) : ?>
                <a href="<?php echo esc_url($youtube); ?>" class="fw-social-link" target="_blank"><i class="fab fa-youtube"></i></a>
            <?php endif; ?>
		</div>
	</div>

	<!-- Navbar -->
	<nav id="fw-nav" class="navbar navbar-expand-lg navbar-light fw-navbar">
		<div class="container">
			<a class="navbar-brand fw-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                <?php if ( $logo ) : ?>
                    <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" style="height:50px; object-fit:contain;">
                <?php else : ?>
                    <?php echo esc_attr(get_bloginfo('name')); ?>
                <?php endif; ?>
            </a>
			<button class="navbar-toggler fw-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon fw-navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse fw-collapse" id="navbarNav">
                <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'fw-nav navbar-nav me-auto ms-3 mb-2 mb-md-0',
                    'container_class' => 'fw-main-menu m-auto fw-bold',
                    'items_wrap'      => '<ul id="fw-main-nav" class="%2$s">%3$s</ul>',
                    'fallback_cb'     => false,
                ) );
                ?>
			</div>
            <div class="auth-buttons">
                <a class="btn fw-btn btn-out" href="<?php echo esc_url( wp_login_url() ); ?>">
                    <?php _e( 'تسجيل الدخول', 'wasla' ); ?>
                </a>
                <a class="btn fw-btn btn-main" href="<?php echo esc_url( wp_registration_url() ); ?>">
                    <?php _e( 'إنشاء حساب', 'wasla' ); ?>
                </a>
            </div>
		</div>
	</nav>
</header>
<?php
    // Theme Customizer variables (logo, email, phone, social links)
    $logo      = esc_url( get_theme_mod('fw_logo') );
    $email     = esc_html( trim( get_theme_mod('fw_email') ) );
    $phone     = esc_html( trim( get_theme_mod('fw_phone') ) );
	$whatsapp_floating   = esc_url( trim( get_theme_mod('fw_floating_whatsapp') ) );
?>
<!-- Header -->
<div class="top-header bg-main py-1 d-none d-lg-block">
	<div class="container">
		<div class="row justify-content-between align-items-center flex-wrap">
			<div class="col-6">
				<div class="d-flex align-items-center gap-3">
					<a href="mailto:<?php echo esc_attr($email); ?>" class="text-white">
						<i class="fa-solid fa-envelope me-1"></i> <?php echo esc_attr($email); ?>
					</a>
					<a href="https://wa.me/<?php echo preg_replace('/\D/', '', $whatsapp_floating); ?>" class="text-white">
						<i class="fa-solid fa-phone me-1"></i> +<?php echo preg_replace('/\D/', '', $whatsapp_floating); ?>
					</a>
				</div>
			</div>
			<div class="col-6">
				<div class="text-end">
					<p class="m-0 text-white"><i class="fa-solid fa-bolt me-1"></i><?php _e('ابدأ السنة بقوة! خصم 45% على جميع الدورات لفترة محدودة.', 'wasla') ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="fw-header" class="fw-header">
	<div class="container">
		<div class="row align-items-center py-1">
			
			<div class="col-6 col-lg-2">
				<div class="fw-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>">
						<img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" />
					</a>
				</div>
			</div>

			<div class="col-lg-6 d-none d-lg-block">
				<div class="px-2">
					<nav id="fw-nav" class="navbar navbar-expand-sm fw-navbar">
						<?php
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'menu_class'      => 'fw-nav navbar-nav me-auto ms-3 mb-2 mb-md-0 d-none d-md-flex',
							'container_class' => 'fw-main-menu',
							'items_wrap'      => '<ul id="fw-main-nav" class="%2$s">%3$s</ul>',
							'fallback_cb'     => false,
						));
						?>
					</nav>
				</div>
			</div>

			<div class="col-6 col-lg-4 text-end">

				<div class="wpml-language d-none d-lg-block">
					<?php do_action('wpml_add_language_selector'); ?>
				</div>

				<div class="fw-header-buttons d-none d-lg-block">
					<?php if ( $whatsapp_floating ) : ?>
						<a class="btn fw-btn btn-sub" href="https://wa.me/<?php echo preg_replace('/\D/', '', $whatsapp_floating); ?>">
							<i class="fa-brands fa-whatsapp me-1 fs-5"></i> <?php _e('استفسر الآن', 'wasla'); ?>
						</a>
					<?php else : ?>
						<a class="btn fw-btn btn-sub" href="https://wa.me/">
							<i class="fa-brands fa-whatsapp me-1 fs-5"></i> <?php _e('استفسر الآن', 'wasla'); ?>
						</a>
					<?php endif; ?>
				</div>

				<div class="d-lg-none">
                    <button class="fw-navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#fwOffcanvasMenu" aria-controls="fwOffcanvasMenu">
                        <span class="fw-navbar-toggler-icon"></span>
                    </button>
				</div>

			</div>
		</div>
	</div>

    <div class="offcanvas offcanvas-end offcanvas-full d-lg-none" tabindex="-1" id="fwOffcanvasMenu" aria-labelledby="fwOffcanvasMenuLabel">
		<div class="offcanvas-header">
            <div class="fw-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>">
                    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" />
                </a>
            </div>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'navbar-nav fw-offcanvas-nav',
                'container'      => false,
                'depth'          => 2,
                'link_before'    => '<i class="fa-solid fa-circle-dot me-2"></i>',
                'link_after'     => '',
                'fallback_cb'    => false,
            ) );
            ?>
			<hr>
			<?php if ( $whatsapp_floating ) : ?>
				<a class="btn fw-btn btn-sub" href="https://wa.me/<?php echo preg_replace('/\D/', '', $whatsapp_floating); ?>">
					<i class="fa-brands fa-whatsapp me-1 fs-5"></i> <?php _e('استفسر الآن', 'wasla'); ?>
				</a>
			<?php else : ?>
				<a class="btn fw-btn btn-sub" href="https://wa.me/">
					<i class="fa-brands fa-whatsapp me-1 fs-5"></i> <?php _e('استفسر الآن', 'wasla'); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>
</header>
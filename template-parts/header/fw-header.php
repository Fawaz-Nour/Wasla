<!-- Header -->
<header id="fw-header" class="fw-header">
	<div class="container">
		<div class="row align-items-center py-3">
			
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
					<a class="btn fw-btn btn-out mx-2" href="<?php echo esc_url( wp_login_url() ); ?>">
						<i class="fa-solid fa-arrow-right-to-bracket me-1"></i> <?php _e('تسجيل الدخول', 'wasla'); ?>
					</a>
					<a class="btn fw-btn btn-main" href="<?php echo esc_url( wp_registration_url() ); ?>">
						<i class="fa-solid fa-user-plus me-1"></i> <?php _e('إنشاء حساب', 'wasla'); ?>
					</a>
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
            <a class="btn fw-btn btn-out w-100 mb-2" href="<?php echo esc_url( wp_login_url() ); ?>">
                <i class="fa-solid fa-arrow-right-to-bracket me-1"></i> <?php _e('تسجيل الدخول', 'wasla'); ?>
            </a>
            <a class="btn fw-btn btn-main w-100" href="<?php echo esc_url( wp_registration_url() ); ?>">
                <i class="fa-solid fa-user-plus me-1"></i> <?php _e('إنشاء حساب', 'wasla'); ?>
            </a>
		</div>
	</div>
</header>
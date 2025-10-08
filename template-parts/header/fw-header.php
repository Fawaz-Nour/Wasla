<!-- Header -->
<header class="fw-header">
	<nav id="fw-nav" class="navbar navbar-expand-lg navbar-light fw-navbar">
		<div class="container">
			<a class="navbar-brand fw-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                <?php echo esc_attr(get_bloginfo('name')); ?>
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
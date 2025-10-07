<?php
/**
 * The header for Wasla Theme
 *
 * @package Wasla
 * @author Fawaz
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="theme-color" content="#5BA88E">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>

	<!-- SEO Meta -->
	<meta name="description" content="موقع مخصص لتحفيظ القرآن الكريم للأطفال بطريقة ممتعة وتفاعلية.">
	<meta name="keywords" content="تحفيظ القرآن, تعليم القرآن, أطفال, مدرسة قرآن, تلاوة, تجويد">
	<meta name="author" content="Fawaz">

	<!-- Open Graph -->
	<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
	<meta property="og:description" content="تعليم وتحفيظ القرآن الكريم للأطفال بأسلوب تفاعلي.">
	<meta property="og:image" content="https://example.com/og-image.jpg">
	<meta property="og:url" content="<?php echo esc_url( home_url('/') ); ?>">
	<meta property="og:type" content="website">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?>">
	<meta name="twitter:description" content="تعليم وتحفيظ القرآن الكريم للأطفال بأسلوب ممتع.">
	<meta name="twitter:image" content="https://example.com/twitter-image.jpg">

	<!-- Favicon -->
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon.png">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/header/fw-header' ); ?>
<?php
/**
 * The main template file
 */
get_header();
?>

<!--Main-->
<main>
    <?php get_template_part('template-parts/home/fw-hero') ?>
    <?php get_template_part('template-parts/home/fw-how') ?>
</main>
<!--/Main-->

<?php get_footer(); ?>
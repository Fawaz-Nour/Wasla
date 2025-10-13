<?php
/**
 * Single Post Template
 */
get_header();
?>

<main class="fw-single my-2">

<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content/fw-content', get_post_format() );
        ?>

        <div class="container single-container">
            <?php
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            ?>
        </div>
        
<?php endwhile; ?>
<?php endif; ?>
</main>

<?php get_footer(); ?>
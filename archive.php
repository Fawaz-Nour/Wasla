<?php
/**
 * The main template file
 */
get_header();
?>
<main>
     <section class="fw-archive">
        <div class="container">
            <div class="fw-archive-head text-center pt-4 pb-5">
                <h1 class="text-sub fw-bold">المدونة</h1>
                <p class="text-gray fw-medium">هنا تجد أحدث المقالات والمعلومات المفيدة في مجالنا، تصفح واستمتع بالقراءة!</p>
            </div>
            
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'template-parts/archive/fw-archive', get_post_format() ); ?>
					<?php endwhile; ?>
					<div class="d-flex justify-content-center my-4">
						<?php get_template_part('template-parts/tools/pagination'); ?>
					</div>
				<?php else : ?>
					<?php get_template_part('template-parts/archive/fw-archive', 'none'); ?>
				<?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
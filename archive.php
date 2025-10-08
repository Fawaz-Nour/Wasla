<?php
/**
 * The main template file
 */
get_header();
?>
<main>
     <section>
        <div class="container mt-4">
            <h1 class="text-center mb-4 text-sub">المدونة</h1>
            
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-6 mb-4">
                        <div class="card shadow-sm">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-img img-fixed" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');"></div>
                                </a>
                            <?php endif; ?>
                            <div class="card-body">
                                <?php the_title( '<h5>', '</h5>' ); ?>
                                <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-main rounded-pill py-1 px-4">اقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                    <p class="text-center">عذراً، لا توجد مشاركات متاحة في الوقت الحالي.</p>
                <?php endif; ?>
            </div>
        
            <div class="d-flex justify-content-center my-4 text-fourth">
                <?php 
                the_posts_pagination(array(
                    'mid_size'  => 3,
                    'prev_text' => __('« Previous', 'wasla'),
                    'next_text' => __('Next »', 'wasla'),
                ));
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
<?php
/**
 * No posts template
 */
?>

<div class="fw-archive-none text-center py-5 my-5">
    <i class="fa fa-folder-open fa-3x mb-3"></i>
    <h2><?php _e('عذرًا، لا توجد مقالات حاليًا', 'wasla'); ?></h2>
    <p><?php _e('تابعنا قريبًا، سنضيف المزيد من المقالات والمحتوى المفيد.', 'wasla'); ?></p>

    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn fw-btn btn-main mt-3">
        <?php _e('العودة للصفحة الرئيسية', 'wasla'); ?>
    </a>
</div>
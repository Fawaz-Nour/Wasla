<div class="pagination p-3 my-3 mx-auto">
    <?php
    the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __( '<i class="fas fa-arrow-left fs-5"></i>', 'wasla' ),
        'next_text' => __( '<i class="fas fa-arrow-right fs-5"></i>', 'wasla' ),
    ) );
    ?>
</div>
<?php

$Main_slider = fw_get_db_customizer_option('Main_slider');

$args = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 5, // اصلاح نام پارامتر
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category', // ساختار صحیح tax_query
                'field' => 'term_id',
                'terms' => $Main_slider,
            ),
        ),
    )
);


if ($args->have_posts()) {
    while ($args->have_posts()) {
        $args->the_post(); // دریافت پست‌ها از $args
?>

        <div class="position-relative overflow-hidden" style="height: 500px">
            <img class="img-fluid h-100" src="<?php echo get_the_post_thumbnail_url(); ?>" style="object-fit: cover" alt="<?php the_title(); ?>" />
            <div class="overlay">
                <div class="mb-2">
                    <a class="badge badge-primary  font-weight-semi-bold p-2 ml-2" href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>">
                        <?php echo get_the_category()[0]->name; ?>
                    </a>
                    <span class="text-white" href=""><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></span>
                </div>
                <a class="h2 m-0 text-white  font-weight-bold" href="<?php echo get_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </div>
        </div>

<?php
    }
} else {
    echo 'NO Categories Chosen';
}
wp_reset_postdata(); // بازگرداندن داده‌های پست
?>
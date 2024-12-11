<?php

$middle_content = fw_get_db_customizer_option('middle_content');

$args = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $middle_content,
            ),
        ),
    ),
);

if (!empty($middle_content)) {
    if ($args->have_posts()) {
        while ($args->have_posts()) {
            $args->the_post();
?>
            <div class="col-lg-4">
                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px; ">
                    <img class="img-fluid" style="width: 110px; height: 100%;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-right-0">
                        <div class="mb-2">
                            <a class="badge badge-primary font-weight-semi-bold p-1 ml-2" href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><?php echo get_the_category()[0]->name; ?></a>
                            <a class="text-body" href="<?php the_permalink(); ?>"><small><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></small></a>
                        </div>
                        <a class="h6 m-0 text-secondary font-weight-bold" href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8); ?></a>
                    </div>
                </div>
            </div>
<?php
        }
    }
} else {
    echo 'No category choose';
}
?>
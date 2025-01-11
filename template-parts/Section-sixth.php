<?php

$Sixth_section_cat = fw_get_db_customizer_option('Sixth_section_cat');

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
                'terms' => $Sixth_section_cat,
            ),
        ),
    ),
);

if (!empty($Sixth_section_cat)) {
    if ($args->have_posts()) {
        while ($args->have_posts()) {
            $args->the_post();
?>
            <div class="col-lg-4">
                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px; ">
                    <img class="img-fluid" style="width: 110px; height: 100%; object-fit: cover;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-right-0">
                        <div class="mb-2">
                            <a class="badge badge-primary font-weight-semi-bold p-1 ml-2" href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><?php echo get_the_category()[0]->name; ?></a>
                            <span><small><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></small></span>
                        </div>
                        <a class="h6 m-0 text-secondary font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
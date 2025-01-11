<?php

$Eighth_section_cat = fw_get_db_customizer_option('Eighth_section_cat');

$args = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'date',    // اصلاح شد
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $Eighth_section_cat,
            ),
        ),
    ),
);

if (!empty($Eighth_section_cat)) {
    if ($args->have_posts()) {
        while ($args->have_posts()) {
            $args->the_post();
?>
            <div class="position-relative overflow-hidden" style="height: 300px">
                <img
                    class="img-fluid h-100"
                    src="<?php echo get_the_post_thumbnail_url() ?>"
                    style="object-fit: cover" alt="<?php the_title(); ?>" />
                <div class="overlay">
                    <div class="mb-2">
                        <a
                            class="badge badge-primary  font-weight-semi-bold p-2 ml-2"
                            href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name ?></a>
                        <span class="text-white"><small><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></small></span>
                    </div>
                    <a
                        class="h6 m-0 text-white  font-weight-semi-bold"
                        href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </div>
            </div>
<?php
        }
    }
} else {
    echo ' No category Choose ';
}
wp_reset_postdata();
?>
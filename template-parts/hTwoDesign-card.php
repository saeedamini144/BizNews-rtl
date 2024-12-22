 <?php

    $Last_content = fw_get_db_customizer_option('Last_content');

    $args = new WP_Query(
        array(
            'post_type' => 'post',
            'posts_per_page' => 8,
            'orderby' => 'date',
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $Last_content,
                ),
            ),
        ),
    );

    if (!empty($Last_content)) {
        if ($args->have_posts()) {
            $posts_counter = 0;
            while ($args->have_posts()) {
                $args->the_post();
                $posts_counter++;
                if ($posts_counter <= 2) {
    ?>
                 <div class="col-lg-6">
                     <div class="row news-lg mx-0 mb-3">
                         <div class="col-md-6 h-100 px-0 bg-white">
                             <img
                                 class="img-fluid h-100"
                                 src="<?php echo the_post_thumbnail_url(); ?>"
                                 style="object-fit: cover; height: 240px;" alt="<?php the_title(); ?>" />
                         </div>
                         <div
                             class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                             <div class="mt-auto p-4">
                                 <div class="mb-2">
                                     <a
                                         class="badge badge-primary  font-weight-semi-bold p-2 ml-2"
                                         href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name ?>
                                     </a>
                                     <span class="text-body" href=""><small><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></small></span>
                                 </div>
                                 <a
                                     class="h4 d-block mb-3 text-secondary  font-weight-bold"
                                     href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                 <p class="m-0">
                                     <?php echo wp_trim_words(get_the_excerpt(), 15, '...') ?>
                                 </p>
                             </div>
                             <div
                                 class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                 <div class="d-flex align-items-center">
                                     <img
                                         class="rounded-circle ml-2"
                                         src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
                                         width="25"
                                         height="25"
                                         alt="" />
                                     <small><?php the_author() ?></small>
                                 </div>
                                 <div class="d-flex align-items-center">
                                     <!-- <small class="ml-3"><i class="far fa-eye ml-2"></i>12345</small> -->
                                     <small class="ml-3"><i class="far fa-comment ml-2"></i><?php comments_number(' ', '1 نظر', '% نظر'); ?></small>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php
                } elseif ($posts_counter > 2 && $posts_counter <= 8) {

                ?>
                 <div class="col-lg-4">
                     <div class="d-flex align-items-center bg-white mb-3" style="height: 110px; ">
                         <img class="img-fluid" style="width: 110px; height: 100%; object-fit: cover;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                         <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-right-0">
                             <div class="mb-2">
                                 <a class="badge badge-primary  font-weight-semi-bold p-1 ml-2" href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><?php echo get_the_category()[0]->name; ?></a>
                                 <a class="text-body" href="<?php the_permalink(); ?>"><small><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></small></a>
                             </div>
                             <a class="h6 m-0 text-secondary  font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                         </div>
                     </div>
                 </div>
 <?php

                }
            }
        }
    } else {
        echo 'No category Choose';
    }
    wp_reset_postdata();
    ?>
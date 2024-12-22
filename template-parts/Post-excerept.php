<div class="col-l-6 col-lg-4">
    <div class="position-relative mb-3">
        <img
            class="img-fluid w-100"
            src="<?php echo the_post_thumbnail_url() ?>"
            style="object-fit: cover; height: 240px;" alt="<?php the_title(); ?>" />
        <div class="bg-white border border-top-0 p-4 card-height">
            <div class="mb-2">
                <a
                    class="badge badge-primary  font-weight-semi-bold p-2 ml-2"
                    href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name ?></a>
                <span><small><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></small></span>
            </div>
            <a
                class="h4 d-block mb-3 text-secondary  font-weight-bold"
                href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            <p class="m-0">
                <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
            </p>
        </div>
        <div
            class="d-flex justify-content-between bg-white border border-top-0 p-4">
            <div class="d-flex align-items-center">
                <img
                    class="rounded-circle ml-2"
                    src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
                    width="25"
                    height="25"
                    alt="Author-image" />
                <small><?php the_author() ?></small>
            </div>
            <div class="d-flex align-items-center">
                <!-- <small class="ml-3"><i class="far fa-eye ml-2"></i>12345</small> -->
                <small class="ml-3"><i class="far fa-comment ml-2"></i><?php comments_number(' ', '1 نظر', '% نظر'); ?>
                </small>
            </div>
        </div>
    </div>
</div>
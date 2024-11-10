<?php
get_header();
?>

<body>

    <div class="container-fluid">
        <div class=" container">
            <div class="row pt-5 ">
                <div class="section-title col-lg-12 col-md-12 align-middle">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs" class="mt-2">', '</p>');
                    }
                    ?>
                </div>
                <div class="col-lg-8 col-md-12">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="<?php echo get_the_post_thumbnail_url(); ?>" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name; ?></a>
                                <span class="text-body"><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></span>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?php echo get_the_title() ?></h1>

                            <!-- Post Content -->
                            <?php if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    the_content();
                                }
                            } ?>
                            <!-- Post Content -->
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4 flex-wrap">
                            <div class="d-flex align-items-center">
                                <img
                                    class="rounded-circle ml-2"
                                    src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
                                    width="25"
                                    height="25"
                                    alt=" " />
                                <small><?php the_author() ?></small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <?php get_template_part('/template-parts/sidbar', 'main') ?>
                <!-- Sidebar -->

            </div>
        </div>
        <div class=" container">
            <div class="row pt-5">
                <div class="col-12">
                    <!-- Comments -->
                    <?php comments_template('/comments.php'); ?>
                    <!-- Comments -->
                </div>
            </div>

        </div>
    </div>

</body>

<?php
get_footer();
?>
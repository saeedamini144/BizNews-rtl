<?php
get_header();
?>

<body>

    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h1 class="m-0 text-uppercase font-weight-bold"> نتایج جستجو :
                                    <?php
                                    echo get_search_query()
                                    ?>
                                </h1>
                                <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a> -->
                            </div>

                            <div class="row">
                                <!--  content  -->
                                <?php
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        get_template_part('/template-parts/Post', 'excerept');
                                    }
                                } else {
                                    echo 'اطلاعاتی یافت نشد';
                                }
                                wp_reset_postdata();
                                ?>
                                <!--  content  -->
                            </div>

                        </div>
                    </div>
                </div>

                <!--  Sidebar  -->
                <?php get_template_part('/template-parts/sidbar', 'main') ?>
                <!--  Sidebar  -->

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">

                            <?php
                            the_posts_pagination(array(
                                'mid_size'  => 2,
                                'prev_text' => __('&#8594;', 'textdomain'),
                                'next_text' => __('&#8592;', 'textdomain'),
                            ));
                            ?>

                        </div>

                    </div>
                </div>
            </div>
            <div>
                <?php the_archive_description('<div class="taxonomy-description">', '</div>') ?>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->

</body>
<?php
get_footer();
?>

</html>
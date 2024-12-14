<?php
get_header();
?>

<body>

    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <!--  content  -->
                                <?php
                                if (have_posts()) {
                                    while (have_posts()) {
                                        the_post();
                                        get_template_part('/template-parts/Post', 'excerept');
                                    }
                                } else {
                                    echo 'No post found';
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
            <div class="container-fluid">
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
        </div>
    </div>

</body>
<?php
get_footer();
?>

</html>
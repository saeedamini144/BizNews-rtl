<?php
$sidbar_post_add_title = fw_get_db_customizer_option('sidbar_post_add_title');
$sidbar_post_banner_adds = fw_get_db_customizer_option('sidbar_post_banner_adds');
$Banner_sidbar_post_link = fw_get_db_customizer_option('Banner_sidbar_post_link');
$Banner_sidbar_post_alt = fw_get_db_customizer_option('Banner_sidbar_post_alt');
$Banner_sidbar_post_rel = fw_get_db_customizer_option('Banner_sidbar_post_rel');
$trending_sidbar_post = fw_get_db_customizer_option('trending_sidbar_post');
$sidbar_post_show_category = fw_get_db_customizer_option('sidbar_post_show_category');
?>

<aside class="col-lg-3">
    <div class="inner-sidbar">

        <!-- Ads Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <span class="m-0 "><?php echo $sidbar_post_add_title ?></span>
            </div>
            <div class="bg-white text-center border border-top-0 p-3">
                <a href="<?php echo $Banner_sidbar_post_link; ?>" rel="<?php echo $Banner_sidbar_post_rel ?>" target="_blank">
                    <img
                        class="img-fluid"
                        src="<?php if (!empty($sidbar_post_banner_adds)) {
                                    echo $sidbar_post_banner_adds['url'];
                                } else {
                                    echo " ";
                                }
                                ?>"
                        alt="<?php echo $Banner_sidbar_post_alt; ?>" />
                </a>
            </div>
        </div>
        <!-- Ads End -->

        <!-- Popular News Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <span class="m-0 "><?php echo $trending_sidbar_post ?></span>
            </div>
            <div class="bg-white border border-top-0 p-3">

                <!-- trending News  -->
                <?php related_post_sidebar(); ?>
                <!-- trending News -->

            </div>
        </div>
        <!-- Popular News End -->

        <!-- Newsletter Start -->
        <!-- <div class="mb-3">
            <div class="section-title mb-0">
                <h4 class="m-0 font-weight-bold">Newsletter</h4>
            </div>
            <div class="bg-white text-center border border-top-0 p-3">
                <p>
                    Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd
                </p>
                <div class="input-group mb-2" style="width: 100%">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Your Email" />
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                    </div>
                </div>
                <small>Lorem ipsum dolor sit amet elit</small>
            </div>
        </div> -->
        <!-- Newsletter End -->

        <!-- category Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <span class="m-0"><?php echo $sidbar_post_show_category ?></span>
            </div>
            <div class="bg-white border border-top-0 p-3">
                <div class="d-flex flex-wrap m-n1">
                    <?php
                    $categories = get_categories();
                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                    ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="btn btn-sm btn-outline-secondary m-1">
                                <?php echo esc_html($category->name); ?>
                            </a>
                    <?php
                        }
                    } else {
                        echo 'No categories found';
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- category End -->
    </div>
</aside>
<?php
get_header();
?>

<body>
    <div class="container-fluid">
        <div class="container">
            <!-- BreadCrumb -->
            <div class="section-title section-title-breadcrumb col-lg-12 col-md-12 align-middle mt-5">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs" class="mt-2">', '</p>');
                }
                ?>
            </div>
            <!-- BreadCrumb -->
            <div class="row test">
                <div class=" col-lg-9">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3 ">

                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">

                                <!-- Post title -->
                                <h1 class="mb-3 text-secondary font-weight-bold"><?php echo get_the_title() ?></h1>
                                <!-- Post title -->

                                <!-- Post feature image -->
                                <img class="feature-image w-100 mb-3" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                <!-- Post feature image -->

                            </div>
                            <div class="d-flex mb-3 align-items-center justify-content-start">
                                <div class="m-2">

                                    <?php
                                    //estimated reading time
                                    function reading_time($post_id = null)
                                    {
                                        // دریافت ID پست جاری
                                        if (!$post_id) {
                                            $post_id = get_the_ID();
                                        }

                                        // دریافت محتوای پست
                                        $content = get_post_field('post_content', $post_id);

                                        // بررسی اگر محتوای پست خالی است
                                        if (empty($content)) {
                                            return 'مدت زمان مطالعه: 0 دقیقه';
                                        }

                                        // پاک کردن تگ‌های HTML و محاسبه تعداد کلمات (فارسی)
                                        $content = strip_tags($content); // حذف تگ‌های HTML
                                        // preg_split: این تابع با استفاده از الگوی /\s+/u (هر تعداد فاصله) کلمات را جدا می‌کند و برای پردازش متن‌های چندبایتی (UTF-8) مناسب است.
                                        $words = preg_split('/\s+/u', $content, -1, PREG_SPLIT_NO_EMPTY); // جدا کردن کلمات با فاصله
                                        $word_count = count($words); // شمارش تعداد کلمات

                                        // محاسبه زمان مطالعه
                                        $readingtime = ceil($word_count / 200); // تغییر سرعت خواندن به 200 کلمه در دقیقه

                                        // افزودن پسوند 'دقیقه'
                                        $total_reading_time = $readingtime . ' دقیقه';

                                        return $total_reading_time;
                                    }

                                    ?>
                                    <!-- Post Reading -->
                                    <div class="badge badge-primary font-weight-semi-bold p-2 m-2">
                                        <?php echo 'مدت زمان مطالعه: ' . reading_time(); ?>
                                    </div>
                                    <!-- Post Reading -->

                                    <!-- Post Views -->
                                    <div class="badge badge-primary font-weight-semi-bold p-2 m-2">
                                        <?php if (function_exists('the_views')) {
                                            the_views();
                                        } ?>
                                    </div>
                                    <!-- Post Views -->

                                    <!-- POst category -->
                                    <a class="badge badge-primary font-weight-semi-bold p-2 m-2"
                                        href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name; ?>
                                    </a>
                                    <!-- POst category -->

                                    <!-- Post date Publish -->
                                    <div class="badge badge-primary font-weight-semi-bold p-2 m-2 ">
                                        <span><?php echo display_jalali_date('Y/m/d', get_the_time('U')); ?></span>
                                    </div>
                                    <!-- Post date Publish -->

                                    <div class="badge m-2">
                                        <!-- average star ratings -->
                                        <?php display_average_rating(get_the_ID()); ?>
                                        <!--average star ratings -->
                                    </div>

                                    <!-- Share Link -->

                                    <div class="share-post-content">

                                    </div>
                                    <!-- Share Link -->
                                </div>

                            </div>
                            <div class="excerpt">
                                <?php
                                /**
                                 * Filter the except length to 20 words.
                                 *
                                 * @param int $length Excerpt length.
                                 * @return int (Maybe) modified excerpt length.
                                 */
                                // function wpdocs_custom_excerpt_length($length)
                                // {
                                //     return -1;
                                // }
                                // add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

                                if (has_excerpt()) {
                                    echo the_excerpt();
                                } else {
                                    echo '';
                                }

                                // (has_excerpt() )? the_excerpt() : ''
                                ?>
                            </div>
                            <!-- Table of Contents -->
                            <div id="table-of-contents" class=" mb-3 bg-light p-3 toc ">

                                <details>
                                    <summary class="mb-2">
                                        جدول محتوایی
                                    </summary>
                                    <ul id="toc-list"></ul>
                                </details>

                            </div>
                            <!-- Table of Contents -->

                            <!-- Post Content -->
                            <div class="post-content">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php
                                        the_content();
                                        // echo '<p>' . 'مدت زمان مطالعه: ' . reading_time(get_the_ID()) . '</p>';
                                        ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <!-- share button -->
                                <div class="mb-4 mt-4 d-flex justify-content-between align-items-center">
                                    <div class="share-button-title">
                                        <strong>اشتراک گذاری:</strong>
                                    </div>

                                    <div class="share-button">
                                        <?php
                                        // لینک و عنوان صفحه فعلی
                                        $current_url = urlencode(get_permalink());
                                        $current_title = urlencode(get_the_title());
                                        ?>

                                        <a class="border-0 btn btn-secondary rounded-circle btn-square ml-1 mb-1" href="https://t.me/share/url?url=<?= $current_url; ?>" target="_blank" aria-label="Telegram" style="background-color: #0088cc;">
                                            <i class="fab fa-telegram"></i>
                                        </a>

                                        <a class="border-0 btn btn-secondary rounded-circle btn-square ml-1 mb-1" href="https://wa.me/?text=<?= $current_url; ?>" target="_blank" aria-label="WhatsApp" style="background-color: #25d366;">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>

                                        <a class="border-0 btn btn-secondary rounded-circle btn-square ml-1 mb-1" href="https://www.linkedin.com/shareArticle?url=<?= $current_url; ?>&title=<?= $current_title; ?>" target="_blank" aria-label="LinkedIn" style="background-color: #0077b5;">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>

                                        <a class="border-0 btn btn-secondary rounded-circle btn-square ml-1 mb-1" href="https://twitter.com/intent/tweet?text=<?= $current_title; ?>&url=<?= $current_url; ?>" target="_blank" aria-label="Twitter" style="background-color: #1da1f2;">
                                            <i class="fab fa-twitter"></i>
                                        </a>

                                        <a class="border-0 btn btn-secondary rounded-circle btn-square ml-1 mb-1" href="https://www.facebook.com/sharer/sharer.php?u=<?= $current_url; ?>" target="_blank" aria-label="Facebook" style="background-color: #1877f2;">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>

                                        <a class="border-0 btn btn-secondary rounded-circle btn-square ml-1 mb-1" href="https://pinterest.com/pin/create/button/?url=<?= $current_url; ?>" target="_blank" aria-label="Pinterest" style="background-color: #e60023;">
                                            <i class="fab fa-pinterest"></i>
                                        </a>

                                        <a class="border-0 btn btn-secondary rounded-circle btn-square ml-1 mb-1" href="mailto:?subject=<?= $current_title; ?>&body=<?= $current_url; ?>" target="_blank" aria-label="Email" style="background-color: #ff5722;">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- share button -->

                                <!-- post change -->
                                <div class="post-btn">
                                    <!-- Previous Post -->
                                    <div class="privious-post-btn">
                                        <?php
                                        $previous_post = get_previous_post();
                                        if (!empty($previous_post)): ?>
                                            <a href="<?php echo get_permalink($previous_post->ID); ?>">
                                                نوشته قبلی
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Next Post -->
                                    <div class="next-post-btn">
                                        <?php
                                        $next_post = get_next_post();
                                        if (!empty($next_post)): ?>
                                            <a href="<?php echo get_permalink($next_post->ID); ?>">
                                                نوشته بعدی
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- post change -->
                            </div>
                            <!-- Post Content -->

                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4 flex-wrap">
                            <div class="d-flex align-items-center pb-3">
                                <img
                                    class="rounded-circle ml-2"
                                    src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
                                    width="50"
                                    height="50"
                                    alt="Author-image " />
                                <p class="pt-4"><?php the_author() ?></p>
                            </div>
                            <p><?php the_author_meta('description') ?></p>
                        </div>
                    </div>

                    <!-- Comments -->
                    <?php comments_template('/comments.php'); ?>
                    <!-- Comments -->
                    <!-- Sidebar -->
                    <?php get_template_part('/template-parts/sidbar', 'post') ?>
                    <!-- Sidebar -->
                </div>

            </div>
        </div>

    </div>
</body>

<?php
get_footer();
?>
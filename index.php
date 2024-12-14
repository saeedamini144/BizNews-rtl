<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); // تنظیم داده‌های پست جاری
?>
        <div class="container">
            <div class="section-title mt-5 col-lg-12 col-md-12 align-middle">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php the_content(); ?>
        </div>
<?php
    }
} else {
    echo 'No content available'; // اگر محتوایی وجود نداشته باشد
}
?>
<?php get_footer() ?>
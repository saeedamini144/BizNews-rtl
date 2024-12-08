<?php
if (post_password_required()) {
    return;
}
?>

<!-- Comment List Start -->
<div class=" mb-3">
    <div class="section-title mb-0">
        <span class="m-0 font-weight-bold">
            <?php echo get_comments_number(); ?> نظرات
        </span>
    </div>
    <div class="bg-white border border-top-0 p-4">
        <?php
        wp_list_comments(array(
            'style'      => 'div',
            'short_ping' => true,
            'callback'   => 'custom_comment_list'
        ));
        ?>
    </div>
</div>
<!-- Comment List End -->

<!-- Comment Form Start -->
<div class=" mb-3">
    <div class="section-title mb-0">
        <div class="m-0 font-weight-bold">دیدگاه شما برای ما ارزشمند است</div>
    </div>
    <div class="bg-white border-top-0 p-4">
        <?php
        comment_form(array(
            'fields' => array(
                'author' => '<div class="form-row"><div class="col-sm-6"><div class="form-group">
                                <label for="name">نام *</label>
                                <input type="text" class="form-control" id="name" name="author" required>
                            </div></div>',
                'email'  => '<div class="col-sm-6"><div class="form-group">
                                <label for="email">ایمیل *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div></div></div>',
                'url'    => '<div class="form-group">
                                <label for="website">وبسایت</label>
                                <input type="url" class="form-control" id="website" name="url">
                            </div>',
            ),
            'comment_field' => '<div class="form-group">
                        <label for="message">پیغام *</label>
                        <textarea id="message" name="comment" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                         <label for="rating">امتیاز شما*</label>
                            <select id="rating" name="rating" class="form-control" required>
                                <option value="5">⭐⭐⭐⭐⭐ - عالی</option>
                                <option value="4">⭐⭐⭐⭐ - خوب</option>
                                <option value="3">⭐⭐⭐ - متوسط</option>
                                <option value="2">⭐⭐ - ضعیف</option>
                                <option value="1">⭐ - بسیار ضعیف</option>
                            </select>
                    </div>',
            'submit_button' => '<div class="form-group mb-0">
                                    <input type="submit" value="ارسال دیدگاه" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>',
        ));
        ?>
    </div>
</div>
<!-- Comment Form End -->

<?php
// ذخیره متادیتای امتیاز
add_action('comment_post', function ($comment_id) {
    if (isset($_POST['rating']) && is_numeric($_POST['rating'])) {
        $rating = intval($_POST['rating']);
        add_comment_meta($comment_id, 'rating', $rating, true);
    }
});



function custom_comment_list($comment, $args, $depth)
{
    $rating = get_comment_meta($comment->comment_ID, 'rating', true); // گرفتن امتیاز کاربر
?>
    <div class="bg-white border-top p-4 media mb-2">

        <!-- تصویر نویسنده -->
        <img src="<?php echo get_avatar_url($comment, array('size' => 45)); ?>" alt="Author-Image" class="img-fluid mr-3 mt-1 rounded-circle" style="width: 45px;">

        <!-- نام نویسنده -->
        <span class="text-secondary font-weight-bold pr-4" href=""><?php comment_author(); ?></span>

        <!-- نمایش امتیاز (ستاره‌ها) -->
        <span class="text-warning">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                if ($rating && $i <= intval($rating)) {
                    echo '<span class="star text-warning">★</span>'; // ستاره طلایی
                } else {
                    echo '<span class="star text-muted">★</span>'; // ستاره توسی
                }
            }
            ?>
        </span>

        <div class="media-body flex-wrap">

            <!-- متن نظر -->
            <div class="pr-4"><?php comment_text(); ?></div>
        </div>

        <div class="d-flex justify-content-between">
            <!-- لینک پاسخ -->
            <?php comment_reply_link(array_merge($args, array(
                'depth' => $depth,
                'max_depth' => $args['max_depth'],
                'reply_text' => 'پاسخ',
                'class' => 'btn btn-sm btn-outline-secondary'
            ))); ?>
            <!-- تاریخ ارسال نظر -->
            <div>
                <small class="pr-4"><?php echo display_jalali_date('Y/m/d'); ?></small>
            </div>

        </div>
    </div>
<?php
}

?>
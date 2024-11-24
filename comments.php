<?php
if (post_password_required()) {
    return;
}
?>

<!-- Comment List Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <span class="m-0 text-uppercase font-weight-bold">
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
<div class="mb-3">
    <div class="section-title mb-0">
        <div class="m-0 text-uppercase font-weight-bold">دیدگاه شما برای ما ارزشمند است</div>
    </div>
    <div class="bg-white border border-top-0 p-4">
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
function custom_comment_list($comment, $args, $depth) {
    ?>
    <div class="media mb-4">
        <img src="<?php echo get_avatar_url($comment, array('size' => 45)); ?>" alt="Author-Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
        <div class="media-body">
            <div>
                <a class="text-secondary font-weight-bold" href=""><?php comment_author(); ?></a>
                <small><i><?php comment_date(); ?></i></small>
            </div>
            <p><?php comment_text(); ?></p>
            <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => 'Reply', 'class' => 'btn btn-sm btn-outline-secondary'))); ?>
        </div>
    </div>
    <?php
}
?>
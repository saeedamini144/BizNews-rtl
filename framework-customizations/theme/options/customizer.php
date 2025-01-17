<?php

use function PHPSTORM_META\type;

$options = array(
    'Header_Settings' => array(
        'title' => __('تنظیمات هدر', '{domain}'),
        'options' => array(

            'Banner_Header' => array(
                'title' => __('بنر تبلیغاتی هدر', '{domain}'),
                'options' => array(

                    'Banner_header' => array(
                        'label' => __('بنر مورد نظر را آپلود کنید', '{domain}'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => __('بنر تبلیغاتی هدر', '{domain}'),
                        'help' => __('اندازه بنر می بایست 728 در 90 پیکسل باشد', '{domain}'),
                        'images_only' => true,
                    ),

                    'Banner_header_link' => array(

                        'label' => __('لینک بنر هدر', '{domain}'),
                        'type' => 'text',
                        'help' => __('لینک کامل بنر را وارد کنید', '{domain}'),

                    ),

                    'Banner_header_alt' => array(

                        'label' => __('alt بنر تبلیغاتی', '{domain}'),
                        'type' => 'text',
                        'desc' => __('قرار دادن alt', '{domain}'),
                        'help' => __('متن جهت قرار دادن در alt تصاویر را وارد کنید', '{domain}'),

                    ),

                    'Banner_header_rel' => array(

                        'label' => __('فالو یا نو فالو', '{domain}'),
                        'desc' => __('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', '{domain}'),
                        'type'  => 'select',
                        'value' => ' ',
                        'choices' => array(
                            'follow' => __('follow', '{domain}'),
                            'nofollow' => __('nofollow', '{domain}')
                        ),
                        /**
                         * Allow save not existing choices
                         * Useful when you use the select to populate it dynamically from js
                         */
                        'no-validate' => false,

                    ),

                    'Mobile_logo' => array(

                        'label' => __('آپلود لوگو موبایل', '{domain}'),
                        'type' => 'upload',
                        'images_only' => true,
                        'help' => __('به دلیل نمایش هدر مشکی در موبایل لوگو سایت در حالت موبایل را روشن انتخاب کنید', 'domain'),
                    ),

                ),
            ),

            'Social_Icon' => array(
                'title' => __("آیکن شبکه های اجتماعی", '{domain}'),
                'options' => array(

                    'Social_icon' => array(
                        'label' => __('شبکه های اجتماعی', 'domain'),
                        'type' => 'addable-box',
                        'desc' => __('آیکن های شبکه های اجتماعی را از این بخش می توانید با وارد کردن نامشان از فونت آسم قرار دهید', '{domain}'),
                        'value' => '',
                        'box-options' => array(
                            'icon_Name' => array(

                                'label' => __('انتخاب آیکن', '{domain}'),
                                'type' => 'text',
                                // 'preview_size' => 'small',
                                // 'model_size' => 'small',
                                'desc' => __('از نام آیکن های فونت آسم استفاده کنید', '{domian}'),
                                // 'set'   => 'font-awesome', // فقط Font Awesome را برای انتخاب کاربر نمایش می‌دهد

                            ),

                            'icon_Link' => array(

                                'label' => __('لینک ایکن ها', '{domain}'),
                                'type' => 'text',
                                'help' => __('لینک شبکه های اجتماعی را در این بخش قرار دهید', '{domian}'),

                            ),
                        ),

                        'template' => 'آیکن  {{- icon_Name }}', // box title
                        'limit' => 0, // limit the number of boxes that can be added
                        'add-button-text' => __('آیکن جدید', '{domain}'),
                        'sortable' => true,
                    ),
                ),
            ),
        ),

    ),

    'Home_Settings' => array(
        'title' =>  __('ویرایش صفحه اصلی', '{domain}'),

        'options' => array(
            'first_section' => array(
                'title' => __('بخش اول صفحه اصلی', '{domain}'),
                'options' => array(

                    'Main_slider' => array(
                        'label' => __('تغییر محتوای اسلایدر اصلی', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('دسته بندی مورد نظر خود را انتخاب کنید', '{domain}'),
                        'population' => 'taxonomy', // type of the content
                        'source' => 'category', //categorie
                        'limit' => 100,
                    ),

                    'Main_slider_GridCard' => array(
                        'label' => __('محتوای شبکه ایی بخش اول سایت ', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('دسته بندی مورد نظر خود را انتخاب کنید', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Breaking_news' => array(

                        'label' => __('اخبار فوری', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('دسته بندی مورد نظر خود را انتخاب کنید', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Breaking_news_title' => array(
                        'label' => __('عنوان مورد نظر خود را وارد کنید', '{domain}'),
                        'type' => 'text',
                        'desc' => __('می توانید عنوان بخش را تغییر دهید', '{domain}'),
                    ),

                ),
            ),

            'Featured_News_Section' => array(
                'title' => __('بخش دوم صفحه اصلی', '{domain}'),
                'options' => array(

                    'Featured_News_title' => array(
                        'label' => __('عنوان بخش دوم را وارد کنید', '{domain}'),
                        'type' => 'text',
                        'desc' => __('عنوان مربوط به بخش دوم', '{domain}'),
                    ),

                    'Featured_News' => array(
                        'label' => __('دسته بندی مورد نظر خود را انتخاب کنید', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('دسته بندی مورد نظر برای نمایش در بخش دوم را وارد کنید', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),


                ),
            ),

            'Latest_News_Section' => array(
                'title' => __(' بخش سوم صفحه اصلی', '{domain}'),
                'options' => array(

                    'Latest_News_title' => array(
                        'label' => __('عنوان بخش سوم را وارد کنید', '{domain}'),
                        'type' => 'text',
                        'desc' => __('عنوان مربوط به بخش سوم', '{domain}'),
                    ),

                    'Latest_News' => array(
                        'label' => __('دسته بندی خود را وارد کنید', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('دسته بندی مورد نظر برای نمایش در بخش سوم را وارد کنید', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Banner_main_ads_one' => array(
                        'label' => __('بنر مورد نظر را آپلود کنید', '{domain}'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => __('بنر تبلیغاتی اول در صفحه اصلی', '{domain}'),
                        'help' => __('اندازه بنر می بایست 728 در 90 پیکسل باشد', '{domain}'),
                        'images_only' => true,
                    ),

                    'Banner_ads_one_link' => array(

                        'label' => __('لینک بنر ', '{domain}'),
                        'type' => 'text',
                        'help' => __('لینک کامل بنر را وارد کنید', '{domain}'),

                    ),

                    'Banner_ads_one_alt' => array(

                        'label' => __('alt بنر تبلیغاتی', '{domain}'),
                        'type' => 'text',
                        'desc' => __('قرار دادن alt', '{domain}'),
                        'help' => __('متن جهت قرار دادن در alt تصاویر را وارد کنید', '{domain}'),

                    ),

                    'Banner_ads_one_rel' => array(

                        'label' => __('فالو یا نو فالو', '{domain}'),
                        'desc' => __('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', '{domain}'),
                        'type'  => 'select',
                        'value' => ' ',
                        'choices' => array(
                            'follow' => __('follow', '{domain}'),
                            'nofollow' => __('nofollow', '{domain}')
                        ),
                        /**
                         * Allow save not existing choices
                         * Useful when you use the select to populate it dynamically from js
                         */
                        'no-validate' => false,

                    ),
                ),
            ),

            'Middle_section' => array(
                'title' => __('بخش چهارم صفحه اصلی', '{domain}'),
                'options' => array(

                    'middle_content_title' => array(

                        'label' => __('عنوان بخش چهارم را وارد کنید', '{domain}'),
                        'desc' => __('عنوان مربوط به بخش چهارم', '{domain}'),
                        'type' => 'text',
                    ),

                    'middle_content' => array(
                        'label' => __('دسته بندی مورد نظر خود را انتخاب کنید', '{domian}'),
                        'desc' => __('دسته بندی مورد نظر خود برای نمایش در چهارم را وارد کنید', '{domain}'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Banner_main_ads_two' => array(
                        'label' => __('بنر مورد نظر را آپلود کنید', '{domain}'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => __('بنر تبلیغاتی دوم در صفحه اصلی', '{domain}'),
                        'help' => __('اندازه بنر می بایست 728 در 90 پیکسل باشد', '{domain}'),
                        'images_only' => true,
                    ),


                    'Banner_ads_two_link' => array(

                        'label' => __('لینک بنر ', '{domain}'),
                        'type' => 'text',
                        'help' => __('لینک کامل بنر را وارد کنید', '{domain}'),

                    ),

                    'Banner_ads_two_alt' => array(

                        'label' => __('alt بنر تبلیغاتی', '{domain}'),
                        'type' => 'text',
                        'desc' => __('قرار دادن alt', '{domain}'),
                        'help' => __('متن جهت قرار دادن در alt تصاویر را وارد کنید', '{domain}'),

                    ),

                    'Banner_ads_two_rel' => array(

                        'label' => __('فالو یا نو فالو', '{domain}'),
                        'desc' => __('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', '{domain}'),
                        'type'  => 'select',
                        'value' => ' ',
                        'choices' => array(
                            'follow' => __('follow', '{domain}'),
                            'nofollow' => __('nofollow', '{domain}')
                        ),
                        /**
                         * Allow save not existing choices
                         * Useful when you use the select to populate it dynamically from js
                         */
                        'no-validate' => false,

                    ),

                ),
            ),

            'Last_section' => array(
                'title' => __('بخش پنجم صفحه اصلی', '{domain}'),
                'options' => array(

                    'Last_content_title' => array(

                        'label' => __('عنوان بخش پنجم را وارد کنید', '{domain}'),
                        'desc' => __('عنوان مربوط به بخش پنجم', '{domain}'),
                        'type' => 'text',
                    ),

                    'Last_content' => array(
                        'label' => __('دسته بندی مورد نظر خود را انتخاب کنید', '{domain}'),
                        'desc' => __('دسته بندی مورد نظر برای نمایش در بخش پنجم را وارد کنید', '{domain}'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),
                ),
            ),

            'Sixth_section' => array(
                'title' => __('بخش ششم صفحه اصلی', '{domain}'),
                'options' => array(

                    'Sixth_section_title' => array(
                        'label' => __('عنوان بخش ششم را وارد کنید', '{domain}'),
                        'desc' => __('عنوان مربوط به بخش ششم', '{domain}'),
                        'type' => 'text',
                    ),

                    'Sixth_section_cat' => array(
                        'label' => __('دسته بندی مورد نظر خود را انتخاب کنید', '{domain}'),
                        'desc' => __('دسته بندی مورد نظر برای نمایش در بخش ششم را وارد کنید', '{domain}'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                ),
            ),
            'Seventh_section' => array(
                'title' => __('بخش هفتم صفحه اصلی', '{domain}'),
                'options' => array(

                    'Seventh_section_title' => array(
                        'label' => __('عنوان بخش هفتم را وارد کنید', '{domain}'),
                        'desc' => __('عنوان مربوط به بخش هفتم', '{domain}'),
                        'type' => 'text',
                    ),

                    'Seventh_section_cat' => array(

                        'label' => __('دسته بندی مورد نظر خود را انتخاب کنید ', '{domain}'),
                        'desc' => __('دسته بندی مورد نظر برای نمایش در بخش هفتم را وارد کنید', '{domain}'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),
                ),
            ),

            'Eighth_section' => array(
                'title' => __('بخش هشتم صفحه اصلی', '{domain}'),
                'options' => array(

                    'Eighth_section_title' => array(
                        'label' => __('عنوان بخش هشتم را وارد کنید', '{domain}'),
                        'desc' => __('عنوان مربوط به بخش هشتم', 'domain'),
                        'type' => 'text',
                    ),

                    'Eighth_section_cat' => array(
                        'label' => __('دسته بندی مورد نظر خود را انتخاب کنید', '{domain}'),
                        'desc' => __('دسته بندی مورد نظر برای نمایش در بخش هشتم را وارد کنید ', '{domain}'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                ),


            ),


        ),
    ),

    'Footer_Settings' => array(
        'title' => __('تنظیمات محتوایی فوتر', '{domain}'),
        'options' => array(

            'Foooter_column_one' => array(
                'title' => __('ستون اول', '{domain}'),
                'options' => array(

                    'column_one_title' => array(
                        'label' => __('عنوان ستون اول', '{domain}'),
                        'desc' => __('تغییر نام ستون اول', '{domain}'),
                        'type' => 'text',
                        'value' => '',
                    ),

                    'contact_list' => array(

                        'label' => __('لیست راه های ارتباطی با ما', '{domain}'),
                        'type' => 'addable-box',
                        'desc' => __('انتخاب آیکن و محتوای مناسب', '{domain}'),
                        'box-options' => array(

                            'contact_list_icon' => array(
                                'label' => __('انتخاب آیکن', '{domain}'),
                                'type' => 'icon-v2',
                                'preview_size' => 'small',
                                'model_size' => 'small',
                                'desc' => __('آیکن مورد نظر خود را فونت آسم انتخاب کنید', '{domain}'),
                                // 'set'   => 'font-awesome', // فقط Font Awesome را برای انتخاب کاربر نمایش می‌دهد
                            ),

                            'contact_list_content' => array(

                                'label' => __('محتوای مورد نظر خود را وارد کنید', '{domain}'),
                                'type' => 'wp-editor',
                                'size' => 'small', // small, large
                                'editor_height' => 150,
                                'wpautop' => true,
                                'editor_type' => true, // tinymce, html
                                'shortcodes' => false // true, array('button', map')
                            ),

                        ),
                        'template' => 'محتوای {{- contact_list_icon}}',
                        'add-button-text' => __('محتوای جدید', '{domain}'),
                        'sortable' => true,

                    ),

                    'Social_title' => array(

                        'label' => __('شبکه های اجتماعی', '{domain}'),
                        'type' => 'text',
                        'desc' => __('عنوان بخش شبکه های اجتماعی', '{domain}'),

                    ),

                    'social_icon_footer' => array(

                        'label' => __('آیکن شبکه های اجتماعی', '{domian}'),
                        'type' => 'addable-box',
                        'desc' => __('آیکن و لینک شبکه های اجتماعی را وارد کنید', '{domain}'),
                        'box-options' => array(

                            'social_icon' => array(

                                'label' => __('انتخاب ایکن شبکه های اجتماعی', '{domain}'),
                                'type' => 'icon-v2',
                                'preview_size' => 'small',
                                // 'icon-class-without-root' => false,

                                'model_size' => 'small',
                                'desc' => __('از کتابخانه فونت اسم برای آیکن ها استفاده کنید', '{domain}'),

                            ),

                            'social_icon_link' => array(

                                'label' => __('لینک شبکه های اجتماعی', '{domain}'),
                                'type' => 'text',
                                'desc' => __('لینک شبکه های اجتماعی را در ایم بخش وارد کنید', '{domain}'),

                            ),

                        ),
                        'template' => 'محتوا {{- social_icon}}',
                        'add-button-text' => __('آیکن محتوای جدید', '{domain}'),
                        'sortable' => true,


                    ),
                ),

            ),

            'Footer_column_two' => array(

                'title' => __('ستون دوم', '{domain}'),
                'options' => array(

                    'Footer_column_two_title' => array(

                        'label' => __('عنوان ستون دوم', '{domain}'),
                        'type' => 'text',
                        'desc' => __('تغییر نام ستون دوم', '{domain}'),

                    ),

                    'choose_category' => array(

                        'label' => __('یک دسته بندی را انتخاب کنید', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('دسته بندی از مطالب جهت نمایش در فوتر را انتخاب کنید', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 3

                    ),
                ),

            ),

            'Footer_column_three' => array(

                'title' => __('ستون سوم', '{domain}'),
                'options' => array(

                    'Footer_column_three_title' => array(

                        'label' => __('عنوان ستون سوم', '{domain}'),
                        'type' => 'text',
                        'desc' => __('تغییر نام ستون سوم', '{domain}'),
                    ),

                ),

            ),

            // 'Footer_column_four' => array(

            //     'title' => __('ستون چهارم', '{domain}'),
            //     'options' => array(

            //         'Footer_column_four_title' => array(

            //             'label' => __('عنوان ستون چهارم', '{domain}'),
            //             'type' => 'text',
            //             'desc' => __('تغییر نام ستون چهارم', '{domain}'),
            //         ),

            //         'footer_gallery' => array(
            //             'label' => __('تصاویر مورد نظر خود را انتخاب کنید', '{domain}'),
            //             'type' => 'multi-upload',
            //             'value' => array(),
            //             'desc' => __('از بخش مدیا تصاویر مورد نظر گالری را انتخاب کنید', '{domain}'),
            //             'images_only' => true,
            //         ),


            //     ),

            // ),

            'Footer_copyright' => array(
                'title' => __('کپی رایت', '{domain}'),
                'options' => array(

                    'change_copyright' => array(

                        'label' => __('محتوای انتهایی کپی رایت سایت را وارد کنید', '{domain}'),
                        'type' => 'wp-editor',
                        'desc' => __('تغییر محتوای کپی رایت', 'domain'),

                    ),

                ),
            ),
        ),
    ),

    'sidebar_Settings' => array(
        'title' => __('تنظیمات سایدبار', '{domain}'),
        'options' => array(

            'add_title' => array(
                'label' => __('عنوان مورد نظر خود را وارد کنید', '{domain}'),
                'type' => 'text',
                'desc' => __('می توانید عنوان بخش را تغییر دهید', '{domain}')
            ),

            'sidbar_banner_adds' => array(

                'label' => __('آپلود بنر تبلیغاتی', '{domain}'),
                'desc' => __('بنر تبلیغاتی سایدبار', '{domain}'),
                'help' => __('اندزه بنر می بایست 410 در 250 پیکسل باشد'),
                'type' => 'upload',
                'images_only' => true,

            ),

            'Banner_sidebar_link' => array(

                'label' => __('لینک بنر ', '{domain}'),
                'type' => 'text',
                'help' => __('لینک کامل بنر را وارد کنید', '{domain}'),

            ),

            'Banner_sidebar_alt' => array(

                'label' => __('alt بنر تبلیغاتی', '{domain}'),
                'type' => 'text',
                'desc' => __('قرار دادن alt', '{domain}'),
                'help' => __('متن جهت قرار دادن در alt تصاویر را وارد کنید', '{domain}'),

            ),

            'Banner_sidebar_rel' => array(

                'label' => __('فالو یا نو فالو', '{domain}'),
                'desc' => __('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', '{domain}'),
                'type'  => 'select',
                'value' => ' ',
                'choices' => array(
                    'follow' => __('follow', '{domain}'),
                    'nofollow' => __('nofollow', '{domain}')
                ),
                /**
                 * Allow save not existing choices
                 * Useful when you use the select to populate it dynamically from js
                 */
                'no-validate' => false,

            ),

            'trending_sidbar' => array(
                'label' => __(' عنوان بخش مطالب در سایدبار', '{domain}'),
                'type' => 'text',
                'desc' => __('تغییر عنوان بخش مطالب در ساید بار', '{domain}'),
            ),

            'trending_news_category' => array(
                'label' => __('انتخاب دسته بندی مطالب', '{doamin}'),
                'type' => 'multi-select',
                'desc' => __('دسته بندی مورد نظر جهت نمایش در بخش سایدبار را انتخاب کنید', '{domain}'),
                'population' => 'taxonomy',
                'source' => 'category',
                'limit' => 100,
            ),

            'show_category' => array(
                'label' => __('عنوان بخش نمایش همه عناوین دسته بندی', '{domain}'),
                'type' => 'text',
                'desc' => __('تغییر عنوان بخش نمایش تمامی دسته بندی ها', '{domain}'),
            ),

        ),
    ),

    'sidebar_post_Settings' => array(
        'title' => __(' تنظیمات سایدبار پست ها', '{domain}'),
        'options' => array(

            'sidbar_post_add_title' => array(
                'label' => __('عنوان مورد نظر خود را وارد کنید', '{domain}'),
                'type' => 'text',
                'desc' => __('می توانید عنوان بخش را تغییر دهید', '{domain}')
            ),

            'sidbar_post_banner_adds' => array(

                'label' => __('آپلود بنر تبلیغاتی', '{domain}'),
                'desc' => __('بنر تبلیغاتی سایدبار', '{domain}'),
                'help' => __('اندزه بنر می بایست 410 در 250 پیکسل باشد'),
                'type' => 'upload',
                'images_only' => true,

            ),

            'Banner_sidbar_post_link' => array(

                'label' => __('لینک بنر ', '{domain}'),
                'type' => 'text',
                'help' => __('لینک کامل بنر را وارد کنید', '{domain}'),

            ),

            'Banner_sidbar_post_alt' => array(

                'label' => __('alt بنر تبلیغاتی', '{domain}'),
                'type' => 'text',
                'desc' => __('قرار دادن alt', '{domain}'),
                'help' => __('متن جهت قرار دادن در alt تصاویر را وارد کنید', '{domain}'),

            ),

            'Banner_sidbar_post_rel' => array(

                'label' => __('فالو یا نو فالو', '{domain}'),
                'desc' => __('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', '{domain}'),
                'type'  => 'select',
                'value' => ' ',
                'choices' => array(
                    'follow' => __('follow', '{domain}'),
                    'nofollow' => __('nofollow', '{domain}')
                ),
                /**
                 * Allow save not existing choices
                 * Useful when you use the select to populate it dynamically from js
                 */
                'no-validate' => false,

            ),

            'trending_sidbar_post' => array(
                'label' => __(' عنوان بخش مطالب در سایدبار', '{domain}'),
                'type' => 'text',
                'desc' => __('تغییر عنوان بخش مطالب در ساید بار', '{domain}'),
            ),

            // 'trending_news_category_sidbar_post' => array(
            //     'label' => __('انتخاب دسته بندی مطالب', '{doamin}'),
            //     'type' => 'multi-select',
            //     'desc' => __('دسته بندی مورد نظر جهت نمایش در بخش سایدبار را انتخاب کنید', '{domain}'),
            //     'population' => 'taxonomy',
            //     'source' => 'category',
            //     'limit' => 100,
            // ),

            'sidbar_post_show_category' => array(
                'label' => __('عنوان بخش نمایش همه عناوین دسته بندی', '{domain}'),
                'type' => 'text',
                'desc' => __('تغییر عنوان بخش نمایش تمامی دسته بندی ها', '{domain}'),
            ),

        ),
    ),
);

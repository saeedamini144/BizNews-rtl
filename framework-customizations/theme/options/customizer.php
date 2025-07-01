<?php

use function PHPSTORM_META\type;

$options = array(
    'Header_Settings' => array(
        'title' => esc_html__('تنظیمات هدر', 'BizNews'),
        'options' => array(

            'Sticky_Header' => array(
                'title' => esc_html__('هدر چسبنده', 'BizNews'),
                'options' => array(
                    'Sticky_Header_Options' => array(
                        'type'  => 'switch',
                        'value' => 'No',
                        // 'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        'label' => esc_html__('هدر چسبنده', 'BizNews'),
                        'desc'  => esc_html__('به وسیله این سویچ می توانید هدر سایت را چسبنده کنید', 'BizNews'),
                        'help'  => esc_html__('توجه: هدر فقط در بخش نمایش لیست منو چسبنده می شود.', 'BizNews'),
                        'left-choice' => array(
                            'value' => 'Yes',
                            'label' => esc_html__('خاموش', 'BizNews'),
                        ),
                        'right-choice' => array(
                            'value' => 'No',
                            'label' => esc_html__('روشن', 'BizNews'),
                        ),
                    ),
                ),
            ),

            'Banner_Header' => array(
                'title' => esc_html__('بنر تبلیغاتی هدر', 'BizNews'),
                'options' => array(

                    'Banner_header' => array(
                        'label' => esc_html__('بنر مورد نظر را آپلود کنید', 'BizNews'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => esc_html__('بنر تبلیغاتی هدر', 'BizNews'),
                        'help' => esc_html__('اندازه بنر می بایست 728 در 90 پیکسل باشد', 'BizNews'),
                        'images_only' => true,
                    ),

                    'Banner_header_link' => array(

                        'label' => esc_html__('لینک بنر هدر', 'BizNews'),
                        'type' => 'text',
                        'help' => esc_html__('لینک کامل بنر را وارد کنید', 'BizNews'),

                    ),

                    'Banner_header_alt' => array(

                        'label' => esc_html__('alt بنر تبلیغاتی', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('قرار دادن alt', 'BizNews'),
                        'help' => esc_html__('متن جهت قرار دادن در alt تصاویر را وارد کنید', 'BizNews'),

                    ),

                    'Banner_header_rel' => array(

                        'label' => esc_html__('فالو یا نو فالو', 'BizNews'),
                        'desc' => esc_html__('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', 'BizNews'),
                        'type'  => 'select',
                        'value' => ' ',
                        'choices' => array(
                            'follow' => esc_html__('follow', 'BizNews'),
                            'nofollow' => esc_html__('nofollow', 'BizNews')
                        ),
                        /**
                         * Allow save not existing choices
                         * Useful when you use the select to populate it dynamically from js
                         */
                        'no-validate' => false,

                    ),

                    'Mobile_logo' => array(

                        'label' => esc_html__('آپلود لوگو موبایل', 'BizNews'),
                        'type' => 'upload',
                        'images_only' => true,
                        'help' => esc_html__('به دلیل نمایش هدر مشکی در موبایل لوگو سایت در حالت موبایل را روشن انتخاب کنید', 'domain'),
                    ),

                ),
            ),

            'Social_Icon' => array(
                'title' => esc_html__("آیکن شبکه های اجتماعی", 'BizNews'),
                'options' => array(

                    'Social_icon' => array(
                        'label' => esc_html__('شبکه های اجتماعی', 'domain'),
                        'type' => 'addable-box',
                        'desc' => esc_html__('آیکن های شبکه های اجتماعی را از این بخش می توانید با وارد کردن نامشان از فونت آسم قرار دهید', 'BizNews'),
                        'value' => '',
                        'box-options' => array(
                            'icon_Name' => array(

                                'label' => esc_html__('انتخاب آیکن', 'BizNews'),
                                'type' => 'text',
                                // 'preview_size' => 'small',
                                // 'model_size' => 'small',
                                'desc' => esc_html__('از نام آیکن های فونت آسم استفاده کنید', '{domian}'),
                                // 'set'   => 'font-awesome', // فقط Font Awesome را برای انتخاب کاربر نمایش می‌دهد

                            ),

                            'icon_Link' => array(

                                'label' => esc_html__('لینک ایکن ها', 'BizNews'),
                                'type' => 'text',
                                'help' => esc_html__('لینک شبکه های اجتماعی را در این بخش قرار دهید', '{domian}'),

                            ),
                        ),

                        'template' => 'آیکن  {{- icon_Name }}', // box title
                        'limit' => 0, // limit the number of boxes that can be added
                        'add-button-text' => esc_html__('آیکن جدید', 'BizNews'),
                        'sortable' => true,
                    ),
                ),
            ),
        ),

    ),

    'Home_Settings' => array(
        'title' =>  esc_html__('ویرایش صفحه اصلی', 'BizNews'),

        'options' => array(
            'first_section' => array(
                'title' => esc_html__('بخش اول صفحه اصلی', 'BizNews'),
                'options' => array(

                    'Main_slider' => array(
                        'label' => esc_html__('تغییر محتوای اسلایدر اصلی', 'BizNews'),
                        'type' => 'multi-select',
                        'desc' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید', 'BizNews'),
                        'population' => 'taxonomy', // type of the content
                        'source' => 'category', //categorie
                        'limit' => 100,
                    ),

                    'Main_slider_GridCard' => array(
                        'label' => esc_html__('محتوای شبکه ایی بخش اول سایت ', 'BizNews'),
                        'type' => 'multi-select',
                        'desc' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید', 'BizNews'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Breaking_news' => array(

                        'label' => esc_html__('اخبار فوری', 'BizNews'),
                        'type' => 'multi-select',
                        'desc' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید', 'BizNews'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Breaking_news_title' => array(
                        'label' => esc_html__('عنوان مورد نظر خود را وارد کنید', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('می توانید عنوان بخش را تغییر دهید', 'BizNews'),
                    ),

                ),
            ),

            'Featured_News_Section' => array(
                'title' => esc_html__('بخش دوم صفحه اصلی', 'BizNews'),
                'options' => array(

                    'Featured_News_title' => array(
                        'label' => esc_html__('عنوان بخش دوم را وارد کنید', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('عنوان مربوط به بخش دوم', 'BizNews'),
                    ),

                    'Featured_News' => array(
                        'label' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید', 'BizNews'),
                        'type' => 'multi-select',
                        'desc' => esc_html__('دسته بندی مورد نظر برای نمایش در بخش دوم را وارد کنید', 'BizNews'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),


                ),
            ),

            'Latest_News_Section' => array(
                'title' => esc_html__(' بخش سوم صفحه اصلی', 'BizNews'),
                'options' => array(

                    'Latest_News_title' => array(
                        'label' => esc_html__('عنوان بخش سوم را وارد کنید', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('عنوان مربوط به بخش سوم', 'BizNews'),
                    ),

                    'Latest_News' => array(
                        'label' => esc_html__('دسته بندی خود را وارد کنید', 'BizNews'),
                        'type' => 'multi-select',
                        'desc' => esc_html__('دسته بندی مورد نظر برای نمایش در بخش سوم را وارد کنید', 'BizNews'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Banner_main_ads_one' => array(
                        'label' => esc_html__('بنر مورد نظر را آپلود کنید', 'BizNews'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => esc_html__('بنر تبلیغاتی اول در صفحه اصلی', 'BizNews'),
                        'help' => esc_html__('اندازه بنر می بایست 728 در 90 پیکسل باشد', 'BizNews'),
                        'images_only' => true,
                    ),

                    'Banner_ads_one_link' => array(

                        'label' => esc_html__('لینک بنر ', 'BizNews'),
                        'type' => 'text',
                        'help' => esc_html__('لینک کامل بنر را وارد کنید', 'BizNews'),

                    ),

                    'Banner_ads_one_alt' => array(

                        'label' => esc_html__('alt بنر تبلیغاتی', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('قرار دادن alt', 'BizNews'),
                        'help' => esc_html__('متن جهت قرار دادن در alt تصاویر را وارد کنید', 'BizNews'),

                    ),

                    'Banner_ads_one_rel' => array(

                        'label' => esc_html__('فالو یا نو فالو', 'BizNews'),
                        'desc' => esc_html__('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', 'BizNews'),
                        'type'  => 'select',
                        'value' => ' ',
                        'choices' => array(
                            'follow' => esc_html__('follow', 'BizNews'),
                            'nofollow' => esc_html__('nofollow', 'BizNews')
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
                'title' => esc_html__('بخش چهارم صفحه اصلی', 'BizNews'),
                'options' => array(

                    'middle_content_title' => array(

                        'label' => esc_html__('عنوان بخش چهارم را وارد کنید', 'BizNews'),
                        'desc' => esc_html__('عنوان مربوط به بخش چهارم', 'BizNews'),
                        'type' => 'text',
                    ),

                    'middle_content' => array(
                        'label' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید', '{domian}'),
                        'desc' => esc_html__('دسته بندی مورد نظر خود برای نمایش در چهارم را وارد کنید', 'BizNews'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Banner_main_ads_two' => array(
                        'label' => esc_html__('بنر مورد نظر را آپلود کنید', 'BizNews'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => esc_html__('بنر تبلیغاتی دوم در صفحه اصلی', 'BizNews'),
                        'help' => esc_html__('اندازه بنر می بایست 728 در 90 پیکسل باشد', 'BizNews'),
                        'images_only' => true,
                    ),


                    'Banner_ads_two_link' => array(

                        'label' => esc_html__('لینک بنر ', 'BizNews'),
                        'type' => 'text',
                        'help' => esc_html__('لینک کامل بنر را وارد کنید', 'BizNews'),

                    ),

                    'Banner_ads_two_alt' => array(

                        'label' => esc_html__('alt بنر تبلیغاتی', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('قرار دادن alt', 'BizNews'),
                        'help' => esc_html__('متن جهت قرار دادن در alt تصاویر را وارد کنید', 'BizNews'),

                    ),

                    'Banner_ads_two_rel' => array(

                        'label' => esc_html__('فالو یا نو فالو', 'BizNews'),
                        'desc' => esc_html__('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', 'BizNews'),
                        'type'  => 'select',
                        'value' => ' ',
                        'choices' => array(
                            'follow' => esc_html__('follow', 'BizNews'),
                            'nofollow' => esc_html__('nofollow', 'BizNews')
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
                'title' => esc_html__('بخش پنجم صفحه اصلی', 'BizNews'),
                'options' => array(

                    'Last_content_title' => array(

                        'label' => esc_html__('عنوان بخش پنجم را وارد کنید', 'BizNews'),
                        'desc' => esc_html__('عنوان مربوط به بخش پنجم', 'BizNews'),
                        'type' => 'text',
                    ),

                    'Last_content' => array(
                        'label' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید', 'BizNews'),
                        'desc' => esc_html__('دسته بندی مورد نظر برای نمایش در بخش پنجم را وارد کنید', 'BizNews'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),
                ),
            ),

            'Sixth_section' => array(
                'title' => esc_html__('بخش ششم صفحه اصلی', 'BizNews'),
                'options' => array(

                    'Sixth_section_title' => array(
                        'label' => esc_html__('عنوان بخش ششم را وارد کنید', 'BizNews'),
                        'desc' => esc_html__('عنوان مربوط به بخش ششم', 'BizNews'),
                        'type' => 'text',
                    ),

                    'Sixth_section_cat' => array(
                        'label' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید', 'BizNews'),
                        'desc' => esc_html__('دسته بندی مورد نظر برای نمایش در بخش ششم را وارد کنید', 'BizNews'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                ),
            ),
            'Seventh_section' => array(
                'title' => esc_html__('بخش هفتم صفحه اصلی', 'BizNews'),
                'options' => array(

                    'Seventh_section_title' => array(
                        'label' => esc_html__('عنوان بخش هفتم را وارد کنید', 'BizNews'),
                        'desc' => esc_html__('عنوان مربوط به بخش هفتم', 'BizNews'),
                        'type' => 'text',
                    ),

                    'Seventh_section_cat' => array(

                        'label' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید ', 'BizNews'),
                        'desc' => esc_html__('دسته بندی مورد نظر برای نمایش در بخش هفتم را وارد کنید', 'BizNews'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),
                ),
            ),

            'Eighth_section' => array(
                'title' => esc_html__('بخش هشتم صفحه اصلی', 'BizNews'),
                'options' => array(

                    'Eighth_section_title' => array(
                        'label' => esc_html__('عنوان بخش هشتم را وارد کنید', 'BizNews'),
                        'desc' => esc_html__('عنوان مربوط به بخش هشتم', 'domain'),
                        'type' => 'text',
                    ),

                    'Eighth_section_cat' => array(
                        'label' => esc_html__('دسته بندی مورد نظر خود را انتخاب کنید', 'BizNews'),
                        'desc' => esc_html__('دسته بندی مورد نظر برای نمایش در بخش هشتم را وارد کنید ', 'BizNews'),
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
        'title' => esc_html__('تنظیمات محتوایی فوتر', 'BizNews'),
        'options' => array(

            'Foooter_column_one' => array(
                'title' => esc_html__('ستون اول', 'BizNews'),
                'options' => array(

                    'column_one_title' => array(
                        'label' => esc_html__('عنوان ستون اول', 'BizNews'),
                        'desc' => esc_html__('تغییر نام ستون اول', 'BizNews'),
                        'type' => 'text',
                        'value' => '',
                    ),

                    'contact_list' => array(

                        'label' => esc_html__('لیست راه های ارتباطی با ما', 'BizNews'),
                        'type' => 'addable-box',
                        'desc' => esc_html__('انتخاب آیکن و محتوای مناسب', 'BizNews'),
                        'box-options' => array(

                            'contact_list_icon' => array(
                                'label' => esc_html__('انتخاب آیکن', 'BizNews'),
                                'type' => 'icon-v2',
                                'preview_size' => 'small',
                                'model_size' => 'small',
                                'desc' => esc_html__('آیکن مورد نظر خود را فونت آسم انتخاب کنید', 'BizNews'),
                                // 'set'   => 'font-awesome', // فقط Font Awesome را برای انتخاب کاربر نمایش می‌دهد
                            ),

                            'contact_list_content' => array(

                                'label' => esc_html__('محتوای مورد نظر خود را وارد کنید', 'BizNews'),
                                'type' => 'wp-editor',
                                'size' => 'small', // small, large
                                'editor_height' => 150,
                                'wpautop' => true,
                                'editor_type' => true, // tinymce, html
                                'shortcodes' => false // true, array('button', map')
                            ),

                        ),
                        'template' => 'محتوای {{- contact_list_icon}}',
                        'add-button-text' => esc_html__('محتوای جدید', 'BizNews'),
                        'sortable' => true,

                    ),

                    'Social_title' => array(

                        'label' => esc_html__('شبکه های اجتماعی', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('عنوان بخش شبکه های اجتماعی', 'BizNews'),

                    ),

                    'social_icon_footer' => array(

                        'label' => esc_html__('آیکن شبکه های اجتماعی', '{domian}'),
                        'type' => 'addable-box',
                        'desc' => esc_html__('آیکن و لینک شبکه های اجتماعی را وارد کنید', 'BizNews'),
                        'box-options' => array(

                            'social_icon' => array(

                                'label' => esc_html__('انتخاب ایکن شبکه های اجتماعی', 'BizNews'),
                                'type' => 'icon-v2',
                                'preview_size' => 'small',
                                // 'icon-class-without-root' => false,

                                'model_size' => 'small',
                                'desc' => esc_html__('از کتابخانه فونت اسم برای آیکن ها استفاده کنید', 'BizNews'),

                            ),

                            'social_icon_link' => array(

                                'label' => esc_html__('لینک شبکه های اجتماعی', 'BizNews'),
                                'type' => 'text',
                                'desc' => esc_html__('لینک شبکه های اجتماعی را در ایم بخش وارد کنید', 'BizNews'),

                            ),

                        ),
                        'template' => 'محتوا {{- social_icon}}',
                        'add-button-text' => esc_html__('آیکن محتوای جدید', 'BizNews'),
                        'sortable' => true,


                    ),
                ),

            ),

            'Footer_column_two' => array(

                'title' => esc_html__('ستون دوم', 'BizNews'),
                'options' => array(

                    'Footer_column_two_title' => array(

                        'label' => esc_html__('عنوان ستون دوم', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('تغییر نام ستون دوم', 'BizNews'),

                    ),

                    'choose_category' => array(

                        'label' => esc_html__('یک دسته بندی را انتخاب کنید', 'BizNews'),
                        'type' => 'multi-select',
                        'desc' => esc_html__('دسته بندی از مطالب جهت نمایش در فوتر را انتخاب کنید', 'BizNews'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 3

                    ),
                ),

            ),

            'Footer_column_three' => array(

                'title' => esc_html__('ستون سوم', 'BizNews'),
                'options' => array(

                    'Footer_column_three_title' => array(

                        'label' => esc_html__('عنوان ستون سوم', 'BizNews'),
                        'type' => 'text',
                        'desc' => esc_html__('تغییر نام ستون سوم', 'BizNews'),
                    ),

                ),

            ),

            // 'Footer_column_four' => array(

            //     'title' => esc_html__('ستون چهارم', 'BizNews'),
            //     'options' => array(

            //         'Footer_column_four_title' => array(

            //             'label' => esc_html__('عنوان ستون چهارم', 'BizNews'),
            //             'type' => 'text',
            //             'desc' => esc_html__('تغییر نام ستون چهارم', 'BizNews'),
            //         ),

            //         'footer_gallery' => array(
            //             'label' => esc_html__('تصاویر مورد نظر خود را انتخاب کنید', 'BizNews'),
            //             'type' => 'multi-upload',
            //             'value' => array(),
            //             'desc' => esc_html__('از بخش مدیا تصاویر مورد نظر گالری را انتخاب کنید', 'BizNews'),
            //             'images_only' => true,
            //         ),


            //     ),

            // ),

            'Footer_copyright' => array(
                'title' => esc_html__('کپی رایت', 'BizNews'),
                'options' => array(

                    'change_copyright' => array(

                        'label' => esc_html__('محتوای انتهایی کپی رایت سایت را وارد کنید', 'BizNews'),
                        'type' => 'wp-editor',
                        'desc' => esc_html__('تغییر محتوای کپی رایت', 'domain'),

                    ),

                ),
            ),
        ),
    ),

    'sidebar_Settings' => array(
        'title' => esc_html__('تنظیمات سایدبار', 'BizNews'),
        'options' => array(

            'add_title' => array(
                'label' => esc_html__('عنوان مورد نظر خود را وارد کنید', 'BizNews'),
                'type' => 'text',
                'desc' => esc_html__('می توانید عنوان بخش را تغییر دهید', 'BizNews')
            ),

            'sidbar_banner_adds' => array(

                'label' => esc_html__('آپلود بنر تبلیغاتی', 'BizNews'),
                'desc' => esc_html__('بنر تبلیغاتی سایدبار', 'BizNews'),
                'help' => esc_html__('اندزه بنر می بایست 410 در 250 پیکسل باشد'),
                'type' => 'upload',
                'images_only' => true,

            ),

            'Banner_sidebar_link' => array(

                'label' => esc_html__('لینک بنر ', 'BizNews'),
                'type' => 'text',
                'help' => esc_html__('لینک کامل بنر را وارد کنید', 'BizNews'),

            ),

            'Banner_sidebar_alt' => array(

                'label' => esc_html__('alt بنر تبلیغاتی', 'BizNews'),
                'type' => 'text',
                'desc' => esc_html__('قرار دادن alt', 'BizNews'),
                'help' => esc_html__('متن جهت قرار دادن در alt تصاویر را وارد کنید', 'BizNews'),

            ),

            'Banner_sidebar_rel' => array(

                'label' => esc_html__('فالو یا نو فالو', 'BizNews'),
                'desc' => esc_html__('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', 'BizNews'),
                'type'  => 'select',
                'value' => ' ',
                'choices' => array(
                    'follow' => esc_html__('follow', 'BizNews'),
                    'nofollow' => esc_html__('nofollow', 'BizNews')
                ),
                /**
                 * Allow save not existing choices
                 * Useful when you use the select to populate it dynamically from js
                 */
                'no-validate' => false,

            ),

            'trending_sidbar' => array(
                'label' => esc_html__(' عنوان بخش مطالب در سایدبار', 'BizNews'),
                'type' => 'text',
                'desc' => esc_html__('تغییر عنوان بخش مطالب در ساید بار', 'BizNews'),
            ),

            'trending_news_category' => array(
                'label' => esc_html__('انتخاب دسته بندی مطالب', '{doamin}'),
                'type' => 'multi-select',
                'desc' => esc_html__('دسته بندی مورد نظر جهت نمایش در بخش سایدبار را انتخاب کنید', 'BizNews'),
                'population' => 'taxonomy',
                'source' => 'category',
                'limit' => 100,
            ),

            'show_category' => array(
                'label' => esc_html__('عنوان بخش نمایش همه عناوین دسته بندی', 'BizNews'),
                'type' => 'text',
                'desc' => esc_html__('تغییر عنوان بخش نمایش تمامی دسته بندی ها', 'BizNews'),
            ),

        ),
    ),

    'sidebar_post_Settings' => array(
        'title' => esc_html__(' تنظیمات سایدبار پست ها', 'BizNews'),
        'options' => array(

            'sidbar_post_add_title' => array(
                'label' => esc_html__('عنوان مورد نظر خود را وارد کنید', 'BizNews'),
                'type' => 'text',
                'desc' => esc_html__('می توانید عنوان بخش را تغییر دهید', 'BizNews')
            ),

            'sidbar_post_banner_adds' => array(

                'label' => esc_html__('آپلود بنر تبلیغاتی', 'BizNews'),
                'desc' => esc_html__('بنر تبلیغاتی سایدبار', 'BizNews'),
                'help' => esc_html__('اندزه بنر می بایست 410 در 250 پیکسل باشد'),
                'type' => 'upload',
                'images_only' => true,

            ),

            'Banner_sidbar_post_link' => array(

                'label' => esc_html__('لینک بنر ', 'BizNews'),
                'type' => 'text',
                'help' => esc_html__('لینک کامل بنر را وارد کنید', 'BizNews'),

            ),

            'Banner_sidbar_post_alt' => array(

                'label' => esc_html__('alt بنر تبلیغاتی', 'BizNews'),
                'type' => 'text',
                'desc' => esc_html__('قرار دادن alt', 'BizNews'),
                'help' => esc_html__('متن جهت قرار دادن در alt تصاویر را وارد کنید', 'BizNews'),

            ),

            'Banner_sidbar_post_rel' => array(

                'label' => esc_html__('فالو یا نو فالو', 'BizNews'),
                'desc' => esc_html__('با انتخاب هر یک از گزینه های زیر فالو یا نو فالو بودن بنر را مشخص کنید', 'BizNews'),
                'type'  => 'select',
                'value' => ' ',
                'choices' => array(
                    'follow' => esc_html__('follow', 'BizNews'),
                    'nofollow' => esc_html__('nofollow', 'BizNews')
                ),
                /**
                 * Allow save not existing choices
                 * Useful when you use the select to populate it dynamically from js
                 */
                'no-validate' => false,

            ),

            'trending_sidbar_post' => array(
                'label' => esc_html__(' عنوان بخش مطالب در سایدبار', 'BizNews'),
                'type' => 'text',
                'desc' => esc_html__('تغییر عنوان بخش مطالب در ساید بار', 'BizNews'),
            ),

            // 'trending_news_category_sidbar_post' => array(
            //     'label' => esc_html__('انتخاب دسته بندی مطالب', '{doamin}'),
            //     'type' => 'multi-select',
            //     'desc' => esc_html__('دسته بندی مورد نظر جهت نمایش در بخش سایدبار را انتخاب کنید', 'BizNews'),
            //     'population' => 'taxonomy',
            //     'source' => 'category',
            //     'limit' => 100,
            // ),

            'sidbar_post_show_category' => array(
                'label' => esc_html__('عنوان بخش نمایش همه عناوین دسته بندی', 'BizNews'),
                'type' => 'text',
                'desc' => esc_html__('تغییر عنوان بخش نمایش تمامی دسته بندی ها', 'BizNews'),
            ),

        ),
    ),
);

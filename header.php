<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <?php
    wp_head(); //call The header

    $Sticky_Header_Options = fw_get_db_customizer_option('Sticky_Header_Options', 'No');
    $navbar_classes = array('menu-navbar'); // کلاس‌های پیش‌فرض نوبار شما

    if ($Sticky_Header_Options === 'Yes') {
        $navbar_classes[] = 'sticky-header-enabled'; // کلاسی که جاوا اسکریپت شما به آن نیاز دارد
    }

    $Banner_header = fw_get_db_customizer_option('Banner_header');
    $Social_icon = fw_get_db_customizer_option('Social_icon');
    $Mobile_logo = fw_get_db_customizer_option('Mobile_logo');
    $Banner_header_link = fw_get_db_customizer_option('Banner_header_link');
    $Banner_header_alt = fw_get_db_customizer_option('Banner_header_alt');
    $Banner_header_rel = fw_get_db_customizer_option('Banner_header_rel');

    ?>
</head>

<body>
    <header>
        <!-- Topbar Start -->
        <div class="container-fluid d-none d-lg-block">
            <div class="row align-items-center bg-dark">
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-sm bg-dark p-0">
                        <ul class="navbar-nav ml-n2">
                            <li class="nav-item border-right border-secondary">
                                <script>
                                    // create a function to update the date and time
                                    function updateDateTime() {
                                        // create a new `Date` object
                                        const now = new Date();

                                        // get the current date and time as a string
                                        const currentDateTime = now.toLocaleString('fa');

                                        // update the `textContent` property of the `span` element with the `id` of `datetime`
                                        document.querySelector('#datetime').textContent = currentDateTime;
                                    }

                                    // call the `updateDateTime` function every second
                                    setInterval(updateDateTime, 1000);
                                </script>
                                <span class="nav-link text-body small" id="datetime"></span>
                            </li>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'topBar-menu',
                                'container' => false,
                                'menu_class' => 'navbar-nav ml-auto py-0', // تنظیم راست‌چین بودن منو
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 4,
                                'walker' => new Custom_Navwalker(),
                            ));
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 text-right d-none d-md-block">
                    <nav class="navbar navbar-expand-sm bg-dark p-0">
                        <ul class="navbar-nav ml-auto mr-n2">
                            <?php
                            if (!empty($Social_icon)) {
                                foreach ($Social_icon as $Icon) {
                            ?>
                                    <li class="nav-item">
                                        <a class="nav-link text-body" href="<?php echo $Icon['icon_Link'] ?>" aria-label="social-logo"><small class="fab <?php echo $Icon['icon_Name'] ?>"></small></a>
                                    </li>
                            <?php
                                }
                            } else {
                                echo '';
                            }
                            ?>

                        </ul>

                    </nav>
                </div>
            </div>
            <div class="row align-items-center bg-white py-3 px-lg-5">
                <div class="col-lg-6">
                    <figure>
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_url($custom_logo_id);
                        if (has_custom_logo()) {
                        ?>
                            <a href="<?php echo home_url(); ?>" aria-label="Logo"><img width="150px" height="54px" src="<?php echo esc_url($logo) ?>" alt="<?php get_bloginfo('name') ?>"></a>
                        <?php
                        } else {
                            echo get_bloginfo('name');
                        }

                        ?>
                    </figure>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <a rel="<?php echo $Banner_header_rel ?>" href="<?php echo $Banner_header_link; ?>" target="_blank">
                        <img width="100%" height="100%" class="img-fluid" src="<?php
                                                                                if (!empty($Banner_header)) {
                                                                                    echo $Banner_header["url"];
                                                                                    // var_dump($Banner_header);
                                                                                } else {
                                                                                    echo " ";
                                                                                }
                                                                                ?>
                " alt="<?php echo $Banner_header_alt; ?>">
                    </a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 menu-navbar <?php echo esc_attr(implode(' ', $navbar_classes)); ?> ">

            <figure class="d-lg-none">
                <?php
                if (!empty($Mobile_logo)) {
                ?>
                    <a href="<?php echo home_url();  ?>" aria-label="Logo"><img width="150px" height="54px" src="<?php echo $Mobile_logo["url"] ?>" alt="<?php get_bloginfo('name') ?>"></a>
                <?php
                } else {
                    echo '';
                }

                ?>
            </figure>

            <button aria-label="BurgerMenu" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between px-0 " id="navbarCollapse">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'navbar-nav py-0',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 4,
                    'walker' => new WP_Bootstrap_Navwalker(), // نیاز به WP_Bootstrap_Navwalker دارید
                ));
                ?>
                <!-- <div role="search" class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control border-0" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
                </div>
            </div> -->
                <!-- Search Input -->
                <?php get_search_form(); ?>
                <!-- Search Input -->
            </div>
        </nav>
        <!-- Navbar End -->
    </header>
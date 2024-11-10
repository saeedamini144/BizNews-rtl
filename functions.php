<?php
//add navwalker
function register_navwalker()
{
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

//add TGM
function register_TGM()
{
    require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
    require_once get_template_directory() . '/inc/plugins.php';
}
add_action('after_setup_theme', 'register_TGM');

// end TGm


add_filter('fw:option_type:icon-v2:filter_packs', '_custom_packs_list');

//jalali date
require_once get_template_directory() . '/inc/jdatetime.class.php';
function display_jalali_date($format, $timestamp = null) {
    if (is_null($timestamp)) {
        $timestamp = current_time('timestamp');
    }
    return jDateTime::date($format, $timestamp);
}
//jalali date

function theme_support_BizNews()
{
    add_theme_support('title-tag'); //dynamic site title
    add_theme_support('custom-logo'); //custom-logo
    add_theme_support('post-thumbnails'); //show the post images
}
add_action('after_setup_theme', 'theme_support_BizNews');
//add menu item
// function register_BizNews_menu()
// {
//     register_nav_menus(array(
//         'Main-menu' => __("Main Menu", 'main-menu'),
//         'TopBar-Menu' => __("Top Bar Menu", 'TopBar-menu')
//     ));
// }
// add_action('after_setup_theme', 'register_BizNews_menu');
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'topBar-menu' => __('Top Bar menu'),
        )
    );
}
add_action('init', 'register_my_menus');

///add style 
function register_style_BizNews()
{
    $version = wp_get_theme()->get('version');
    wp_enqueue_style("BizStyle", get_template_directory_uri() . "/style.css", array(), $version, "all");
    wp_enqueue_style("fontAwsome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css", array(), "5.15.0", "all");
    wp_enqueue_style("owlStyle", get_template_directory_uri() . "/lib/owlcarousel/assets/owl.carousel.min.css", array(), "2.2.0", "all");
}
add_action("wp_enqueue_scripts", "register_style_BizNews");
//add scripts
function register_scripts_BizNews()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script("BootstrapJS", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js", array(), "4.4.1", true);
    wp_enqueue_script("easing", get_template_directory_uri() . "/lib/easing/easing.min.js", array("jquery"), "1.4.1", true);
    wp_enqueue_script("owlJS", get_template_directory_uri() . "/lib/owlcarousel/owl.carousel.min.js", array("jquery"), "2.2.1", true);
    wp_enqueue_script("mainJS", get_template_directory_uri() . "/js/main.js", array("jquery"), " ", true);
}
add_action("wp_enqueue_scripts", "register_scripts_BizNews");


//Tobar menu Use the navwalker
class Custom_Navwalker extends Walker_Nav_Menu
{
    // Start Level (ul wrap)
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"submenu dropdown-menu\">\n";
    }

    // Start Element (li and a wrap)
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = 'nav-item border-left border-secondary topBarMenu'; // اضافه کردن کلاس‌های دلخواه برای راست‌چین
        $output .= '<li class="' . $classes . '">';

        // لینک
        $attributes  = ' class="nav-link text-body small"';
        $attributes .= ' href="' . esc_attr($item->url) . '"';

        $item_output = '<a' . $attributes . '>';
        $item_output .= apply_filters('the_title', $item->title, $item->ID);
        $item_output .= '</a>';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // End Element (closing li tag)
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}


//call fontawsome to show the template

function _custom_packs_list($current_packs)
{
    /**
     * $current_packs is an array of pack names.
     * You should return which one you would like to show in the picker.
     */
    return array('font-awesome');
}

add_filter('fw:option_type:icon-v2:filter_packs', '_custom_packs_list');




// function my_customizer_save($wp_customize)
// {
//     $footer_gallery = fw_get_db_settings_option('footer_gallery');

//     if (empty($footer_gallery)) {
//         // اگر تصاویر حذف شده‌اند، آن‌ها را از دیتابیس حذف کن
//         fw_delete_db_settings_option('footer_gallery');
//     } else {
//         // در غیر این صورت، تغییرات جدید را ذخیره کن
//         fw_set_db_settings_option('footer_gallery', $footer_gallery);
//     }
// }
// add_action('customize_save_after', 'my_customizer_save');



// function clean_footer_gallery_images($footer_gallery)
// {
//     if (is_array($footer_gallery)) {
//         return array_filter($footer_gallery, function ($image) {
//             return !empty($image['url']);
//         });
//     }
//     return array();
// }

// add_filter('fw_option_footer_gallery', 'clean_footer_gallery_images');


add_filter('the_time', 'change_date_format');

function change_date_format(){
    //change date language here
    $date = get_the_time('Y/m/d');
    $date = explode('/', $date);
    $farsi_date = g2p($date[0],$date[1],$date[2]);
    return $farsi_date[0].'/'.$farsi_date[1].'/'.$farsi_date[2];
}

function g2p($g_y, $g_m, $g_d)
{
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

    $gy = $g_y-1600;
    $gm = $g_m-1;
    $gd = $g_d-1;

    $g_day_no = 365*$gy+floor(($gy+3)/4)-floor(($gy+99)/100)+floor(($gy+399)/400);

    for ($i=0; $i < $gm; ++$i){
        $g_day_no += $g_days_in_month[$i];
    }

    if ($gm>1 && (($gy%4==0 && $gy%100!=0) || ($gy%400==0))){
        /* leap and after Feb */
        ++$g_day_no;
    }

    $g_day_no += $gd;
    $j_day_no = $g_day_no-79;
    $j_np = floor($j_day_no/12053);
    $j_day_no %= 12053;
    $jy = 979+33*$j_np+4*floor($j_day_no/1461);
    $j_day_no %= 1461;

    if ($j_day_no >= 366) {
        $jy += floor(($j_day_no-1)/365);
        $j_day_no = ($j_day_no-1)%365;
    }
    $j_all_days = $j_day_no+1;

    for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i) {
        $j_day_no -= $j_days_in_month[$i];
    }

    $jm = $i+1;
    $jd = $j_day_no+1;

    return array($jy, $jm, $jd, $j_all_days);
}
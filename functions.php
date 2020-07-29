<?php
// Define path and URL to the ACF plugin.
define('MY_ACF_PATH', get_stylesheet_directory() . '/vendor/advanced-custom-fields-pro/');
define('MY_ACF_URL', get_stylesheet_directory_uri() . '/vendor/advanced-custom-fields-pro/');
define('TEMPLATE_DIR', get_template_directory());
define('SPARTACUS_DIR_URI', get_template_directory_uri());

// Include the ACF plugin.
require_once MY_ACF_PATH . 'acf.php';

//Include ACF fields
require_once TEMPLATE_DIR . '/inc/acf-fields.php';

//Generate social icons
require_once TEMPLATE_DIR . '/inc/generate-social-icons.php';

//Generate author box
require_once TEMPLATE_DIR . '/inc/author-box.php';

//Generate breadcrumbs
require_once TEMPLATE_DIR . '/inc/breadcrumbs.php';

//Include widget
require_once TEMPLATE_DIR . '/inc/widgets/spartacus-widget-show-post.php';

//Create ACF Theme Options page
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
}

/*=============================================
=            FUNCTIONS			            =
=============================================*/

//Enable featured images
function spartacus_setup()
{
    //Add featured image
    add_theme_support('post-thumbnails');
    //Add custom logo
    add_theme_support('custom-logo');
    add_theme_support('admin-bar', array('callback' => '__return_false'));
    //Load text domain for translations
    load_theme_textdomain('spartacus', TEMPLATE_DIR . '/languages');
    //Add title tag
    add_theme_support('title-tag');
}

//Unregister widgets
function spartacus_unregister_widgets()
{
    unregister_widget('WP_Widget_Media_Audio');
    unregister_widget('Archives');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Widget_Media_Video');
}

//Add stylesheets and JS files
function spartacus_scripts()
{
    //Normalize CSS
    wp_enqueue_style('normalize', SPARTACUS_DIR_URI . '/css/normalize.css', array(), '8.0.1');

    //Fontello CSS
    wp_enqueue_style('fontello', SPARTACUS_DIR_URI . '/css/fontello/css/fontello-embedded.css', array(), '1.0.0');

    //Animate CSS
    wp_enqueue_style('animate', SPARTACUS_DIR_URI . '/css/animate.css', array(), '1.0.0');

    //Main stylesheet
    wp_enqueue_style('main', get_stylesheet_uri(), array('normalize'), '1.0.0');

    /** Load main JavaScript files */
    wp_enqueue_script('scripts', SPARTACUS_DIR_URI . '/js/scripts.js', array('jquery'), '1.0.0', true);

    /** Load table of contents files */
    wp_enqueue_script('toc-js', SPARTACUS_DIR_URI . '/js/jquery.toc.min.js', array('jquery'), '1.0.0', true);
}

//Create the menus
function spartacus_add_menus()
{
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'button-menu' => 'Button Menu / Side navigation',
        'footer-1' => 'Footer Menu 1',
        'footer-2' => 'Footer Menu 2',
        'footer-3' => 'Footer Menu 3',
        'footer-4' => 'Footer Menu 4',
        'footer-5' => 'Footer Menu 5',
    ));
}

//Creates the Widgets
function spartacus_add_widgets()
{
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

//Adds images in front of menu items
function spartacus_nav_menu_objects($items, $args)
{
    // loop
    foreach ($items as &$item) {
        // vars
        $icon = get_field('icon', $item);
        // append icon
        if ($icon) {
            $item->title = "<img src='{$icon["url"]}' alt='{$icon["alt"]}' class='menu-icon'>" . "<span>" . $item->title . "</span>";
        }
    }
    // return
    return $items;
}

//Custom excerpt lenght
function spartacus_custom_excerpt_length($length)
{
    return 20;
}

// Customize the url setting to fix incorrect asset URLs.
function my_acf_settings_url($url)
{
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
function my_acf_settings_show_admin($show_admin)
{
    return true;
}

/*=============================================
=            FILTERS			            =
=============================================*/

//Change excerpt lenght
add_filter('excerpt_length', 'spartacus_custom_excerpt_length', 10);

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');

//Add icons to menu items
add_filter('wp_nav_menu_objects', 'spartacus_nav_menu_objects', 10, 2);

// Allow HTML in author bio section 
remove_filter('pre_user_description', 'wp_filter_kses');

/*=============================================
=            ACTIONS			            =
=============================================*/

// Add our function to the post content filter 
add_action('the_content', 'spartacus_author_box');

//Creates the Widgets
add_action('widgets_init', 'spartacus_add_widgets');

//Adds stylesheets and scripts
add_action('wp_enqueue_scripts', 'spartacus_scripts');

//Hook menus into wordpress
add_action('init', 'spartacus_add_menus');

//Add settings when the theme is activated
add_action('after_setup_theme', 'spartacus_setup');

//Unregister widgets
add_action('widgets_init', 'spartacus_unregister_widgets');



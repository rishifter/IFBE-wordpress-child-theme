<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

// END ENQUEUE PARENT ACTION

/* IFBE load scripts depending on page */
add_action('wp_enqueue_scripts', 'scripts_by_page');

function scripts_by_page()
{
    /* GSAP + Text plugin script */
    if (is_page('home')) {
        wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), '3.10.4', true);
        wp_enqueue_script('gsap-text_plugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/TextPlugin.min.js', array(), '3.2.6', true);

        wp_enqueue_style('owl-styles', get_stylesheet_directory_uri() . '/assets/owl.carousel.min.css');
    }
    /* GSAP + Scroll trigger script */
    if (is_page(array('the-substation', 'the-cathedral', 'the-ice-factory', 'the-cathedral-edit'))) {
        wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), '3.10.4', true);
        wp_enqueue_script('gsap-scrolltrigger_plugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array(), '3.10.4', true);
        wp_enqueue_script('gsap-scrollto_plugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js', array(), '3.10.4', true);
    }

    /* Calendar Script*/
    if (is_page('ifbe-calendar')) {
        wp_enqueue_script('calendar', get_stylesheet_directory_uri() . '/scripts/calendar.js', array(), false, true);
    }

    /* Accordion Script*/
    if (is_page(array('faqs', 'privacy-policy', 'terms-and-conditions'))) {
        wp_enqueue_script('acc', get_stylesheet_directory_uri() . '/scripts/accordion.js', array(), false, true);
    }

    /* Search Script*/
    if (is_page('faqs')) {
        wp_enqueue_script('search', get_stylesheet_directory_uri() . '/scripts/search.js', array(), false, true);
    }
}




// Disable Contact Form 7 js and css
// https://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/
// add_filter('wpcf7_load_js', '__return_false');
// add_filter('wpcf7_load_css', '__return_false');
// TODO




// Disable WP block extra css and svg https://github.com/WordPress/gutenberg/issues/36834#issuecomment-1069052915
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');


// Update CSS within Admin
function admin_style()
{
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


add_action('wp_enqueue_scripts', 'register_my_scripts');


// FORCE LOAD STYLES
function register_my_scripts()
{
    wp_enqueue_style('parent_style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}

@ini_set('upload_max_size', '128M');
@ini_set('post_max_size', '128M');
@ini_set('max_execution_time', '300');

<?php
/**
 * Paso Elite Theme Functions and Definitions
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

define('PASO_ELITE_VERSION', '1.0.0');

// Include Inc files
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/cpt.php';
require_once get_template_directory() . '/inc/meta-boxes.php';
require_once get_template_directory() . '/inc/default-data.php';

/**
 * Theme Setup
 */
function paso_elite_setup() {
    // Make theme available for translation
    load_theme_textdomain('paso-elite', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Custom Logo Support
    add_theme_support('custom-logo', array(
        'height'      => 120,
        'width'       => 120,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'paso-elite'),
        'footer'  => esc_html__('Footer Menu', 'paso-elite'),
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'paso_elite_setup');

/**
 * Enqueue styles and scripts
 */
function paso_elite_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'paso-elite-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Theme CSS
    wp_enqueue_style(
        'paso-elite-main',
        get_template_directory_uri() . '/assets/css/index.css',
        array(),
        PASO_ELITE_VERSION
    );

    // WordPress Theme style.css
    wp_enqueue_style(
        'paso-elite-style',
        get_stylesheet_uri(),
        array('paso-elite-main'),
        PASO_ELITE_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'paso-elite-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        PASO_ELITE_VERSION,
        true
    );

    // Localize Script for dynamic values
    wp_localize_script('paso-elite-script', 'pasoEliteConfig', array(
        'ajaxUrl'      => admin_url('admin-ajax.php'),
        'homeUrl'      => esc_url(home_url('/')),
        'themeUrl'     => get_template_directory_uri(),
        'whatsappNum'  => esc_attr(get_theme_mod('paso_whatsapp', '2347014987308')),
        'phoneNum'     => esc_attr(get_theme_mod('paso_phone', '07014987308')),
        'address'      => esc_attr(get_theme_mod('paso_address', 'No 6 Itu Road, Uyo, Akwa Ibom State, Nigeria')),
    ));
}
add_action('wp_enqueue_scripts', 'paso_elite_scripts');

/**
 * Helper template tags
 */
function paso_get_phone() {
    return get_theme_mod('paso_phone', '07014987308');
}

function paso_get_whatsapp() {
    return get_theme_mod('paso_whatsapp', '2347014987308');
}

function paso_get_email() {
    return get_theme_mod('paso_email', 'Pasoeliteunisexsalon@gmail.com');
}

function paso_get_address() {
    return get_theme_mod('paso_address', 'No 6 Itu Road, Uyo, Akwa Ibom State, Nigeria');
}

function paso_get_hours_weekdays() {
    return get_theme_mod('paso_hours_weekdays', 'Monday – Saturday: 8:00 AM – 9:00 PM');
}

function paso_get_hours_sunday() {
    return get_theme_mod('paso_hours_sunday', 'Sunday: 12:00 PM – 7:00 PM');
}

function paso_get_slogan() {
    return get_theme_mod('paso_slogan', 'A place where good look meets confidence');
}

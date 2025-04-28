<?php

/**
 * The Clinic App Theme Functions
 * 
 * @package TheClinicApp
 */
require_once get_template_directory() . '/lib/class-bootstrap-navwalker.php';
require_once get_template_directory() . '/lib/helpers.php';

function theclinicapp_enqueue_assets()
{
    // Styles
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Scripts
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', [], null, true);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', ['popper'], null, true);
    wp_enqueue_script(
        'theme-main-js',
        get_template_directory_uri() . '/js/main.js',
        array(),                                // Dependencies (empty array - no dependencies)
        '1.0.0',                                // Version (for cache busting)
        true                                    // Load in footer (true) or header (false)
    );
}
add_action('wp_enqueue_scripts', 'theclinicapp_enqueue_assets');

function register_site_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_site_menus');

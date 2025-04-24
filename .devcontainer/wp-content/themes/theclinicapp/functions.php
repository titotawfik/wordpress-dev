<?php
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

function extract_first_media_with_type($content)
{
    //extract_first_media_with_type from WYSIWYG editor ACF fields
    if (!$content) return ['type' => null, 'html' => ''];

    if (preg_match('/<img[^>]+>/i', $content, $img_match)) {
        return ['type' => 'image', 'html' => preg_replace('/(width|height)="\d*"/i', '', $img_match[0])];
    }

    if (preg_match('/<video[^>]*>.*?<\/video>/is', $content, $video_match)) {
        return ['type' => 'video', 'html' => preg_replace('/(width|height)="\d*"/i', '', $video_match[0])];
    }

    if (preg_match('/<iframe[^>]+src=["\'].*?(youtube\.com|vimeo\.com)[^"\']*["\'][^>]*><\/iframe>/i', $content, $iframe_match)) {
        return ['type' => 'iframe', 'html' => preg_replace('/(width|height)="\d*"/i', '', $iframe_match[0])];
    }

    return ['type' => null, 'html' => ''];
}

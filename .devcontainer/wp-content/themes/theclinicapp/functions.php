<?php

/**
 * The Clinic App Theme Functions
 * 
 * @package TheClinicApp
 */
require_once get_template_directory() . '/lib/class-bootstrap-navwalker.php';
require_once get_template_directory() . '/lib/helpers.php';
/** =================================================================================================================================  */
function theclinicapp_enqueue_assets()
{
	// Styles
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/style.css', [], '1.0.0', 'all'); // Load the main stylesheet
	// Scripts
	wp_enqueue_script(
		'popper',
		'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js',
		array(),
		'2.11.8',
		true
	);
	wp_enqueue_script(
		'theme-main-js',
		get_template_directory_uri() . '/dist/js/main.js',
		array(),                                // Dependencies (empty array - no dependencies)
		'1.0.0',                                // Version (for cache busting)
		true                                    // Load in footer (true) or header (false)
	);
}
add_action('wp_enqueue_scripts', 'theclinicapp_enqueue_assets');
/** ========================================================================================================================================  */
// Register Navigation Menus
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
/** ============================================================================================================================================= */
// Register Footer Widgets
function mytheme_footer_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'theclinicapp' ),
        'id'            => 'footer-1',
        'description'   => __( 'Footer widget area 1', 'theclinicapp' ),
        'before_widget' => '<div id="%1$s" class="widget text-white %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="widget-title text-white fw-bold">',
        'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'theclinicapp' ),
        'id'            => 'footer-2',
        'description'   => __( 'Footer widget area 2', 'theclinicapp' ),
        'before_widget' => '<div id="%1$s" class="widget text-white %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="widget-title text-white fw-bold">',
        'after_title'   => '</h6>',
    ) );
}
add_action( 'widgets_init', 'mytheme_footer_widgets_init' );
/** ============================================================================================================================================= */
// DISABLE USER REST API CALL
function disable_rest_endpoints($endpoints)
{
	if (isset($endpoints['/wp/v2/users'])) {
		unset($endpoints['/wp/v2/users']);
	}
	if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
		unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
	}
	return $endpoints;
}
add_filter('rest_endpoints', 'disable_rest_endpoints');
/** ============================================================================================================================================= */
// REDIRECT USER IF TRYING TO USE AUTHOR PARAMETER
function redirect_to_home_if_author_parameter()
{

	$is_author_set = get_query_var('author', '');
	if ($is_author_set != '' && !is_admin()) {
		wp_redirect(home_url(), 301);
		exit;
	}
}
add_action('template_redirect', 'redirect_to_home_if_author_parameter');
/** ============================================================================================================================================= */
// DISABLE WP EMOJI 
// This function disables the emoji script and styles that WordPress includes by default.
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
/** ============================================================================================================================================= */
// DISABLE COMMENTS
// This function disables comments on all post types, hides existing comments, and removes the comments admin 
function df_disable_comments_post_types_support()
{
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if (post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status()
{
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments)
{
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu()
{
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect()
{
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url());
		exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function df_disable_comments_dashboard()
{
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar()
{
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'df_disable_comments_admin_bar');
/** ============================================================================================================================================= */

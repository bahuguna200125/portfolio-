<?php
/**
 * portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package portfolio
 */

if ( ! defined( 'PORTFOLIO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'PORTFOLIO_VERSION', '1.0.6' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function portfolio_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on portfolio, use a find and replace
		* to change 'portfolio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'portfolio' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'portfolio_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'portfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'portfolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {
	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri(), array(), PORTFOLIO_VERSION );
	wp_style_add_data( 'portfolio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), PORTFOLIO_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function portfolio_theme_enqueue_scripts() {
    // Enqueue Bootstrap CSS from a CDN
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    
    // Enqueue your theme's main stylesheet (style.css)
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    // Enqueue Bootstrap JS from a CDN
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), PORTFOLIO_VERSION, true);
}
add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_scripts');
function create_contact_form_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_form_entries'; 

   
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $charset_collate = $wpdb->get_charset_collate();

        
		$sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            firstname tinytext NOT NULL,
            lastname tinytext NOT NULL,
            email text NOT NULL,
            message text NOT NULL,
            date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            PRIMARY KEY  (id),
            UNIQUE KEY email (email(255))
        ) $charset_collate;";




        // Include the WordPress upgrade file to use dbDelta
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
add_action('init', 'create_contact_form_table');

function handle_contact_form_submission() {
    // Verify nonce for security
    if (!isset($_POST['contact_form_nonce_field']) || !wp_verify_nonce($_POST['contact_form_nonce_field'], 'contact_form_nonce')) {
        wp_die('Invalid submission.');
    }

    // Sanitize and validate the form data
    $fname    = sanitize_text_field($_POST['fname']);
	$lname    = sanitize_text_field($_POST['lname']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Save the data into the database
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_form_entries';
    $wpdb->insert(
        $table_name,
        array(
            'firstname'    => $fname,
			'lastname'    => $lname,	
			'email'   => $email,
            'message' => $message,
            'date'    => current_time('mysql'),
        )
    );

	echo '<p>Thank you for contacting me! Your message has been sent.</p>';
    // Redirect to a thank-you page
    wp_redirect(home_url(path: '/?p=52/'));
    exit;
}

// Hook for logged-in users
add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');

// Hook for guests
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');



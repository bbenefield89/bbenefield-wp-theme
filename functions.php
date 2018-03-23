<?php
/**
 * bbenefield functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bbenefield
 */

if ( ! function_exists( 'bbenefield_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bbenefield_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bbenefield, use a find and replace
		 * to change 'bbenefield' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bbenefield', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'nav_menu' => esc_html__( 'Nav Menu', 'bbenefield' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bbenefield_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bbenefield_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bbenefield_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bbenefield_content_width', 640 );
}
add_action( 'after_setup_theme', 'bbenefield_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bbenefield_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bbenefield' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bbenefield' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Extra Sidebar', 'bootstrap2wordpress' ),
		'id'            => 'blog-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'bootstrap2wordpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bbenefield_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bbenefield_scripts() {
	wp_enqueue_style( 'bbenefield-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bbenefield-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'bbenefield-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	/***************
	** CUSTOM CSS **
	***************/
	// BOOTSTRAP
	wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
	// GOOGLE FONTS
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Quicksand');
	// CUSTOM CSS
	wp_enqueue_style('bbenefield-scss', get_template_directory_uri() . '/assets/css/custom.css' );
	
	/**************
	** CUSTOM JS **
	**************/
	wp_enqueue_script('fontawesome-5', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', [], '', false);
	wp_enqueue_script( 'bbenefield-main-js', get_template_directory_uri() . '/js/main.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bbenefield_scripts' );

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

/*******************
** CUSTOMIZER API **
*******************/
// require_once(get_stylesheet_directory().'/CustomHero.php');
// add_action('customize_register', function($wp_customize) {
// 	CustomHero::Register($wp_customize);
// });

// function mytheme_customize_register($wp_customize) {
// 	$wp_customize->add_setting('header-text-color',
// 		[
// 			'default' => '#000',
// 			'transport' => 'refresh',
// 		]
// 	);
	
// 	$wp_customize->add_control(
// 		new WP_Customize_Control($wp_customize, 'mytheme-hero-button-text',
// 			[
// 				'label' => __('Hero Button Text', 'bbenefield'),
// 				'section' => 'title_tagline',
// 				'settings' => 'hero-button'
// 			]
// 		)
// 	);
// }
// add_action('customize_register', 'mytheme_customize_register');

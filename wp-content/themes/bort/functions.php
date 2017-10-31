<?php
/**
 * bort functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bort
 */

if ( ! function_exists( 'bort_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bort_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bort, use a find and replace
		 * to change 'bort' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bort', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'bort' ),
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
		add_theme_support( 'custom-background', apply_filters( 'bort_custom_background_args', array(
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
add_action( 'after_setup_theme', 'bort_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bort_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bort_content_width', 640 );
}
add_action( 'after_setup_theme', 'bort_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bort_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bort' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bort' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bort_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bort_scripts() {
	wp_enqueue_style( 'bort-style-onepage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.css' );
	wp_enqueue_style( 'bort-style-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'bort-style-stylesheet',  get_template_directory_uri() .'/layouts/stylesheet.css' );

	wp_enqueue_script( 'bort-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bort-onepage-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bort-scrollTo', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js', array(), '20151215', true );

	wp_enqueue_script( 'bort-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js', array(), '20151215', true );

	wp_enqueue_script( 'bort-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'bort-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxT2udMh_ghRFZxzsFUP7UTTfbgVtxOE&callback=initMap', array(), '20151215', true );

	wp_enqueue_script( 'bort-main', get_template_directory_uri() . '/es6/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bort_scripts' );

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

function add_option_field_to_general_admin_page(){
	$option_name = 'my_option';

	// регистрируем опцию
	register_setting( 'general', $option_name );

	// добавляем поле
	add_settings_field(
		'myprefix_setting-id',
		'My custom options',
		'myprefix_setting_callback_function',
		'general',
		'default',
		array(
			'id' => 'myprefix_setting-id',
			'option_name' => 'my_option'
		)
	);
}
add_action('admin_menu', 'add_option_field_to_general_admin_page');

function myprefix_setting_callback_function( $val ){
	$id = $val['id'];
	$option_name = $val['option_name'];

	echo '<input type="text" name="' . $option_name .'" id="' . $id . '" value="' . esc_attr( get_option($option_name) ) . '" />';
}

function my_more_options(){
	register_setting('general','my_phone_options');
	register_setting('general','my_location_options');
	register_setting('general','c-phone_options');
	register_setting('general','my_email_options');


	add_settings_field('phone','Номер телефона','display_phone','general');
	add_settings_field('location','Расположение','display_location','general');
	add_settings_field('tel2','Контактный телефон','display_c_phone','general');
	add_settings_field('email2','Контактный email','display_email','general');



};
add_action('admin_init', 'my_more_options');


function display_phone(){
	echo "<input type='text' name='my_phone_options' class='regular-text' value='". esc_attr(get_option('my_phone_options')) . "'>";
};

function front_phone(){
 $val = get_option('my_phone_options');
	echo trim($val);
}


function display_location(){
	echo "<textarea rows='10' cols='45' name='my_location_options' class='regular-text'>". esc_attr(get_option('my_location_options')) . "</textarea>";
};
function front_location(){
	$val = get_option('my_location_options');
	echo trim($val);
}


function display_email(){
	echo "<input type='text' name='my_email_options' class='regular-text' value='". esc_attr(get_option('my_email_options')) . "'>";
};
function front_email(){
	$val = get_option('my_email_options');
	echo trim($val);
}
function display_c_phone(){
	echo "<input type='text' name='c-phone_options' class='regular-text' value='". esc_attr(get_option('c-phone_options')) . "'>";
};
function front_c_phone(){
	$val = get_option('c-phone_options');
	echo trim($val);
}
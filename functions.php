<?php
/**
 * coffeeplace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coffeeplace
 */

if ( ! function_exists( 'coffeeplace_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function coffeeplace_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on coffeeplace, use a find and replace
	 * to change 'coffeeplace' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'coffeeplace', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'coffeeplace' ),
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
	add_theme_support( 'custom-background', apply_filters( 'coffeeplace_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'coffeeplace_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coffeeplace_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'coffeeplace_content_width', 640 );
}
add_action( 'after_setup_theme', 'coffeeplace_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coffeeplace_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'coffeeplace' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'coffeeplace' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'coffeeplace_widgets_init' );



add_theme_support( 'custom-logo' );



function coffee_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}
/**
 * Enqueue scripts and styles.
 */
function coffeeplace_scripts() {
	wp_enqueue_style( 'bootstrap', 	get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0' );
	wp_enqueue_style( 'font-awesome', 	get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'carousel', 	get_template_directory_uri() . '/css/carousel.css', array(), '4.7.0' );
	wp_enqueue_style( 'coffeeplace-style', get_stylesheet_uri() );
	
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'coffeeplace-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'npm', get_template_directory_uri() . '/js/npm.js', array(), '', true );

	wp_enqueue_script( 'coffeeplace-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'coffeeplace_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


 //Register widgets
 
 function coffee_widgets_init() {
	register_sidebar( array(
		'name'          => 'Subscribe Widgets' ,
		'id'            => 'subscribe-top',
		'description'   => 'Add widgets here to appear The Subscriber',
		'before_widget' => '<div class="thrv_wrapper subscribe_widgets">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
		register_sidebar( array(
		'name'          => 'Footer Widgets' ,
		'id'            => 'sidebar_foot',
		'description'   => 'Add widgets here to appear in the Footer',
		'before_widget' => '<div class="col-md-4 widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'coffee_widgets_init' );


// Customize Appearance Options
	function coffee_customize_register( $wp_customize ) {
		$wp_customize->remove_section('header_image'); 
		$wp_customize->remove_section('colors');
		$wp_customize->remove_section('background_image');
	}
	add_action('customize_register', 'coffee_customize_register');
//Footer social options
function coffee_footer_social_links(){ 
			  if( coffee_option( 'footer_facebook_link' )  )
			  {
				echo sprintf('<li class="fb"><a href="%s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>', esc_url( coffee_option( 'footer_facebook_link' )  ) );
			  }
			  if( coffee_option( 'footer_twitter_link' )  )
			  {
				echo sprintf('<li class="tw"><a href="%s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>', esc_url( coffee_option( 'footer_twitter_link' )  ) );
			  }
			  if( coffee_option( 'footer_google_plus_link' )  )
			  {
				echo sprintf('<li class="gg"><a href="%s"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>', esc_url( coffee_option( 'footer_google_plus_link' )  ) );
			  }
			  if( coffee_option( 'footer_youtube_link' )  )
			  {
				echo sprintf('<li class="yt"><a href="%s"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>', esc_url( coffee_option( 'footer_youtube_link' )  ) );
			  }
			  if( coffee_option( 'footer_pinterest_link' )  )
			  {
				echo sprintf('<li class="pt"><a href="%s"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>', esc_url( coffee_option( 'footer_pinterest_link' )  ) );
			  }
			  
		}
function coffee_option( $option_key , $default = '')
	{
		return cs_get_customize_option( $option_key )?: $default;
	}



//post content read more
function coffee_excerpt_more( $more ) {
	$coffee_post_content = explode (" ", get_the_content());
	
	$less_content = array_slice($coffee_post_content, 0, $more);
	echo implode(" ", $less_content);
    }

	require_once get_template_directory() .'/inc/cs-framework/cs-framework.php';
	require get_template_directory() . '/inc/customizer.php';

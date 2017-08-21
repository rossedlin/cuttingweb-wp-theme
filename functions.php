<?php
/**
 * CuttingWeb functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CuttingWeb
 */

if (!function_exists('pre'))
{
	/**
	 * Wrapped PRINT_R - More human readable.
	 *
	 * @param $var
	 */
	function pre($var)
	{
		if ($var === false)
		{
			echo "FALSE<br />";
		}
		elseif ($var === true)
		{
			echo "TRUE<br />";
		}
		else
		{
			echo "<pre>";
			print_r($var);
			echo "</pre>";
		}
	}
}

if (!function_exists('get_post_featured_image_src'))
{
	/**
	 * Get a Wordpress POST's Featured image source url.
	 *
	 * @param WP_Post $post
	 *
	 * @return string|bool
	 */
	function get_post_featured_image_src(WP_Post $post)
	{
		$thumb_id        = get_post_thumbnail_id($post);
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

		if (is_array($thumb_url_array) && isset($thumb_url_array[0]))
		{
			if (substr($thumb_url_array[0], strlen($thumb_url_array[0]) - 11, 11) == 'default.png')
			{
				return false;
			}

			return $thumb_url_array[0];
		}

		return false;
	}
}


if (!function_exists('cuttingweb_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cuttingweb_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CuttingWeb, use a find and replace
		 * to change 'cuttingweb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('cuttingweb', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'cuttingweb'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('cuttingweb_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));

		include(__DIR__ . '/inc/widgets.php');
	}
endif;
add_action('after_setup_theme', 'cuttingweb_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cuttingweb_content_width()
{
	$GLOBALS['content_width'] = apply_filters('cuttingweb_content_width', 640);
}

add_action('after_setup_theme', 'cuttingweb_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cuttingweb_widgets_init()
{
	register_sidebar(array(
		'name'          => __('Main Sidebar', 'cuttingweb'),
		'id'            => 'sidebar-main',
		'description'   => __('The main sidebar appears on the right on each page except the front page template', 'cuttingweb'),
		'before_widget' => '<div id="%1$s" class="panel panel-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="panel-heading widget-title">',
		'after_title'   => '</div>',
	));

	register_sidebar(array(
		'name'          => __('Front page sidebar', 'cuttingweb'),
		'id'            => 'footer-1',
		'description'   => __('Appears on the static front page template', 'cuttingweb'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_widget('ImageLinkWidget');
}

add_action('widgets_init', 'cuttingweb_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function cuttingweb_scripts()
{
//	wp_enqueue_style('cuttingweb-style', get_stylesheet_uri());
	wp_enqueue_style('cuttingweb-style', get_stylesheet_directory_uri() . '/style.css', '', filemtime(__DIR__ . '/style.css'));

	wp_enqueue_script('cuttingweb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('cuttingweb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments'))
	{
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'cuttingweb_scripts');

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
if (defined('JETPACK__VERSION'))
{
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Cutting Web Functions
 */

add_filter('nav_menu_css_class', 'active_nav_class', 10, 2);
function active_nav_class($classes, $item)
{
	if (in_array('current-menu-item', $classes))
	{
		$classes[] = 'active ';
	}
	return $classes;
}

add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );
//add_filter('jpeg_quality', function ($arg)
//{
//	return 100;
//});

//add_image_size('sidebar-thumb', 120, 120, true); // Hard Crop Mode
//add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
//add_image_size( 'portfolio-thumb', 590, 9999 ); // Unlimited Height Mode
add_image_size('portfolio-100', 9999, 100);
add_image_size('portfolio-200', 9999, 200);
add_image_size('portfolio-250', 9999, 250);
add_image_size('portfolio-300', 9999, 300);
add_image_size('portfolio-400', 9999, 400);
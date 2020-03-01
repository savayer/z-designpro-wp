<?php
/**
 * z-design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package z-design
 */

if ( ! function_exists( 'z_design_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function z_design_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on z-design, use a find and replace
		 * to change 'z-design' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'z-design', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'z-design' ),
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
		add_theme_support( 'custom-background', apply_filters( 'z_design_custom_background_args', array(
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
add_action( 'after_setup_theme', 'z_design_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function z_design_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'z_design_content_width', 640 );
}
add_action( 'after_setup_theme', 'z_design_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function z_design_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'z-design' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'z-design' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'z_design_widgets_init' );

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

/************************************************************ */

function dd($data) {
	echo '<pre style="direction:ltr">';
	die(print_r($data));
	echo '</pre>';
}

function z_scripts() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'style-fixes', get_template_directory_uri() . '/css/fixes.css' );
	
	wp_register_script('indexjs', get_template_directory_uri() . '/js/index.min.js', array(), false, true );
	wp_register_script('fixesjs', get_template_directory_uri() . '/js/fixes.js', array(), false, true );
	wp_register_script('mainjs', get_template_directory_uri() . '/js/main.min.js', array(), false, true );
	wp_register_script( 'script-vendor', get_template_directory_uri() . '/js/vendor.min.js', array(), false, true);
	
	if (is_page()) {
		global $wp_query;
		$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
		if ($template_name == 'page-home.php') {			   
			wp_enqueue_script( 'indexjs');
			$categories = get_categories( array(
				'taxonomy'     => 'category',
				'type'         => 'portfolio',
				'orderby'      => 'term_id',
				'order'        => 'ASC',
			));
			
			$prependWorks = get_posts( array(
				'numberposts' => -1,
				'orderby'     => 'date',
				'order'       => 'DESC',				
				'post_type'   => 'portfolio',
			));
			$works = [];
			foreach ($prependWorks as $work) {
				$id = $work->ID;
				$works[] = array(
					'id' => $id,
					'name' => $work->post_title,
					'site' => get_field('go_to_site_link', $id),
					'category' => 'w-'.get_the_category($id)[0]->slug,
					'description' => get_field('work_description', $id),
					'image' => get_the_post_thumbnail_url($id),
					'media' => get_field('work_images', $id),
				);
			}
			$data = array(
				'cats' => $categories,
				'works' => $works
			);
			wp_localize_script( 'indexjs', 'PHP_DATA', $data );
			wp_enqueue_script( 'script-vendor');
		} else {
			wp_enqueue_script( 'mainjs');
			wp_enqueue_script( 'script-vendor');
		}
	}
	wp_enqueue_script( 'fixesjs');
}
add_action( 'wp_enqueue_scripts', 'z_scripts' );



	/************************************************************ */


include_once('acf-repeater/acf-repeater.php');

function portfolio_post_type() {
	$args = array(
		'public' => true,
		'label' => 'Portfolio',
		'taxonomies' => array('category' ),
		'supports' => array( 'title', 'editor', 'author', 'thumbnail' )
	);
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_post_type' );

add_filter('nav_menu_css_class' , 'my_nav_special_class' , 10 , 2);
function my_nav_special_class($classes, $item){
	if (in_array('current-menu-item', $classes) || in_array('current_page_item', $classes)
			/* || in_array('current-page-ancestor', $classes) */ ){
		$classes[] = 'active ';
	}
    return $classes;
}

class MyWalker extends Walker_Nav_Menu
{

	function start_el(&$output, $item, $depth, $args)
	{
    	global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="'. esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>'; 

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $prepend = '<strong>';
        $append = '</strong>';
        $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : ''; 

        if($depth != 0)
        {
        	$description = $append = $prepend = "";
        }

		$item_output = $args->before;
		if ($item->ID === 67) {
			$item_output .= '<a'. $attributes .' data-modal="about" class="menu__link">';
		} elseif ($item->ID === 68) {
			$item_output .= '<a'. $attributes .' data-modal="contact" class="menu__link">';
		} else {
			$item_output .= '<a'. $attributes .'  class="menu__link">';
		}
		switch ($item->ID) {			
			case 65: //home
				$item_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27"><g><g><path d="M.997 9.137a1.648 1.648 0 0 1 .39-2.3L13.585.408a2.429 2.429 0 0 1 2.694 0l12.197 6.429a1.675 1.675 0 0 1 0 2.69L16.28 15.005a2.626 2.626 0 0 1-2.694 0L1.387 9.527a1.654 1.654 0 0 1-.39-.39zm1.486-.955l12.458 5.236 12.458-5.272L14.94 1.457zm-1.096 7.083c-.646-.35-.817-1.614-.817-2.313.817.466 1.958.96 1.913.96l12.458 5.728 12.44-5.765 1.913-.96c0 .718-.225 2.027-.818 2.314l-12.197 5.47a2.626 2.626 0 0 1-2.694 0l-12.198-5.47zm25.994 4.375l1.913-.95c0 .708-.225 2.026-.818 2.304l-12.197 5.47a2.59 2.59 0 0 1-2.694 0l-12.198-5.47C.741 20.654.57 19.381.57 18.69c.817.457 1.958.95 1.913.95l12.458 5.739z" /></g></g></svg>';
				break;
			case 67: //about
				$item_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27"><g><g><path d="M18.807 18.59v3.385a5.078 5.078 0 0 1-5.08 5.074h-8.47a5.078 5.078 0 0 1-5.08-5.074v-3.384c0-2.222 1.439-4.089 3.428-4.776-1.083-1.46-1.735-3.333-1.735-5.373 0-4.67 3.413-8.457 7.622-8.457 4.21 0 7.622 3.786 7.622 8.457 0 2.04-.652 3.912-1.735 5.373 1.99.687 3.428 2.554 3.428 4.776zm-9.315-3.382c3.274 0 5.928-3.029 5.928-6.766s-2.654-6.766-5.928-6.766-5.928 3.029-5.928 6.766 2.654 6.766 5.928 6.766zm7.622 3.807c0-1.799-1.367-3.296-3.198-3.695-1.248.991-2.773 1.58-4.424 1.58-1.652 0-3.176-.589-4.424-1.58-1.832.4-3.198 1.896-3.198 3.695v2.537c0 2.102 1.862 3.806 4.158 3.806h6.928c2.296 0 4.158-1.704 4.158-3.806zm1.693-13.11c0-.467.379-.846.847-.846h6.775a.846.846 0 1 1 0 1.691h-6.775a.845.845 0 0 1-.847-.845zm8.469 5.074a.846.846 0 0 1-.847.846h-6.775a.845.845 0 1 1 0-1.69h6.775c.468 0 .847.377.847.844zm0 5.075a.847.847 0 0 1-.847.847h-5.081a.847.847 0 1 1 0-1.693h5.08c.469 0 .848.38.848.846zm0 5.075a.846.846 0 0 1-.847.846h-5.081a.846.846 0 1 1 0-1.692h5.08c.469 0 .848.379.848.846z" /></g></g></svg>';
				break;
			case 70: //services
				$item_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27"><g><g><path d="M23.777 14.42a4.503 4.503 0 0 1-3.512 3.522 4.497 4.497 0 0 1-5.302-3.521H1.383a.9.9 0 0 1-.899-.902.9.9 0 0 1 .9-.902h13.58a4.503 4.503 0 0 1 3.511-3.521 4.497 4.497 0 0 1 5.302 3.521h.99a.9.9 0 0 1 .898.902.9.9 0 0 1-.899.902zm-4.407 1.804a2.702 2.702 0 0 0 2.698-2.705 2.702 2.702 0 0 0-2.698-2.706 2.702 2.702 0 0 0-2.698 2.706 2.702 2.702 0 0 0 2.698 2.705zm-8.184 7.215a4.503 4.503 0 0 1-3.512 3.522 4.497 4.497 0 0 1-5.301-3.522h-.99a.9.9 0 0 1-.899-.902.9.9 0 0 1 .9-.902h.989a4.503 4.503 0 0 1 3.512-3.521 4.497 4.497 0 0 1 5.301 3.521h13.58a.9.9 0 0 1 .9.902.9.9 0 0 1-.9.902zM6.78 25.243a2.702 2.702 0 0 0 2.698-2.706 2.702 2.702 0 0 0-2.698-2.705 2.702 2.702 0 0 0-2.699 2.705 2.702 2.702 0 0 0 2.699 2.706zm8.004-19.84a4.503 4.503 0 0 1-3.512 3.521A4.497 4.497 0 0 1 5.97 5.403H1.384a.9.9 0 0 1-.9-.902.9.9 0 0 1 .9-.902H5.97A4.503 4.503 0 0 1 9.482.077 4.497 4.497 0 0 1 14.784 3.6h9.982a.9.9 0 0 1 .9.902.9.9 0 0 1-.9.902zm-4.407 1.803a2.702 2.702 0 0 0 2.698-2.705 2.702 2.702 0 0 0-2.698-2.706 2.702 2.702 0 0 0-2.698 2.706 2.702 2.702 0 0 0 2.698 2.705z" /></g></g></svg>';
				break;
			case 69: //process
				$item_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29"><g><g><path d="M26.357 21.525a3.577 3.577 0 1 1-4.346 4.346H7.452a3.577 3.577 0 1 1-4.346-4.346V6.967A3.577 3.577 0 1 1 7.452 2.62h14.559a3.577 3.577 0 1 1 4.346 4.346zm-2.683-18.01a1.788 1.788 0 1 0 3.577 0 1.788 1.788 0 0 0-3.577 0zM4 5.303a1.788 1.788 0 1 0 0-3.577 1.788 1.788 0 0 0 0 3.577zM5.79 24.977a1.789 1.789 0 1 0-3.578 0 1.789 1.789 0 0 0 3.578 0zm18.78-3.452V6.967a3.577 3.577 0 0 1-2.558-2.558H7.452a3.577 3.577 0 0 1-2.558 2.558v14.558a3.577 3.577 0 0 1 2.558 2.558h14.559a3.577 3.577 0 0 1 2.557-2.558zm2.682 3.452a1.789 1.789 0 1 0-3.577 0 1.789 1.789 0 0 0 3.577 0z" /></g></g></svg>';
				break;
			case 66: //blog
				$item_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20"><g><g><path d="M2 16a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm0-8a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7-5h18a1 1 0 0 0 0-2H9a1 1 0 0 0 0 2zm18 6H9a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2zM2 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm25 17H9a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2z" /></g></g></svg>';
				break;
			case 68: //contacts
				$item_output .= '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><g><g><path d="M27.276 7.72v16.07a3.386 3.386 0 0 1-3.388 3.383H3.564A3.386 3.386 0 0 1 .177 23.79V7.72L13.727.11zM1.95 24.279l7.598-7.586-7.678-6.118V23.79c0 .171.033.333.08.488zm22.315 1.157l-7.78-7.769-2.759 1.895-2.759-1.895-7.78 7.77c.122.028 20.956.028 21.078 0zm1.317-14.86l-7.677 6.117 7.597 7.586a1.67 1.67 0 0 0 .08-.488zm0-2.01L13.71 2.08 1.87 8.565l11.856 9.013z" /></g></g></svg>';
				break;
			default:
				break;				
		}
        $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
        $item_output .= $description.$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        }
}
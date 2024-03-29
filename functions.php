<?php
/**
 * EnviroSmartSolutions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EnviroSmartSolutions
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function envirosmartsolutions_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on EnviroSmartSolutions, use a find and replace
		* to change 'envirosmartsolutions' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'envirosmartsolutions', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'envirosmartsolutions' ),
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
			'envirosmartsolutions_custom_background_args',
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
add_action( 'after_setup_theme', 'envirosmartsolutions_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function envirosmartsolutions_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'envirosmartsolutions_content_width', 640 );
}
add_action( 'after_setup_theme', 'envirosmartsolutions_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function envirosmartsolutions_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'envirosmartsolutions' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'envirosmartsolutions' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'envirosmartsolutions_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function envirosmartsolutions_scripts() {
	wp_enqueue_style( 'envirosmartsolutions-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'envirosmartsolutions-style', 'rtl', 'replace' );

	wp_enqueue_script( 'envirosmartsolutions-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'envirosmartsolutions_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

//Hero Function
function createHeroSection($h1Text, $pText, $bgImageURL) {
    $themeFileURI = get_theme_file_uri($bgImageURL);
    $output = <<<HTML
	<div class="container container__1" style="
	background-image: url({$themeFileURI});">
		<div class="section section__hero">
			<h1>{$h1Text}</h1>
			<p class="tagline">{$pText}</p>
			<div class="button-box">
				<a href="javascript:void(0)" class="modaltrigger button button__primary">CONTACT</a>
				<a href="#" class="learn-more button button__secondary">LEARN MORE</a>
			</div>
		</div>
	</div>
	HTML;

    return $output;
}

//Accordion Component
function generateAccordion($items) {
    echo '<div class="accordion">';
    foreach ($items as $item) {
        echo '<div class="accordion__item">';
        echo '<div class="accordion__item--heading">';
        echo '<h3><a href="#" class="accordion-toggle">' . $item['heading'] . '</a></h3>';
        echo '</div>';
        echo '<div class="accordion__item--content">';
        echo '<p>' . $item['content'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}

//Social Proof Component
function generate_social_proof($countries) {
    $html = '
    <div class="section section__social-proof">
        <h4>
            <i>'.$countries.'</i>
        </h4>
        <a href="javascript:void(0)" class="modaltrigger button button__primary">CONTACT</a>
    </div>';
    return $html;
}

//Breadcrumbs
function my_custom_breadcrumbs() {
    if (is_home() || is_front_page()) {
        return;
    }

    echo '<div class="section section__breadcrumbs">';
    echo '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
    echo '<li class="breadcrumb-item"><a href="' . get_home_url() . '">Home</a></li>';

    if (is_category() || is_single()) {
        $category = get_the_category();
        if ($category) {
            if (is_single()) {
                echo '<li class="breadcrumb-item"><a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a></li>';
            } else {
                echo '<li class="breadcrumb-item">' . $category[0]->cat_name . '</li>';
            }
        }
    }

    if (is_single()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
    }

    echo '</ol></nav>';
    echo '</div>';
}

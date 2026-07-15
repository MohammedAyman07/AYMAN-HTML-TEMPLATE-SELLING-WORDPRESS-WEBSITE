<?php
/**
 * AYMAN INFOTECH Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function ayman_infotech_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'ayman-infotech' ),
		'footer'  => esc_html__( 'Footer Menu', 'ayman-infotech' ),
	) );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add WooCommerce Support
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 600,
		'gallery_thumbnail_image_width' => 100,
		'single_image_width'    => 800,
		'product_grid'          => array(
			'default_rows'    => 3,
			'min_rows'        => 2,
			'max_rows'        => 8,
			'default_columns' => 4,
			'min_columns'     => 2,
			'max_columns'     => 5,
		),
	));
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'ayman_infotech_setup' );

/**
 * Enqueue Scripts and Styles
 */
function ayman_infotech_scripts() {
	// Enqueue Google Fonts (Inter & Outfit)
	wp_enqueue_style( 'ayman-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap', array(), null );

	// Enqueue Font Awesome
	wp_enqueue_style( 'ayman-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

	// Main CSS
	wp_enqueue_style( 'ayman-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

	// Theme Stylesheet (style.css)
	wp_enqueue_style( 'ayman-style', get_stylesheet_uri(), array('ayman-main-style'), '1.0.0' );

	// Main JS
	wp_enqueue_script( 'ayman-main-script', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );

    // Enqueue Font Awesome (ensure it's loaded only once/correctly)
    // Already enqueued above.
}
add_action( 'wp_enqueue_scripts', 'ayman_infotech_scripts' );

/**
 * Custom Meta Box for Live Demo URL
 */
function ayman_add_demo_url_meta_box() {
    add_meta_box(
        'ayman_product_demo_url',
        'Live Demo settings',
        'ayman_render_demo_url_meta_box',
        'product',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'ayman_add_demo_url_meta_box');

function ayman_render_demo_url_meta_box($post) {
    $demo_url = get_post_meta($post->ID, '_ayman_demo_url', true);
    ?>
    <label for="ayman_demo_url">Live Demo URL:</label>
    <input type="url" id="ayman_demo_url" name="ayman_demo_url" value="<?php echo esc_attr($demo_url); ?>" style="width:100%;">
    <p class="description">Enter the URL for the product live demo (e.g., https://aymaninfotech.com/demo/product-name)</p>
    <?php
}

function ayman_save_demo_url_meta_box($post_id) {
    if (array_key_exists('ayman_demo_url', $_POST)) {
        update_post_meta(
            $post_id,
            '_ayman_demo_url',
            esc_url_raw($_POST['ayman_demo_url'])
        );
    }
}
add_action('save_post', 'ayman_save_demo_url_meta_box');

/**
 * Add custom classes to body
 */
function ayman_body_classes( $classes ) {
    $classes[] = 'ayman-theme';
    return $classes;
}
add_filter( 'body_class', 'ayman_body_classes' );


/**
 * Disable WooCommerce styles (since we are custom styling)
 * Optional: uncomment if you want full control
 */
/**
 * Display Live Demo Button on Single Product Page
 */
function ayman_display_live_demo_button() {
    global $post;
    $demo_url = get_post_meta($post->ID, '_ayman_demo_url', true);
    
    if ($demo_url) {
        echo '<div class="ayman-live-demo-wrapper" style="margin-bottom: 1rem;">';
        echo '<a href="' . esc_url($demo_url) . '" class="button alt" target="_blank" style="background-color: #28a745; border-color: #28a745; color: #fff; width: 100%; text-align: center; display: block; padding: 10px;">';
        echo '<i class="fas fa-desktop"></i> View Live Demo';
        echo '</a>';
        echo '</div>';
    }
}
add_action('woocommerce_single_product_summary', 'ayman_display_live_demo_button', 35);

/**
 * Add Custom Tabs to Product Page
 */
function ayman_add_product_tabs( $tabs ) {
    $tabs['tech_stack'] = array(
        'title'    => __( 'Tech Stack', 'ayman-infotech' ),
        'priority' => 50,
        'callback' => 'ayman_tech_stack_tab_content'
    );
    $tabs['version_history'] = array(
        'title'    => __( 'Version History', 'ayman-infotech' ),
        'priority' => 60,
        'callback' => 'ayman_version_history_tab_content'
    );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'ayman_add_product_tabs' );

function ayman_tech_stack_tab_content() {
    echo '<h2>Tech Stack</h2>';
    echo '<ul>';
    echo '<li><strong>CMS:</strong> WordPress</li>';
    echo '<li><strong>Framework:</strong> Bootstrap 5 / Tailwind</li>';
    echo '<li><strong>Database:</strong> MySQL</li>';
    echo '<li><strong>Compatible Browsers:</strong> Chrome, Firefox, Safari, Edge</li>';
    echo '</ul>';
}

function ayman_version_history_tab_content() {
    echo '<h2>Version History</h2>';
    echo '<p><strong>v1.0.0</strong> - Initial Release</p>';
}

/**
 * Change "Add to Cart" text to "Buy Now" or "Purchase"
 */
function ayman_custom_add_to_cart_text() {
    return __( 'Buy Now', 'ayman-infotech' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'ayman_custom_add_to_cart_text' );
add_filter( 'woocommerce_product_add_to_cart_text', 'ayman_custom_add_to_cart_text' );


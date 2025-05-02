<?php
/**
 * VirtuGrow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VirtuGrow
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
function virtugrow_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on VirtuGrow, use a find and replace
		* to change 'virtugrow' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'virtugrow', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'virtugrow' ),
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
			'virtugrow_custom_background_args',
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
add_action( 'after_setup_theme', 'virtugrow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function virtugrow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'virtugrow_content_width', 640 );
}
add_action( 'after_setup_theme', 'virtugrow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function virtugrow_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'virtugrow' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'virtugrow' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'virtugrow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function virtugrow_scripts() {
    // Default theme style
    wp_enqueue_style('virtugrow-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('virtugrow-style', 'rtl', 'replace');

    // Custom CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.css');
    wp_enqueue_style('intl-tel-input', get_template_directory_uri() . '/assets/css/intlTelInput.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

    // Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('virtugrow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.js', array('jquery'), '', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '', true);
    wp_enqueue_script('intl-tel-input', get_template_directory_uri() . '/assets/js/intlTelInput-jquery.min.js', array('jquery'), '', true);
    wp_enqueue_script('sweetalert', get_template_directory_uri() . '/assets/js/sweetalert.js', array('jquery'), '', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);

    // Comment reply script for single posts
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // Localize script for AJAX
    wp_localize_script('main-js', 'virtugrow_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('virtugrow_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'virtugrow_scripts');


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


class Footer_Legal_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= '<li><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
    }
}

function virtugrow_register_footer_menus() {
    register_nav_menus(
        array(
            'footer-wat-doen-wij'       => __('Wat Doen Wij', 'virtugrow'),
            'footer-webdevelopment'     => __('WebDevelopment', 'virtugrow'),
            'footer-online-marketing'   => __('Online Marketing', 'virtugrow'),
            'footer-legal'              => __('Footer Legal Links', 'virtugrow'),
        )
    );
}
add_action('init', 'virtugrow_register_footer_menus');


function virtugrow_footer_customize_register($wp_customize) {
    // Contact Info Section
    $wp_customize->add_section('footer_contact_info', array(
        'title' => __('Footer Contact Info', 'virtugrow'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('phone_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('phone_number', array(
        'label' => __('Phone Number', 'virtugrow'),
        'section' => 'footer_contact_info',
        'type' => 'text',
    ));

    // Email Address
    $wp_customize->add_setting('email_address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('email_address', array(
        'label' => __('Email Address', 'virtugrow'),
        'section' => 'footer_contact_info',
        'type' => 'email',
    ));

    // PO Box
    $wp_customize->add_setting('po_box', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('po_box', array(
        'label' => __('PO Box', 'virtugrow'),
        'section' => 'footer_contact_info',
        'type' => 'text',
    ));

    // Office Address
    $wp_customize->add_setting('office_address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('office_address', array(
        'label' => __('Office Address', 'virtugrow'),
        'section' => 'footer_contact_info',
        'type' => 'text',
    ));

    // Social Media Section
    $wp_customize->add_section('footer_social_media', array(
        'title' => __('Social Media Links', 'virtugrow'),
        'priority' => 31,
    ));

    // Social Media URLs
    $social_platforms = array(
        'whatsapp' => __('WhatsApp URL', 'virtugrow'),
        'facebook' => __('Facebook URL', 'virtugrow'),
        'instagram' => __('Instagram URL', 'virtugrow'),
        'linkedin' => __('LinkedIn URL', 'virtugrow'),
        'twitter' => __('Twitter URL', 'virtugrow'),
        'youtube' => __('YouTube URL', 'virtugrow')
    );

    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting($platform . '_url', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control($platform . '_url', array(
            'label' => $label,
            'section' => 'footer_social_media',
            'type' => 'url',
        ));
    }

    // Copyright Section
    $wp_customize->add_section('footer_copyright', array(
        'title' => __('Copyright Information', 'virtugrow'),
        'priority' => 32,
    ));

    // Copyright Text
    $wp_customize->add_setting('copyright_text', array(
        'default' => '© ' . date('Y') . ' ' . get_bloginfo('name') . '. All Rights Reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('copyright_text', array(
        'label' => __('Copyright Text', 'virtugrow'),
        'section' => 'footer_copyright',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'virtugrow_footer_customize_register');



// Handle Enquiry Form
function virtugrow_handle_enquiry() {
    check_ajax_referer('virtugrow_nonce', 'security');
    
    $data = array(
        'full_name' => sanitize_text_field($_POST['full_name']),
        'email' => sanitize_email($_POST['email']),
        'phone' => sanitize_text_field($_POST['phone']),
        'service' => sanitize_text_field($_POST['service']),
        'message' => sanitize_textarea_field($_POST['message'])
    );
    
    // Here you would typically save to database or send email
    // For now, just return success
    wp_send_json_success(array('message' => __('Thank you for your enquiry!', 'virtugrow')));
}
add_action('wp_ajax_virtugrow_enquiry', 'virtugrow_handle_enquiry');
add_action('wp_ajax_nopriv_virtugrow_enquiry', 'virtugrow_handle_enquiry');

// Handle Subscription Form
function virtugrow_handle_subscription() {
    check_ajax_referer('virtugrow_nonce', 'security');
    
    $data = array(
        'name' => sanitize_text_field($_POST['name']),
        'phone' => sanitize_text_field($_POST['phone']),
        'email' => sanitize_email($_POST['email']),
        'package' => sanitize_text_field($_POST['package'])
    );
    
    // Here you would typically save to database or send email
    // For now, just return success
    wp_send_json_success(array('message' => __('Thank you for subscribing!', 'virtugrow')));
}
add_action('wp_ajax_virtugrow_subscription', 'virtugrow_handle_subscription');
add_action('wp_ajax_nopriv_virtugrow_subscription', 'virtugrow_handle_subscription');

class Bootstrap_5_WP_Nav_Menu_Walker extends Walker_Nav_menu {
    private $current_item;
    private $dropdown_menu_alignment_values = [
        'dropdown-menu-start',
        'dropdown-menu-end',
        'dropdown-menu-sm-start',
        'dropdown-menu-sm-end',
        'dropdown-menu-md-start',
        'dropdown-menu-md-end',
        'dropdown-menu-lg-start',
        'dropdown-menu-lg-end',
        'dropdown-menu-xl-start',
        'dropdown-menu-xl-end',
        'dropdown-menu-xxl-start',
        'dropdown-menu-xxl-end'
    ];

    function start_lvl( &$output, $depth = 0, $args = null ) {
        $dropdown_menu_class[] = 'dropdown-menu';

        foreach($this->current_item->classes as $class) {
            if (in_array($class, $this->dropdown_menu_alignment_values)) {
                $dropdown_menu_class[] = $class;
            }
        }

        $output .= '<ul class="' . esc_attr(implode(' ', $dropdown_menu_class)) . '">';
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $this->current_item = $item;

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        if ($args->walker->has_children) {
            $classes[] = 'dropdown';
        }

        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= '<li' . $id . $class_names . '>';

        $atts = [];
        $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target)     ? $item->target     : '';
        $atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = ! empty($item->url)        ? $item->url        : '';

        $atts['class'] = 'nav-link';
        if ($args->walker->has_children) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
            $atts['role'] = 'button';
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args);

        $output .= '<a'. $attributes .'>';
        $output .= $title;
        $output .= '</a>';
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}


// Allow SVG uploads
function allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');

// Optional: Fix SVG display in Media Library
function fix_svg_display() {
    echo '<style>
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'fix_svg_display');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Option Setting',
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-options',
        'capability' => 'edit_posts',
        'redirect'   => false,
        'position'   => 61, // just below Appearance
        'icon_url'   => 'dashicons-admin-generic'
    ]);
}

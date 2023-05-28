<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );
// Disable comment functionality

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
 
// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
 
// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);
 
// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
 
// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});


/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );
// Add fonts to <head>
function symbos_preload_fonts()
{
?>
	<link rel="preload" href="/wp-content/themes/symbos/fonts/blinker-bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/wp-content/themes/symbos/fonts/blinker-extralight.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/wp-content/themes/symbos/fonts/blinker-regular.woff2" as="font" type="font/woff2" crossorigin>
<?php
};
add_action('wp_head', 'symbos_preload_fonts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'symbos_nav_menu_add_submenu_class', 10, 3);

/**
 * Register a custom post type called "projects".
 *
 * @see get_post_type_labels() for label keys.
 */
function register_project_cpt() {
	$labels = array(
		'name'                  => _x( 'Projekte', 'Post type general name', 'symbos' ),
		'singular_name'         => _x( 'Projekt', 'Post type singular name', 'symbos' ),
		'menu_name'             => _x( 'Projekte', 'Admin Menu text', 'symbos' ),
		'name_admin_bar'        => _x( 'Projekt', 'Add New on Toolbar', 'symbos' ),
		'add_new'               => __( 'Projekt hinzufügen', 'symbos' ),
		'add_new_item'          => __( 'Neues Projekt hinzufügen', 'symbos' ),
		'new_item'              => __( 'Neues Projekt', 'symbos' ),
		'edit_item'             => __( 'Projekt bearbeiten', 'symbos' ),
		'view_item'             => __( 'Projekt ansehen', 'symbos' ),
		'all_items'             => __( 'Alle Projekte', 'symbos' ),
		'search_items'          => __( 'Suche Projekte', 'symbos' ),
		'parent_item_colon'     => __( 'Übergeordnete Projekte:', 'symbos' ),
		'not_found'             => __( 'Keine Projekte gefunden.', 'symbos' ),
		'not_found_in_trash'    => __( 'Keine Projekte im Papierkorb gefunden.', 'symbos' ),
		'featured_image'        => _x( 'Projektbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'symbos' ),
		'set_featured_image'    => _x( 'Projektbild hinzufügen', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'remove_featured_image' => _x( 'Projektbild löschen', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'use_featured_image'    => _x( 'Als Projektbild benutzen', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'archives'              => _x( 'Projekt-Archiv', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'symbos' ),
		'insert_into_item'      => _x( 'In Projekt einfügen', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'symbos' ),
		'uploaded_to_this_item' => _x( 'Zu diesem Projekt hinzugefügt', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'symbos' ),
		'filter_items_list'     => _x( 'Projektliste filtern', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'symbos' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projekte' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-layout',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'show_in_rest' => true,
	);

	register_post_type( 'projects', $args );
}

add_action( 'init', 'register_project_cpt' );

/**
 * Register a custom post type called "experience".
 *
 * @see get_post_type_labels() for label keys.
 */
function register_experience_cpt() {
	$labels = array(
		'name'                  => _x( 'Erfahrung', 'Post type general name', 'symbos' ),
		'singular_name'         => _x( 'Erfahrung', 'Post type singular name', 'symbos' ),
		'menu_name'             => _x( 'Erfahrung', 'Admin Menu text', 'symbos' ),
		'name_admin_bar'        => _x( 'Erfahrung', 'Add New on Toolbar', 'symbos' ),
		'add_new'               => __( 'Erfahrung hinzufügen', 'symbos' ),
		'add_new_item'          => __( 'Neue Erfahrung hinzufügen', 'symbos' ),
		'new_item'              => __( 'Neue Erfahrung', 'symbos' ),
		'edit_item'             => __( 'Erfahrung bearbeiten', 'symbos' ),
		'view_item'             => __( 'Erfahrung ansehen', 'symbos' ),
		'all_items'             => __( 'Alle Erfahrungen', 'symbos' ),
		'search_items'          => __( 'Suche Erfahrung', 'symbos' ),
		'parent_item_colon'     => __( 'Übergeordnete Erfahrung:', 'symbos' ),
		'not_found'             => __( 'Keine Erfahrung gefunden.', 'symbos' ),
		'not_found_in_trash'    => __( 'Keine Erfahrung im Papierkorb gefunden.', 'symbos' ),
		'featured_image'        => _x( 'Unternehmensbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'symbos' ),
		'set_featured_image'    => _x( 'Unternehmensbild hinzufügen', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'remove_featured_image' => _x( 'Unternehmensbild löschen', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'use_featured_image'    => _x( 'Als Unternehmensbild benutzen', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'archives'              => _x( 'Erfahrungs-Archiv', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'symbos' ),
		'insert_into_item'      => _x( 'In Erfahrung einfügen', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'symbos' ),
		'uploaded_to_this_item' => _x( 'Zu dieser Erfahrung hinzugefügt', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'symbos' ),
		'filter_items_list'     => _x( 'Erfahrungsliste filtern', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'symbos' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'erfahrungen' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-welcome-learn-more',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'show_in_rest' => true,

	);

	register_post_type( 'experience', $args );
}
add_action( 'init', 'register_experience_cpt' );

/**
 * Register a custom post type called "experience".
 *
 * @see get_post_type_labels() for label keys.
 */
function register_services_cpt() {
	$labels = array(
		'name'                  => _x( 'Leistungen', 'Post type general name', 'symbos' ),
		'singular_name'         => _x( 'Leistung', 'Post type singular name', 'symbos' ),
		'menu_name'             => _x( 'Leistung', 'Admin Menu text', 'symbos' ),
		'name_admin_bar'        => _x( 'Leistung', 'Add New on Toolbar', 'symbos' ),
		'add_new'               => __( 'Leistung hinzufügen', 'symbos' ),
		'add_new_item'          => __( 'Neue Leistung hinzufügen', 'symbos' ),
		'new_item'              => __( 'Neue Leistung', 'symbos' ),
		'edit_item'             => __( 'Leistung bearbeiten', 'symbos' ),
		'view_item'             => __( 'Leistung ansehen', 'symbos' ),
		'all_items'             => __( 'Alle Leistungen', 'symbos' ),
		'search_items'          => __( 'Suche Leistung', 'symbos' ),
		'parent_item_colon'     => __( 'Übergeordnete Leistung:', 'symbos' ),
		'not_found'             => __( 'Keine Leistung gefunden.', 'symbos' ),
		'not_found_in_trash'    => __( 'Keine Leistung im Papierkorb gefunden.', 'symbos' ),
		'featured_image'        => _x( 'Leistungsbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'symbos' ),
		'set_featured_image'    => _x( 'Leistungsbild hinzufügen', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'remove_featured_image' => _x( 'Leistungsbild löschen', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'use_featured_image'    => _x( 'Als Leistungsbild benutzen', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'archives'              => _x( 'Leistungs-Archiv', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'symbos' ),
		'insert_into_item'      => _x( 'In Leistung einfügen', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'symbos' ),
		'uploaded_to_this_item' => _x( 'Zu dieser Leistung hinzugefügt', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'symbos' ),
		'filter_items_list'     => _x( 'Leistungsliste filtern', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'symbos' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'leistungen' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-admin-tools',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'show_in_rest' => true,

	);

	register_post_type( 'services', $args );
}

add_action( 'init', 'register_services_cpt' );

/**
 * Register a custom post type called "feedback".
 *
 * @see get_post_type_labels() for label keys.
 */
function register_feedback_cpt() {
	$labels = array(
		'name'                  => _x( 'Feedback', 'Post type general name', 'symbos' ),
		'singular_name'         => _x( 'Feedback', 'Post type singular name', 'symbos' ),
		'menu_name'             => _x( 'Feedback', 'Admin Menu text', 'symbos' ),
		'name_admin_bar'        => _x( 'Feedback', 'Add New on Toolbar', 'symbos' ),
		'add_new'               => __( 'Feedback hinzufügen', 'symbos' ),
		'add_new_item'          => __( 'Neues Feedback hinzufügen', 'symbos' ),
		'new_item'              => __( 'Neues Feedback', 'symbos' ),
		'edit_item'             => __( 'Feedback bearbeiten', 'symbos' ),
		'view_item'             => __( 'Feedback ansehen', 'symbos' ),
		'all_items'             => __( 'Alle Feedbacks', 'symbos' ),
		'search_items'          => __( 'Suche Feedback', 'symbos' ),
		'parent_item_colon'     => __( 'Übergeordnetes Feedback:', 'symbos' ),
		'not_found'             => __( 'Kein Feedback gefunden.', 'symbos' ),
		'not_found_in_trash'    => __( 'Kein Feedback im Papierkorb gefunden.', 'symbos' ),
		'featured_image'        => _x( 'Personenbild', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'symbos' ),
		'set_featured_image'    => _x( 'Personenbild hinzufügen', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'remove_featured_image' => _x( 'Personenbild löschen', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'use_featured_image'    => _x( 'Als Personenbild benutzen', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'symbos' ),
		'archives'              => _x( 'Feedback-Archiv', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'symbos' ),
		'insert_into_item'      => _x( 'In Feedback einfügen', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'symbos' ),
		'uploaded_to_this_item' => _x( 'Zu diesem Feedback hinzugefügt', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'symbos' ),
		'filter_items_list'     => _x( 'Feedbackliste filtern', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'symbos' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'feedback' ),
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-format-quote',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'show_in_rest' => true,

	);

	register_post_type( 'feedback', $args );
}

add_action( 'init', 'register_feedback_cpt' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function symbos_register_sidebars()
{
	register_sidebar(array(
		'name'          => esc_html__('Datenschutztext', 'symbos'),
		'id'            => 'footer-text',
		'description'   => esc_html__('Widgets, die hier hinzugefügt werden, erscheinen im Unternehmens-Abschnitt der Fußzeile', 'symbos'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
}
add_action('widgets_init', 'symbos_register_sidebars');
<?php 
ob_start();
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, whicheast	
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	function wp_boostrap_starter_add_editor_styles() {
		add_editor_style( 'custom-editor-style.css' );
	}
	add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
	$theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

	if(!get_option( 'triggered_welcomet')){
		$message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
						   esc_url( $theme_page_url )
						  );

		printf(
			'<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
			$message
		);
		add_option( 'triggered_welcomet', '1', '', 'yes' );
	}

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Newsletter', 'wp-bootstrap-starter' ),
		'id'            => 'newsletter',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'wp-bootstrap-starter' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 5', 'wp-bootstrap-starter' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Copyright Left', 'wp-bootstrap-starter' ),
		'id'            => 'copyright-left',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Copyright Right', 'wp-bootstrap-starter' ),
		'id'            => 'copyright-right',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
	if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
		wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
		wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css' );
	} else {
		wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
	}
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
	if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
		wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
		wp_enqueue_style( 'wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
		wp_enqueue_style( 'wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
		wp_enqueue_style( 'wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
		wp_enqueue_style( 'wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
		wp_enqueue_style( 'wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
		wp_enqueue_style( 'wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
		wp_enqueue_style( 'wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
		wp_enqueue_style( 'wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
	}
	if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
		wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
	}
	//Color Scheme
	/*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

	wp_enqueue_script('jquery');

	// Internet Explorer HTML5 support
	wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
	wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
	if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
		wp_enqueue_script('wp-bootstrap-starter-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1/dist/umd/popper.min.js', array(), '', true );
		wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array(), '', true );
	} else {
		wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
		wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
	}
	wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );



/**
 * Add Preload for CDN scripts and stylesheet
 */
function wp_bootstrap_starter_preload( $hints, $relation_type ){
	if ( 'preconnect' === $relation_type && get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
		$hints[] = [
			'href'        => 'https://cdn.jsdelivr.net/',
			'crossorigin' => 'anonymous',
		];
		$hints[] = [
			'href'        => 'https://use.fontawesome.com/',
			'crossorigin' => 'anonymous',
		];
	}
	return $hints;
} 

add_filter( 'wp_resource_hints', 'wp_bootstrap_starter_preload', 10, 2 );



function wp_bootstrap_starter_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '<form action="' . esc_url( home_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
	return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );



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
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
	require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}


function getPartners() {
	register_post_type( 'partner',
					   array(
						   'labels' => array(
							   'name' => __( 'Partners' ),
							   'singular_name' => __( 'Partner' )
						   ),
						   'public' => true,
						   'has_archive' => false,
						   'rewrite' => array('slug' => 'about-us/strategic-partners'),
						   'can_export'          => true,
						   'supports'            => array( 'title','editor','thumbnail','excerpt', 'revisions'),
						   'publicly_queryable'  => true,
						   'menu_icon' => 'dashicons-image-filter',
					   )
					  );	
	$labels = array(
		'name' => _x( 'Partners Category', 'taxonomy general name' ),
		'singular_name' => _x( 'Partner Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Partner' ),
		'all_items' => __( 'All Partners' ),
		'parent_item' => __( 'Parent Partner' ),
		'parent_item_colon' => __( 'Parent Partner:' ),
		'edit_item' => __( 'Edit Partner' ), 
		'update_item' => __( 'Update Partner' ),
		'add_new_item' => __( 'Add New Partner' ),
		'new_item_name' => __( 'New Partner Name' ),
		'menu_name' => __( 'Partners' ),
	);
	register_taxonomy('partners-categories',array('partner'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'strategic-partners' ),
	));

}
add_action( 'init', 'getPartners' );
function get_partner($atts){
	
	$args = array(
		"post_type" => "partner",
		"posts_per_page" => -1,    
		"order" => "DESC",
    	"orderby" => "menu_order"

	);
?>
<section class="strategic-partner-sec owl-carousel owl-theme owl-loaded owl-drag">
<?php
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    $counter = 0;
    while ($the_query->have_posts()) : $the_query->the_post();
        if ($counter % 12 == 0) :
            echo $counter > 0 ? "</div>" : ""; // close div if it's not the first
            echo "<div class='partner-Parent'>";
        endif;
        ?>
        <div class="partner-child">
			<a href="<?php the_field('partner_link')?>" target="_blank"> <img src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
        </div>
        <?php
        $counter++;

    endwhile;
endif;?>
</section>
<?php
wp_reset_postdata();
}
add_shortcode("get-partner", "get_partner"); 

//
function partner_page($atts){
	
	$args = array(
		"post_type" => "partner",
		"posts_per_page" => -1,    
		"order" => "DESC",
    	"orderby" => "menu_order"

	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) {
	?>
	<section class="strategic-partners">
		<div class="row">
				<?php
			while ($the_query->have_posts()) {
				$the_query->the_post(); ?>
				<div class="col-md-4">
					<div class="partner-tumb">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					</div>
					<div class="partner-content">
						<h3>
							<?php the_title();?>
						</h3>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Learn More <img src="/wp-content/uploads/2022/05/Icon-feather-arrow-down-left-1.svg"></a>
					</div>
				</div>
			<?php } ?>
		</div>
	</section>

	<?php }
wp_reset_postdata();
}
add_shortcode("getPartnerPage", "partner_page"); 

//Solution

function getSolution() {
	register_post_type( 'solution',
					   array(
						   'labels' => array(
							   'name' => __( 'It Solutions' ),
							   'singular_name' => __( 'It Solution' )
						   ),
						   'public' => true,
						   'has_archive' => true,
						   'rewrite' => array('slug' => 'Solution'),
						   'can_export'          => true,
						   'supports'            => array( 'title','thumbnail'),
						   'publicly_queryable'  => true,
						   'menu_icon' => 'dashicons-lightbulb',
					   )
					  );	

}
add_action( 'init', 'getSolution' );
function get_solution($atts){
	
	$args = array(
    'post_type' => 'solution',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'menu_order'
);
?>
<section class="partner-sec-home owl-carousel owl-theme owl-loaded owl-drag">
<?php
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
    $counter = 0;
    while ($the_query->have_posts()) : $the_query->the_post();
        if ($counter % 12 == 0) :
            echo $counter > 0 ? "</div>" : ""; // close div if it's not the first
            echo "<div class='partner-Parent'>";
        endif;
        ?>
        <div class="partner-child">
			<a href="<?php the_field('It_link')?>" target="_blank"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
        </div>
        <?php
        $counter++;

    endwhile;
endif;?>
		
</section>
<?php
wp_reset_postdata();
}
add_shortcode("getSolution", "get_solution"); 

function sinc_testimonial() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Testimonial', 'Admin Menu text', 'textdomain' ),
		'featured_image'        => _x( 'Testimonial', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'textdomain' )
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'menu_icon' 		 => 'dashicons-image-filter'
	);
	register_post_type( 'testimonial', $args );
}
add_action( 'init', 'sinc_testimonial' );

function sinc_testimonial_function(){

	$args = array( 
		'post_type' => 'testimonial',
		'posts_per_page' => -1, 
		'orderby' => 'date', 
		'order' => 'ASC',
	);
	$loop = new WP_Query( $args );
?>

<ul id="testimonials" class="owl-carousel owl-theme">
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<li class="testimonial-inner">
		<div class="testimonial-detail">
			<?php echo the_content(); ?>	
		</div>
		<div class="thumbnail">
			<p>
				<?php echo the_title(); ?>
			</p>
			<img src="<?php echo get_the_post_thumbnail_url(); ?>">
		</div>
		
	</li>	
	<?php endwhile; 
	?>

</ul>
<?php
	wp_reset_query(); 
}
add_shortcode('get_testimonial', 'sinc_testimonial_function');


// Events

function sinc_events() {
    $labels = array(
        'name'                  => _x( 'Events', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Event', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Events', 'Admin Menu text', 'textdomain' ),
        'featured_image'        => _x( 'Events Image', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'textdomain' )
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'menu_icon' 		 => 'dashicons-calendar-alt'
    );
    register_post_type( 'event', $args );
}
add_action( 'init', 'sinc_events' );

function our_events(){
		$today = date('Ymd');
        $args=array(        
        'post_type' => 'event',        
        'meta_query' => array(
		array(
	        'key'		=> 'event_date',
	        'compare'	=> '>',
	        'value'		=> $today,
	    )       
        ),
		'posts_per_page' => -1,
		'orderby' => 'event_date', 
		'order' => 'asc',
       ); 

       $wp_query = new WP_Query($args);
       if($wp_query->have_posts() ){ ?>
        <div id="events" class="events-carousel"> <?
         while($wp_query->have_posts()){
               $wp_query->the_post(); ?>
				   <div class="event-content">
					   <a href="<?php the_permalink(); ?>" target="_blank">
						   <span class="sub-heading"><?php the_field('layout'); ?></span>
							<h4><?php echo get_the_title(); ?></h4>	
						   <h5 class="date-time">
							   <?php the_field('event_date'); ?>
							   </h5>
						   <h5 class="address">
						   <?php the_field('card_address');
						   ?>
						   </h5>
						   <div class="event-icon-wrap">
								<div class="event-image">
								   <img src="<?php echo get_the_post_thumbnail_url(); ?> ">		
								   <span>Learn More</span>
							   </div>
							   <div class="event-icon">
								<?php 
	$image = get_field('icon');
	if( !empty( $image ) ): ?>
		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php endif; ?>	
							   </div>
						   </div>
					   </a>
				   </div> <?php
				 } ?>
			

		
		</div>
		<?php }
			}
add_shortcode("getEvents", "our_events");

// Event Page


function events_page(){
// 	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$today = date('Ymd');
		$todayChanged=date('D, F j,Y');
		  $args1=array(        
        'post_type' => 'event',
		'posts_per_page' => '180',
		'meta_key'   => 'event_date',
		'orderby'	=> 'meta_value',
    	'order'     => 'ASC','meta_query' => array(
array(
'key' => 'event_date',
'value' => $today,
'type' => 'DATE',
'compare' => '>',
)
)
       );  
       $wp_query = new WP_Query($args1);
       if($wp_query->have_posts() ){ ?>
        <div id="events-page" class="events-page"> <?php 
         while($wp_query->have_posts()){
               $wp_query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" target="_blank">
				   <div class="event-content">
					   
					   <span class="sub-heading"><?php the_field('layout'); ?></span>
						<h4><?php echo get_the_title(); ?></h4>	
					   <h5 class="date-time <?php the_field('event_date'); ?>" data-check-today="<?php echo $todayChanged;?>">
						   <?php the_field('event_date'); ?>
						   </h5>
					   <h5 class="address">
					   <?php the_field('card_address');
					   ?>
					   </h5>
					   <div class="event-icon-wrap">
						    <div class="event-image">
							   <img src="<?php the_post_thumbnail_url(); ?> ">		
							   <span class="icon-ri8">Learn More</span>
						   </div>
						 <div class="event-icon">
							<?php 
$image = get_field('icon');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>	
						   </div>
					   </div>
					   
				   </div></a> <?php
				 } ?>

		
		</div>
		<?php }
			}
add_shortcode("getEventsPage", "events_page");


function events_query_page_test(){
// 	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$today = date('Ymd');
		$todayChanged=date('D, F j,Y');
		  $args1=array(        
        'post_type' => 'event',
		'posts_per_page' => '180',
		'meta_key'   => 'event_date',
		'orderby'	=> 'meta_value',
    	'order'     => 'ASC','meta_query' => array(
array(
'key' => 'event_date',
'value' => $today,
'type' => 'DATE',
'compare' => '>',
)
)
       );  
       $wp_query = new WP_Query($args1);
       if($wp_query->have_posts() ){ ?>
        <div id="events-page" class="events-page"> <?php 
         while($wp_query->have_posts()){
               $wp_query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" target="_blank">
				   <div class="event-content">
					   
					   <span class="sub-heading"><?php the_field('layout'); ?></span>
						<h4><?php echo get_the_title(); ?></h4>	
					   <h5 class="date-time <?php the_field('event_date'); ?>" data-check-today="<?php echo $todayChanged;?>">
						   <?php the_field('event_date'); ?>
						   </h5>
					   <h5 class="address">
					   <?php the_field('card_address');
					   ?>
					   </h5>
					   <div class="event-icon-wrap">
						    <div class="event-image">
							   <img src="<?php the_post_thumbnail_url(); ?> ">		
							   <span class="icon-ri8">Learn More</span>
						   </div>
						 <div class="event-icon">
							<?php 
$image = get_field('icon');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>	
						   </div>
					   </div>
					   
				   </div></a> <?php
				 } ?>

		
		</div>
		<?php }
			}
add_shortcode("getEventsPageTest", "events_query_page_test");


//News

function sinc_news_function(){

	$args = array( 
		'post_type' => 'post',
		'posts_per_page' => 3, 
		'orderby' => 'date', 
		'order' => 'desc',
	);
	$loop = new WP_Query( $args );
?>

<div class="news-section">
	<div class="row">
	<?php while ( $loop->have_posts() ) { ?>
		
	 	<?php $loop->the_post(); ?>
		<div class="col-md-4">
			<div class="tumb">
				 <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
			</div>
			<div class="post-date">
				<?php echo get_the_date(); ?>	
			</div>
			<div class="title">
				<h2><?php echo the_title(); ?></h2>
			</div>
			<div class="post-cta">
				<a href="<?php  the_permalink(); ?>">Learn More</a>
			</div>

		</div>

	<?php } 
	?>
	</div>
</div>
<?php
	wp_reset_query(); 
}
add_shortcode('get_news', 'sinc_news_function');

// Member of SINC Executive Advisory Council
function sinc_member_eac() {
    $labels = array(
        'name'                  => _x( 'Member of EAC', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Member of EAC', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Member of EAC', 'Admin Menu text', 'textdomain' ),
        'featured_image'        => _x( 'Member of EAC Image', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'textdomain' )
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'member' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'menu_icon' 		 => 'dashicons-groups'
    );
    register_post_type( 'member', $args );
	$labels = array(
		'name' => _x( 'Region', 'taxonomy general name' ),
		'singular_name' => _x( 'Region', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Region' ),
		'all_items' => __( 'All Regions' ),
		'parent_item' => __( 'Parent Region' ),
		'parent_item_colon' => __( 'Parent Region:' ),
		'edit_item' => __( 'Edit Region' ), 
		'update_item' => __( 'Update Region' ),
		'add_new_item' => __( 'Add New Region' ),
		'new_item_name' => __( 'New Region Name' ),
		'menu_name' => __( 'Region' ),
	);
	register_taxonomy('region',array('member'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'member' ),
	));
}
add_action( 'init', 'sinc_member_eac' );

function sinc_member_eac_function(){

	$args = array( 
		'post_type' => 'member',
		'posts_per_page' => -1, 
		'orderby' => 'date', 
		'order' => 'desc',
	);
	$loop = new WP_Query( $args );
?>

<div class="member-section">
	<div class="row">
	<?php while ( $loop->have_posts() ) { ?>
		
	 	<?php $loop->the_post(); ?>
		<div class="col-md-3">
			<img src="<?php echo get_the_post_thumbnail_url(); ?> ">
		</div>

	<?php } 
	?>
	</div>
</div>
<?php
	wp_reset_query(); 
}
add_shortcode('getMembers', 'sinc_member_eac_function');

function sinc_member_category_function(){

	$args = array(
    'post_type' => 'member',
    'tax_query' => array(
        array (
            'taxonomy' => 'region',
            'field' => 'slug',
            'terms' => 'Central',
        )
    ),
	'posts_per_page' => -1, 
	'orderby' => 'date', 
	'order' => 'desc',
);
	$loop = new WP_Query( $args );
?>

 <div class="member-archive-sec">
            <div class="row text-center">
    			<?php
    			/* Start the Loop */
    			 while ( $loop->have_posts() ) : $loop->the_post(); ?>
    			    <div class="col-md-3 col-6">
    			         <div class="tumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
                        </div>
    			        <div class="content">
                           <h3><?php the_title(); ?></h3>
                           <p><?php the_field('designation'); ?></p>
                           <h6><?php the_field('company_name'); ?></h6>
                        </div>
    			    </div>
                    <?php 
    			endwhile; ?>
            </div>
        </div>
<?php
	wp_reset_query(); 
}
add_shortcode('getCenteralMembers', 'sinc_member_category_function');

function sinc_member_canada_category_function(){

	$args = array(
    'post_type' => 'member',
    'tax_query' => array(
        array (
            'taxonomy' => 'region',
            'field' => 'slug',
            'terms' => 'canada',
        )
    ),
	'posts_per_page' => -1, 
	'orderby' => 'date', 
	'order' => 'desc',
);
	$loop = new WP_Query( $args );
?>

 <div class="member-archive-sec">
            <div class="row text-center">
    			<?php
    			/* Start the Loop */
    			 while ( $loop->have_posts() ) : $loop->the_post(); ?>
    			    <div class="col-md-3 col-6">
    			         <div class="tumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
                        </div>
    			        <div class="content">
                           <h3><?php the_title(); ?></h3>
                           <p><?php the_field('designation'); ?></p>
                           <h6><?php the_field('company_name'); ?></h6>
                        </div>
    			    </div>
                    <?php 
    			endwhile; ?>
            </div>
        </div>
<?php
	wp_reset_query(); 
}
add_shortcode('getCanadaMembers', 'sinc_member_canada_category_function');

function sinc_member_east_category_function(){

	$args = array(
    'post_type' => 'member',
    'tax_query' => array(
        array (
            'taxonomy' => 'region',
            'field' => 'slug',
            'terms' => 'east',
        )
    ),
	'posts_per_page' => -1, 
	'orderby' => 'date', 
	'order' => 'desc',
);
	$loop = new WP_Query( $args );
?>

 <div class="member-archive-sec">
            <div class="row text-center">
    			<?php
    			/* Start the Loop */
    			 while ( $loop->have_posts() ) : $loop->the_post(); ?>
    			    <div class="col-md-3 col-6">
    			         <div class="tumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
                        </div>
    			        <div class="content">
                           <h3><?php the_title(); ?></h3>
                           <p><?php the_field('designation'); ?></p>
                           <h6><?php the_field('company_name'); ?></h6>
                        </div>
    			    </div>
                    <?php 
    			endwhile; ?>
            </div>
        </div>
<?php
	wp_reset_query(); 
}
add_shortcode('getEastMembers', 'sinc_member_east_category_function');

function sinc_member_west_category_function(){

	$args = array(
    'post_type' => 'member',
    'tax_query' => array(
        array (
            'taxonomy' => 'region',
            'field' => 'slug',
            'terms' => 'West',
        )
    ),
	'posts_per_page' => -1, 
	'orderby' => 'date', 
	'order' => 'desc',
);
	$loop = new WP_Query( $args );
?>

 <div class="member-archive-sec">
            <div class="row text-center">
    			<?php
    			/* Start the Loop */
    			 while ( $loop->have_posts() ) : $loop->the_post(); ?>
    			    <div class="col-md-3 col-6">
    			         <div class="tumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
                        </div>
    			        <div class="content">
                           <h3><?php the_title(); ?></h3>
                           <p><?php the_field('designation'); ?></p>
                           <h6><?php the_field('company_name'); ?></h6>
                        </div>
    			    </div>
                    <?php 
    			endwhile; ?>
            </div>
        </div>
<?php
	wp_reset_query(); 
}
add_shortcode('getWestMembers', 'sinc_member_west_category_function');



// Member of SINC Executive Advisory Council
function sinc_industry_report() {
    $labels = array(
        'name'                  => _x( 'Industry Reports', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Industry Reports', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Industry Reports', 'Admin Menu text', 'textdomain' ),
        'featured_image'        => _x( 'Industry Reports Image', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'textdomain' )
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'resources/industry-reports' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'menu_icon' 		 => 'dashicons-media-document'
    );
    register_post_type( 'industry-report', $args );
}
add_action( 'init', 'sinc_industry_report' );


function industry_report(){
       $args = array(
           "post_type" => "industry-report",
           "posts_per_page" => -1,
		   'orderby' => 'date',
			'order' => 'asc',
       );
       $wp_query = new WP_Query($args);
       if($wp_query->have_posts() ){ ?>
        <div class="member-industry-report-sec">
            <div class="">
    			<?php
    			/* Start the Loop */
    			while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
				<div class="row">
					<div class="col-md-6">
    			         <div class="indust-tumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
                        </div>
    			    </div>
				 <div class="col-md-6 align-self-center">
    			         <div class="industry-content">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							 <p><?php the_excerpt(); ?></p>
							 <div class="blue-btn">
								 <a href="<?php the_permalink(); ?>">Download Now</a>
							 </div>
                           
                        </div>
    			    </div>
				</div>
    			    
				    			        
                    <?php 
    			endwhile; ?>
            </div>
        </div
		<?php }
			}
add_shortcode("getIndustryReport", "industry_report");


// Ondemand assets custom post type
function Ondemand_assets(){
       $args = array(
           "post_type" => "webinar",
           "posts_per_page" => -1,
		   'orderby' => 'date',
			'order' => 'desc',
       );
       $wp_query = new WP_Query($args);
       if($wp_query->have_posts() ){ ?>
			
       <div class="member-industry-report-sec">
            <div class="">
    			<?php
    			/* Start the Loop */
    			while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
				<div class="row">
					<div class="col-md-6">
    			         <div class="indust-tumb">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?> ">
                        </div>
    			    </div>
				 <div class="col-md-6 align-self-center">
    			         <div class="industry-content webinar-content">
							 <p><?php the_excerpt(); ?></p>
							 <div class="blue-btn">
								 <a href="<?php the_permalink(); ?>">Watch Now</a>
							 </div>
                           
                        </div>
    			    </div>
				</div>
				    			        
                      <?php 
    			endwhile; ?>
            </div>
        </div
		<?php }
			}
add_shortcode("getOndemandAssets", "Ondemand_assets");
   


// Webinars Custom Post Type
function webinars_custom_post() {
    $labels = array(
        'name'                  => _x( 'On-Demand Assets', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'On-Demand Assets', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'On-Demand Assets', 'Admin Menu text', 'textdomain' ),
        'featured_image'        => _x( 'On-Demand Assets Image', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'textdomain' )
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'resources/on-demand-assets' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'menu_icon' 		 => 'dashicons-media-document'
    );
    register_post_type( 'webinar', $args );
}
add_action( 'init', 'webinars_custom_post' );


// News & Press
function sinc_news_press() {
    $labels = array(
        'name'                  => _x( 'News & Press', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'News & Press', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'News & Press', 'Admin Menu text', 'textdomain' ),
        'featured_image'        => _x( 'News & Press Image', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'textdomain' )
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news-and-press' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'menu_icon' 		 => 'dashicons-media-document'
    );
    register_post_type( 'news-press', $args );
   $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 
 
// Now register the taxonomy
  register_taxonomy('news-press-tag',array('news-press'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
     'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
	$labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'popular_items' => __( 'Popular Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'separate_items_with_commas' => __( 'Separate Categories with commas' ),
    'add_or_remove_items' => __( 'Add or remove Categories' ),
    'choose_from_most_used' => __( 'Choose from the most used Categories' ),
    'menu_name' => __( 'Categories' ),
  ); 
 
// Now register the taxonomy
  register_taxonomy('news-press-category',array('news-press'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
     'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category' ),
  ));
}
add_action( 'init', 'sinc_news_press' );

// Case Study
function sinc_case_study() {
    $labels = array(
        'name'                  => _x( 'Case Studies', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Case Study', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Case Studies', 'Admin Menu text', 'textdomain' ),
        'featured_image'        => _x( 'Case Study Image', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'textdomain' )
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'resources/case-studies' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail'. 'revisions' ),
        'menu_icon' 		 => 'dashicons-groups'
    );
    register_post_type( 'case-study', $args );
	$labels = array(
		'name' => _x( 'Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Category' ),
		'all_items' => __( 'All Categories' ),
		'parent_item' => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item' => __( 'Edit Category' ), 
		'update_item' => __( 'Update Category' ),
		'add_new_item' => __( 'Add New Category' ),
		'new_item_name' => __( 'New Category Name' ),
		'menu_name' => __( 'Categories' ),
	);
	register_taxonomy('case-study-Category',array('case-study'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'category' ),
	));
}
add_action( 'init', 'sinc_case_study' );


function sinc_case_study_function(){

	$args = array( 
		'post_type' => 'case-study',
		'posts_per_page' => -1, 
		'orderby' => 'date', 
		'order' => 'desc',
		 'meta_key'		=> 'case_study_type',
			'meta_value'	=> 'Parent',
	);
	$loop = new WP_Query( $args );
?>

<div class="case-study-section">
	<?php while ( $loop->have_posts() ) { ?>
		<div class="row">
			<?php $loop->the_post(); ?>
			<div class="col-md-6">
				<img src="<?php echo get_the_post_thumbnail_url(); ?> ">
			</div>
			<div class="col-md-6">
				<h3>
					<?php the_title(); ?>
				</h3>
				<?php the_content(); ?>
				<a href="<?php the_permalink(); ?>">Register</a>
			</div>
		</div>
	<?php } 
	?>

</div>
<?php
	wp_reset_query(); 
}
add_shortcode('getCase', 'sinc_case_study_function');

// Careers
function sinc_careers() {
    $labels = array(
        'name'                  => _x( 'Careers', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Career', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Careers', 'Admin Menu text', 'textdomain' ),
        'featured_image'        => _x( 'Career Image', 'Overrides the "Featured Image" phrase for this post type. Added in 4.3', 'textdomain' )
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'about-us/careers' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'revisions'),
        'menu_icon' 		 => 'dashicons-welcome-learn-more'
    );
    register_post_type( 'careers', $args );
}
add_action( 'init', 'sinc_careers' );
add_action( 'init', 'create_career_hierarchical_taxonomy', 0 );
function create_career_hierarchical_taxonomy() {
  $labels = array(
    'name' => _x( 'Departments', 'taxonomy general name' ),
    'singular_name' => _x( 'Department', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Departments' ),
    'all_items' => __( 'All Department' ),
    'parent_item' => __( 'Parent Department' ),
    'parent_item_colon' => __( 'Parent Department:' ),
    'edit_item' => __( 'Edit Department' ),
    'update_item' => __( 'Update Department' ),
    'add_new_item' => __( 'Add New Department' ),
    'new_item_name' => __( 'New Department Name' ),
    'menu_name' => __( 'Departments' ),
  );
// Now register the taxonomy
  register_taxonomy('career-departments',array('careers'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'department' ),
  ));
	$labels = array(
    'name' => _x( 'Locations', 'taxonomy general name' ),
    'singular_name' => _x( 'Location', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Locations' ),
    'all_items' => __( 'All Location' ),
    'parent_item' => __( 'Parent Location' ),
    'parent_item_colon' => __( 'Parent Location:' ),
    'edit_item' => __( 'Edit Location' ),
    'update_item' => __( 'Update Location' ),
    'add_new_item' => __( 'Add New Location' ),
    'new_item_name' => __( 'New Location Name' ),
    'menu_name' => __( 'Locations' ),
  );
// Now register the taxonomy
  register_taxonomy('career-locations',array('careers'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location' ),
  ));
$labels = array(
    'name' => _x( 'Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Type' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ),
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  );
// Now register the taxonomy
  register_taxonomy('career-Types',array('careers'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'types' ),
  ));
}
function our_career(){
       $args = array(
           "post_type" => "careers",
           "posts_per_page" => -1,
		   'orderby' => 'date',
			'order' => 'asc',
       );
       $wp_query = new WP_Query($args);
       if($wp_query->have_posts() ){ ?>
        <div id="careers" class="careers">
			<?php  while($wp_query->have_posts()){
               $wp_query->the_post(); ?>
					 <div class="career-row row">
						 <div class="col-md-6">							 
							 <div class="career-tag">
								 <?php the_terms( $post->ID, 'career-departments', ' ', ' ' ); ?>
							 </div>
							 <h2>
								 <?php the_title(); ?>
							 </h2>
							 <div class="career-location">
 									<?php the_terms( $post->ID, 'career-locations', ' ', ' ' ); ?>
							 </div>
							
						</div>
						 <div class="col-md-3">
							 <div class="jop-type">
								  <?php the_terms( $post->ID, 'career-Types', ' ', ' ' ); ?>
							 </div>
						 </div>
						 <div class="col-md-3">
							 <div class="career-content">
							 <?php the_excerpt(); ?>
							 </div>
								
							 <div class="career-btn">
								 <a href="<?php the_permalink(); ?>">Learn More</a>
							 </div>
						</div>
					</div>	
				   <?php
				 } ?>
		</div>
		<?php }
			}
add_shortcode("getCareers", "our_career");
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
// define the edit_tags_per_page callback 
function filter_edit_tags_per_page( $tags_per_page ) { 
    // make filter magic happen here... 
    return -1; 
}; 
         
// add the filter 
add_filter( 'edit_tags_per_page', 'filter_edit_tags_per_page', 10, 1 ); 
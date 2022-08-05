<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="/wp-content/themes/sinc/inc/assets/css/owl.carousel.min.css">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VZD54MHQNK"></script> 
<script> 
  window.dataLayer = window.dataLayer || []; 
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date()); 
  
  gtag('config', 'G-VZD54MHQNK'); 
</script>
</head>

<body <?php body_class(); ?>>

<?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-center',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
				<div class="blue-btn">
					<a href="/contact/">Contact Us</a>
				</div>
            </nav>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo esc_attr( get_theme_mod( 'header_banner_title_setting' ) );
                    }else{
                        echo 'WordPress + Bootstrap';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo esc_attr( get_theme_mod( 'header_banner_tagline_setting' ) );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
	<?php if(!is_front_page()){  ?>
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/" style="background: url('/wp-content/uploads/2022/05/Group-15204.svg')">
				<div class="container">
					<h1><?php 
									   if ( is_singular('page') ) {
										   echo get_the_title();
									   }
									   elseif ( is_home() ) {
										   echo "Blog";
									   }
	 									elseif ( is_category() ) {
										   echo "Blog";
									   }
										elseif (is_post_type_archive('member')) {
											echo "Executive Advisory Council";
										}
										elseif (is_post_type_archive('industry-report')) {
											echo "Industry Reports";
										}
										elseif (is_post_type_archive('webinar')) {
											echo "On-Demand Assets";
										}
										elseif (is_post_type_archive('news-press')) {
											echo "News & Press";
										}
										elseif (is_tax('region')) {
											echo "Executive Advisory Council";
										}
									  elseif ( is_singular('industry-report') ) {
												echo "Industry Reports";
										}
									   elseif ( is_singular('post') ) {
										   echo "Blog";
									   }
	elseif ( is_singular('webinar') ) {
										   echo "On Demand Assets";
									   }
									    elseif ( is_singular('news-press') ) {
										   echo "News & Press";
									   } 
										elseif ( is_singular('case-study') ) {
												echo "Case Studies";
										}
									   elseif ( is_singular('careers') ) {
										   echo "Careers";
									   }
									   else {
										   the_title(); 
									   }
						?>
					</h1>
					<?php if(function_exists('bcn_display')) {
							bcn_display(); } ?>
				</div>
			</div>
			<?php } ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>
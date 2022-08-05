<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
	<section class="col-sm-12 col-md-6">
		<img src="/wp-content/uploads/2022/05/Group-14633-1.svg">
	</section>
	<section class="col-sm-12 col-md-6 align-self-center">
			<section class="error-404 not-found">
				<h2>
					<span>404 Error</span> Looks like you're lost
				</h2>
				<p>
					The Link you followed probably broken, or the page has been removed
				</p>
				<div class="blue-btn">
					<a href="<?php echo get_home_url(); ?>">Back To Homepage</a>
				</div>
				
			</section><!-- .error-404 -->

	</section><!-- #primary -->

<?php
get_footer();

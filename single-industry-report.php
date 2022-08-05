<?php
/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package WP_Bootstrap_Starter
	 */

get_header(); ?>

<section id="primary" class="content-area col-sm-12 col-md-12">
	<div class="single-content">
				<?php the_content(); ?> 
	</div>			

		</section>


<?php
get_footer();
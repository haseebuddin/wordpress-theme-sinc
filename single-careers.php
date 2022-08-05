<?php
/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package WP_Bootstrap_Starter
	 */

get_header(); ?>
	<div class="event-section row">
		

    <section class="content-area col-sm-12 col-lg-6 ">
		<div class="single-career-section">
			<div class="single-content">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?> 
			</div>
		</div>
	</section>
	<section class="content-area col-sm-12 col-lg-6">
		<div class="single-case-study-form">
			<?php echo do_shortcode('[contact-form-7 id="652" title="Career Form"]'); ?>
		</div>
	</section>
   </div>
<?php
get_footer();

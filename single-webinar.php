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

<section class="content-area col-sm-12 col-md-12">
		<div class="company-info">
			<div class="company-name">
				<h4><?php the_field('company_title')?></h4>
			</div>
			<div class="company-logo">
				<?php 
				$image = get_field('company_logo');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
			</div>
			<div class="company-paragraph">
				<h4><?php the_field('company_paragraph')?></h4>
			</div>
		</div>
</section>
<?php
get_footer();
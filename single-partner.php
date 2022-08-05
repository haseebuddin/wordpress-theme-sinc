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
</div>
</div>
<div class="stragetic-sec">
	<section class="container">
			<?php

			$args = array(
				"post_type" => "partner",
				"posts_per_page" => -1,    
				"order" => "DESC",
				'orderby' => 'rand',
				'post__not_in'=>array(get_the_ID())
			) ;
		$second_query = new WP_Query($args);
			?>

			<div id="relatedposts">
				<h2 class="main-heading">Strategic Partners</h2>
				<div class="stragetic-slider owl-carousel owl-theme" id="related-partner">

					<?php if($second_query->have_posts()) {
	while ($second_query->have_posts() ) : $second_query->the_post(); ?>
					<div class="relate-inner">
						<div class="relatedthumb">
							<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<div class="relatedcontent">
							<h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">Learn More <img src="/wp-content/uploads/2022/05/Icon-feather-arrow-down-left-1.svg"></a>
						</div>
					</div>
					<?php endwhile; wp_reset_query();
} ?>
				</div>
			</div>
</section>
</div>

<?php
get_footer();
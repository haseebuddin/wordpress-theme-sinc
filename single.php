<?php
/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package WP_Bootstrap_Starter
	 */

get_header(); ?>
</div>
<div class="row justify-content-center">
<section id="primary" class="content-area col-sm-12 col-lg-8">
	<div id="main" class="site-main" role="main">
		<div class="single-blog-section">
			<div class="single-img">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>"> 
			</div>
			<?php if(get_the_category()){ ?>
			<div class="category">
				<?php echo the_category(); ?>
			</div>
			<div class="post-author">
				<?php  the_author(); ?>
			</div>
			<?php }?>
			<div class="date">
				<p>Date <span><?php echo get_the_date('F d, Y'); ?></span></p>
			</div>
			<div class="single-title">
				<h2><?php echo get_the_title(); ?></h2>
			</div>
			
			<div class="single-content">
				<?php the_content(); ?> 
			</div>
			<div class="single-tags">
				<p>Tags:</p>
			    <?php if( has_tag()) { ?>
		<div class="single_tags clearfix">
            <div class="tags_text">
				<?php 
				if ((isset($qode_options_proya['tags_border_style']) && $qode_options_proya['tags_border_style'] !== '') || (isset($qode_options_proya['tags_background_color']) && $qode_options_proya['tags_background_color'] !== '')){
					the_tags();
				}
				else{
					the_tags();
				}
				?>
			</div>
		</div>
				
	<?php } ?>
				
			</div>
			<div class="single-share">
				<p>Share:</p>
				<?php echo do_shortcode('[addthis tool="addthis_inline_share_toolbox_f4ah"]	'); ?>
			</div>
		</div>
					<section class="nav-section col-md-12">
				<div class="prev-posts pull-left">
				<?php
				$prev_post = get_previous_post();
				if($prev_post) {
				   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
				   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="nav-style"><h2><span>Previous </span><span class="d-block">'. $prev_title . '</span></h2></a>' . "\n";
								}
				?>
				</div>

				<div class="next-posts pull-right">
				<?php
				$next_post = get_next_post();
				if($next_post) {
				   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
				   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="nav-style"><h2><span>Next </span><span class="d-block">'. $next_title .'</span></h2></a>' . "\n";
								}
				?>
				</div>
				
			</section>

	</div><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();

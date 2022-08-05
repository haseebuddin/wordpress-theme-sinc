<?php
/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package WP_Bootstrap_Starter
	 */

get_header(); ?>

    <section class="content-area col-sm-12 col-lg-6">
		<div class="single-case-study-section">
			<div class="single-title">
				<h2><?php echo get_the_title(); ?></h2>
			</div>
			<div class="single-content">
				<?php the_content(); ?> 
			</div>
		</div>
	</section>
	<section class="content-area col-sm-12 col-lg-6">
		<div class="single-case-study-form">
			<div id="case-study-form">
				<?php echo do_shortcode('[contact-form-7 id="532" title="Case Study Form"]'); ?>
			</div>
		</div>
	</section>
    <section class="content-area col-sm-12 col-lg-12">
        <div class="related-articles case-study-related">
			<?php
			$terms = get_the_terms( get_the_ID() , 'case-study-Category');
			$term_ids = wp_list_pluck($terms,'term_id');	
			$second_query = new WP_Query( array(
				'post_type' => 'case-study',
				'tax_query' => array(
					array(
						'taxonomy' => 'case-study-Category',
						'field' => 'id',
						'terms' => $term_ids,
						'operator'=> 'IN' //Or 'AND' or 'NOT IN'
					)),
				'posts_per_page' => -1,
				'orderby' => 'rand',
				'post__not_in'=>array(get_the_ID()),
			) );
			?>

					<?php if($second_query->have_posts()) {
	while ($second_query->have_posts() ) : $second_query->the_post(); ?>
					<div class="row">
					    <div class="col-md-6">
			                <div class="relatedthumb">
    							<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
    								<?php the_post_thumbnail(); ?>
    							</a>
    						</div>
        			    </div>
        			    <div class="col-md-6 align-self-center">
        			        <div class="date">
								<p>
									Release Date: <?php echo get_the_date('M Y'); ?>
								</p>
							</div>
							<div class="relatedcontent">
<!--     							<h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3> -->
								<?php the_content(); ?>
    							
    						</div>
							<div class="blue-btn mt-5">
									<a href="#case-study-form">Download Now</a>
								</div>
        			    </div>
					</div>
					<?php endwhile; 
	wp_reset_query();
} ?>
		</div>
		<?php if(get_field('case_study_type') == Parent){ ?>

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
			
<?php }?>
    </section>

<?php
get_footer();

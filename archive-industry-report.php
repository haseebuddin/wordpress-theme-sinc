<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		

		<?php
		if ( have_posts() ) : ?>

        <div class="member-industry-report-sec">
            <div class="">
    			<?php
    			/* Start the Loop */
    			while ( have_posts() ) : the_post();?>
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
    		<?php endif; ?>

	</section><!-- #primary -->

<?php 
get_footer();
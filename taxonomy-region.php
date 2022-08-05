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

        <div class="member-archive-sec">
            <div class="row text-center">
    			<?php
    			/* Start the Loop */
    			while ( have_posts() ) : the_post();?>
    			    <div class="col-md-3">
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
    		<?php endif; ?>

	</section><!-- #primary -->

<?php 
get_footer();
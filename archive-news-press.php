<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
		<div id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'=>'news-press', // Your post type name
    'posts_per_page' => 5,
    'paged' => $paged,
);

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();

?>
<div class="post-wrapper">
					<div class="post-thumb">
						<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); ?>
						</a>
					</div>
					<div class="post-category">
							<?php the_terms( $post->ID, 'news-press-category', ' ', ' ' ); ?>
					</div>
					<div class="post-date">
						<?php echo get_the_date(); ?>
					</div>					
					<div class="post-title">
						<h2>
							<?php the_title(); ?>
						</h2>
					</div>
					<div class="post-excerpt">
						<?php the_excerpt(); ?>
					</div>
					<div class="post-anchor">
						<a href="<?php the_permalink(); ?>">Read More <img src="/wp-content/uploads/2022/05/Icon-feather-arrow-down-left-1.svg"></a>
					</div>
				</div>
  <?php  endwhile;
}
wp_reset_postdata();
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar(); ?>
<div class="navigation">
	<ol class="wp-paginate font-inherit">
		<li>
			<?php $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('<'),
            'next_text'    => __('>'),
        ));
    }  ?>
		</li>
	</ol>
</div>
<?php get_footer();

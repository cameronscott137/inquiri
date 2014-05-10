<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php get_header(); ?>
	</div><!-- end row -->
</div><!-- end container -->

<div class="content-archive container-fluid">
	<!-- Aside -->
	<aside class="cover cover-home img-loaded" data-load-img=".cover-img"><div class="cover-img" style="background-image: url('http://localhost:8888/medium/wp-content/uploads/2013/09/DeepInTheForest_cre8art4life_JulieGeiger.jpg')"></div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("cover") ) : ?>
			<?php endif; ?>
	</aside>

<section class="entries">

<!-- The Loop -->
	<?php if ( have_posts() ): ?>
	<header class="section-header">
				<a class="more-featured"><span class="featured-heading">Search Results for '<?php echo get_search_query(); ?>'</span><span class="featured-link"><?php get_search_form(); ?></span></a>
	</header>
	<?php $my_query = new WP_Query('posts_per_page=5'); ?>
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<section class="row-fluid">
				<article class="span12">
					<div class="entry-meta">
						<div class="author-image"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 62 ); ?></a></div>
						<h1 class="blog-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<h2 class="attribution"><?php the_author_posts_link(); ?> writes about <?php the_category(' '); ?>  &#8226; <?php the_date(); ?></time></h2>
					</div>
					<?php the_excerpt(); ?>
				</article>
			</section>
			<hr class="archive-excerpt">
		<?php endwhile; ?>
	</section>
	<?php else: ?>
	<h2>No posts to display</h2>
	<?php endif; ?>
</div>

		</div><!-- /row-fluid -->
		</div>
	<?php wp_footer(); ?>
	</body>
</html>
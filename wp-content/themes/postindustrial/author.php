<?php
/**
 * The Template for displaying all single posts
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
<section class="entries">
<!-- Featured Tag -->
		<header class="section-header">
				<div class="more-featured"><span class="featured-heading">All posts by <?php echo get_the_author_meta('nickname');?></span><span class="featured-link"><?php get_search_form(); ?></span></div>
		</header>
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : the_post(); ?>
				<section class="row-fluid featured">
	  				<article class="span12 post post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_post_thumbnail('med-archive'); ?>
						<div class="entry-preview title">
								<div class="header-title-group">
									<h1 class="blog-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								</div>
								<div class="header-meta-group">
									<h2 class="entry-author"><?php the_author_posts_link(); ?>
									</h2>
									<h3 class="excerpt"><?php echo get_the_excerpt();?></h3>
									<h3 class="entry-meta"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time> &#8226; <?php the_category(' &amp '); ?></h2>
								</div>
						</div>
						<div class="small-header-meta-group">
								<h2 class="entry-author"><?php the_author_posts_link(); ?>
								</h2>
								<h3 class="entry-meta"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time> &#8226; <?php the_category(' &amp '); ?></h2>
						</div>
					</article>
				</section>
	<?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>
<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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

<div class="content container-fluid">
  <div class="row-fluid">
  <div class="span8">
	<?php if ( have_posts() ): ?>
	<section class="entry-content">
	<ul class="entries">
		<?php while ( have_posts() ) : the_post(); ?>
			<li class="entry">
				<article>
					<div class="entry-meta">
						<h2 class="blog-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<h2 class="category">A post about <?php the_category(' '); ?>  &#8226;  <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time></h2>
					</div>
					<?php the_content(); ?>
					<footer class="entry-meta-footer">
						<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
					</footer>
				</article>
			</li>
	<?php endwhile; ?>
	</ul>
	<?php else: ?>
	<h2>No posts to display</h2>
	<?php endif; ?>
</div>
<?php get_footer(); ?>

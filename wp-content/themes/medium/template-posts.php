<?php
/*
*
* Template Name: Posts
*
 */?>

 <?php get_header(); ?>
	</div><!-- end row -->
</div><!-- end container -->

<div class="content-archive container-fluid">
<section class="entries">
<!-- The Loop -->
	<?php if ( have_posts() ): ?>
	<header class="section-header">
		<a class="more-featured"><span class="featured-heading">All Posts</span><span class="featured-link"><?php get_search_form(); ?></span></a>
	</header>
	<?php $my_query = new WP_Query('posts_per_page=5'); ?>
	<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<section class="row-fluid">
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
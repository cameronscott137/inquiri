<?php get_header(); ?>
	</div><!-- end row -->
</div><!-- end container -->

<div class="content-archive container-fluid">
	<section class="entries">
	<!-- Featured Tag 
		<?php $my_query = new WP_Query('tag=featured&posts_per_page=1'); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<header class="section-header">
			<a class="more-featured" href="<?php echo get_tag_link('5'); ?>"><span class="featured-heading">Featured Post</span><span class="featured-link">More <i class="icon-angle-right"></i></span></a>
		</header>
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
		<?php endwhile; ?>-->

	<!-- The Loop -->
		<?php if ( have_posts() ): ?>
		<header class="section-header" itemscope itemtype="http://schema.org/Blog">
			<a class="more-featured" href="<?php bloginfo('url'); ?>/posts/"><span class="featured-heading">Newest Posts</span><span class="featured-link">More <i class="icon-angle-right"></i></span></a>
		</header>
		<?php $my_query = new WP_Query( array(
		'posts_per_page' => '10',
		'tag__not_in' => array(
			'6')
			)
		); ?>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<section class="row-fluid posts">
	  				<article class="span12 post post-<?php the_ID(); ?>" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
						<?php the_post_thumbnail('med-archive'); ?>
						<div class="entry-preview title">
								<div class="header-title-group">
									<h1 class="blog-title" itemprop="headline"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
								</div>
								<div class="header-meta-group">
									<h2 class="entry-author" itemprop="author"><?php the_author_posts_link(); ?></h2>
									<h3 class="excerpt" itemprop="description"><?php echo get_the_excerpt();?></h3>
									<h3 class="entry-meta"><time datetime="<?php the_time( 'Y-m-d' ); ?>" itemprop="datePublished" pubdate><?php the_time('F j, Y'); ?></time> &#8226; <?php the_category(' &amp; '); ?></h3>
								</div>
						</div>
						<div class="small-header-meta-group">
								<h2 class="entry-author" itemprop="author"><?php the_author_posts_link(); ?>
								</h2>
								<h3 class="entry-meta"><time datetime="<?php the_time( 'Y-m-d' ); ?>" itemprop="datePublished" pubdate><?php the_time('F j, Y'); ?></time> &#8226; <?php the_category(' &amp; '); ?></h3>
						</div>
					</article>
				</section>
			<?php endwhile; ?>
		</section>
		<?php else: ?>
		<h2>No posts to display</h2>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>
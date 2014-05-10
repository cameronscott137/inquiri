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
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  			<header class="entry-header" itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting">
  				<div class="header-title-group">
					<h1 class="blog-title" itemprop="headline"><?php the_title(); ?></h1>
					<h2 class="entry-author" itemprop="author"><?php the_author_posts_link(); ?></h2>
					<h3 class="excerpt"itemprop="description"><?php echo get_the_excerpt();?></h3>
					<h3 class="entry-meta"><time datetime="<?php the_time( 'Y-m-d' ); ?>"  itemprop="datePublished" pubdate><?php the_time('F j, Y'); ?></time> &#8226; <?php the_category(' &amp '); ?></h3>
				</div>
			</header>
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
			   echo "<?php echo $image_url; ?>";
			   echo "<div class='featured-image' style='background-image: url($image_url[0])' itemprop='image'>";
			 ?>
			<?php endif; ?>
		</div>
	<div class="content-single container-fluid">
  		<article class="entry row-fluid post-<?php the_ID(); ?>">
  			<aside class="entry-meta">
  					<div class="author-image" itemprop="image"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 124 ); ?></a></div>
  					<h2 class="author-name" itemprop="author"><?php the_author_posts_link(); ?></h2>
					<p class="author-description" itemprop="description"><?php the_author_meta( 'description'); ?></p>
					<hr class="author-break">
					<p class="author-email"><a href="mailto:<?php the_author_meta( 'email'); ?>">Email <?php the_author_meta( 'first_name' ) ?></a></p>
					<?php if(get_the_author_meta('twitter') ): ?>
					<p class="author-twitter"><a href="http://www.twitter.com/<?php the_author_meta( 'twitter'); ?>" target="_blank">@<?php the_author_meta( 'twitter'); ?></a></p>
					<?php else:
					endif; ?>
					<?php edit_post_link( 'Edit This Post', ''); ?>
			</aside>
  			<section class="entry-content span12" itemprop="text">
	  			<aside class="sharing sticky">
					<a class="comments" href="#disqus_thread"><?php comments_number( "0", "1", "%" ); ?></a>
					<a onclick="MM_openBrWindow('http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(wp_get_shortlink()); ?>+<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>','Share Inquiri on Facebook','scrollbars=yes,width=650,height=500'); return false;" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(wp_get_shortlink()); ?>+<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" target="_blank"><i class="icon-facebook"></i></a>
					<a onclick="MM_openBrWindow('http://twitter.com/intent/tweet?text=<?php echo urlencode("Via @inquiri_ -"); ?>+<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>%3A%20<?php echo urlencode(wp_get_shortlink()); ?>','Share Inquiri on Twitter','scrollbars=yes,width=650,height=500'); return false;" href="http://twitter.com/home?status=<?php echo urlencode("Via @builtinpgh -"); ?>+<?php echo urlencode(get_the_title()); ?>%3A%20<?php echo urlencode(wp_get_shortlink()); ?>" target="_blank"><i class="icon-twitter"></i></a>
					<a onclick="MM_openBrWindow('http://www.linkedin.com/shareArticle?mini=true&url=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>&source= <?php bloginfo('url'); ?>	','google','scrollbars=yes,width=650,height=500'); return false;" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(wp_get_shortlink()); ?>&title=<?php print(urlencode(the_title())); ?>&source= <?php bloginfo('url'); ?>" target="_blank"><i class="icon-linkedin"></i></a>
				</aside>
					<?php the_content(); ?>
				<footer class="entry-meta">
  					<div class="author-image" itemprop="image"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 124 ); ?></a></div>
  					<h2 class="author-name" itemprop="author"><?php the_author_posts_link(); ?></h2>
					<p class="author-description" itemprop="description"><?php the_author_meta( 'description'); ?></p>
					<span class="author-email"><a href="mailto:<?php the_author_meta( 'email'); ?>">Email <?php the_author_meta( 'first_name' ) ?></a></span>
					<?php if(get_the_author_meta('twitter') ): ?>
						// <span class="author-twitter"><a href="http://www.twitter.com/<?php the_author_meta( 'twitter'); ?>" target="_blank">@<?php the_author_meta( 'twitter'); ?></a></span>
						<?php else:
					endif; ?>
				</footer>
			</section>
		</article>
	</div>
<?php comments_template( '', true ); ?>
<?php endwhile; ?>

<script type="text/javascript">
	function MM_openBrWindow(theURL,winName,features) { //v2.0
	  window.open(theURL,winName,features);
	}
</script>

<footer class="post-navigation row-fluid">
		<!-- get previous post title -->
		<div class="span4 previous">
			<?php $prev_post = get_adjacent_post(false, '', true);
			if(!empty($prev_post)) {
			echo '<h4 class="post-navigation-title">Previous Article</h4>
			<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">' . $prev_post->post_title . '</a>'; } ?>
		</div>
		<div class="span4 middle">
			<h4 class="post-navigation-title">Top</h4>
			<a href="#top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top-arrow.svg" alt="back to the top"/></a>
		</div>
		<div class="span4 next">
				<?php $next_post = get_adjacent_post(false, '', false);
				if(!empty($next_post)) {
				echo '<h4 class="post-navigation-title">Next Article</h4>
				<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $next_post->post_title . '</a>'; } ?>
		</div>
				<!-- <span class="post-links prev-post"><?php previous_post_link('%link', 'Previous post &larr;');?></span>
				<span class="post-links next-post"><?php next_post_link('%link', '&rarr; Next post');?></span> -->
</footer>

<?php get_footer(); ?>
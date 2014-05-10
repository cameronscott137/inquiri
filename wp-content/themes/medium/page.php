<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
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
  			<header class="entry-header">
  					<!-- h2 class="category">A post about <?php the_category(' '); ?>  &#8226; </h2> -->
					<h1 class="blog-title"><?php the_title(); ?></h1>
			</header>
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
			   echo "<?php echo $image_url; ?>";
			   echo "<div class='featured-image' style='background-image: url($image_url[0])'>";
			 ?>
			<?php endif; ?>
		</div>
	<div class="content-single container-fluid">
  		<article class="entry row-fluid post-<?php the_ID(); ?>" <?php post_class(); ?>>
  			<section class="entry-content span12">
					<?php the_content(); ?>
			
			</section>
		</article>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>
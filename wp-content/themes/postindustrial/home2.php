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
	<div class="row-fluid">
		<div class="hero-unit">
			<img class="hero" src="<?php echo get_template_directory_uri();?>/images/hero.jpg"/>
            <h1>Engineering Better Players</h1>
        </div>
    </div>
	
    <div class="row-fluid home-widgets">
        <div class="span4">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-page-left") ) : ?>
			<?php endif; ?>
		</div>
		<div class="span4">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-page-center") ) : ?>
			<?php endif; ?>
		</div>
		<div class="span4">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("home-page-right") ) : ?>
			<?php endif; ?>
		</div>
	</div> <!-- end .home-widgets -->

	  <div class="row-fluid quote">
        <div class="span12">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("testimonials") ) : ?>
			<?php endif; ?>
		</div>
	</div> <!-- end .home-widgets -->

	<div class="row-fluid footer-widgets">
    	<div class="span6">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-left") ) : ?>
			<?php endif; ?>
		</div>
		<div class="span6">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-right") ) : ?>
			<?php endif; ?>
		</div>
	</div> <!-- end .footer-widgets -->

<?php get_footer(); ?>
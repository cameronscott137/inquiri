<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files

	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	/*
	Custom Login and Admin
	======================================================================================================================== */
		function rustbuilt_my_login_logo() { ?>
		    <style type="text/css">
		        body.login div#login{
		        	padding: 100px 0 0;
		        }
		        body.login div#login h1 a {
		        }
		    </style>
		<?php }

		add_action( 'login_enqueue_scripts', 'rustbuilt_my_login_logo' );

		function rustbuilt_my_login_logo_url() {
			    return get_bloginfo( 'url' );
			}
			add_filter( 'login_headerurl', 'rustbuilt_my_login_logo_url' );

			function rustbuilt_my_login_logo_url_title() {
			    return 'Your Site Name and Info';
			}
			add_filter( 'login_headertitle', 'rustbuilt_my_login_logo_url_title' );
	/*
	======================================================================================================================== */

	/* Add shortcode support in widgets */
		add_filter('widget_text', 'do_shortcode');

		/* Required WP Theme Support */
		add_theme_support( 'automatic-feed-links' );

		/* Add "Post Thumbnails" Support */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size(200, 150); // default Post Thumbnail dimensions   
		the_post_thumbnail();                  // without parameter -> 'post-thumbnail'
		the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
		the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
		the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
		the_post_thumbnail('full');            // Full resolution (original size uploaded)
		add_image_size( 'med-custom', 1200, 500, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
		add_image_size( 'med-archive', 1140, 600, true ); // 220 pixels wide by 180 pixels tall, hard crop mode

		/* Menus */
		add_theme_support('menu');
		register_nav_menus(array('primary' => 'Primary Navigation'));
		register_nav_menus(array('mobile' => 'Mobile'));

		/* Widgets */
		function medium_widgets_init() {

			register_sidebar( array(
				'name' => __( 'Cover', 'medium' ),
				'id' => 'cover',
				'description' => __( 'The text that appears overlaid on home page cover', 'medium' ),
				'before_widget' => '<section class="cover-body">',
				'after_widget' => "</section>",
				'before_title' => '<h1 class="widget-title">',
				'after_title' => '</h1>',
			) );

			register_sidebar( array(
				'name' => __( 'Posts', 'medium' ),
				'id' => 'posts',
				'description' => __( 'The text that appears overlaid on posts page cover', 'medium' ),
				'before_widget' => '<section class="cover-body">',
				'after_widget' => "</section>",
				'before_title' => '<h1 class="widget-title">',
				'after_title' => '</h1>',
			) );

		    register_sidebar( array(
				'name' => __( 'Footer Left', 'medium' ),
				'id' => 'footer-left',
				'description' => __( 'The text that appears above the submission forms', 'medium' ),
				'before_widget' => '<section class="archive-desc">',
				'after_widget' => "</section>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			) );

			register_sidebar( array(
				'name' => __( 'Footer Right', 'medium' ),
				'id' => 'footer-right',
				'description' => __( 'The text that appears above the resources archive page', 'medium' ),
				'before_widget' => '<section class="archive-desc">',
				'after_widget' => "</section>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'medium_widgets_init' );
	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	function rustbuilt_new_excerpt_more($more) {
		       global $post;
		       if ($post->post_type == 'post')
					return '... <a class="read-more" href="'. get_permalink($post->ID) . '">Read More »</a>';
			   else
					return '...<a class="read-more" href="' . get_post_type() . '/#' . basename(get_permalink()) . '">Read More »</a></li>';
		}
	add_filter('excerpt_more', 'rustbuilt_new_excerpt_more');

	function rustbuilt_custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'rustbuilt_custom_excerpt_length', 999 );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		/*wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' ); */

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.min.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );

       /* wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', '', '', 'screen' );
        wp_enqueue_style( 'bootstrap' );*/

		wp_register_script( 'waypoints', get_template_directory_uri().'/js/waypoints.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'waypoints' );

		wp_register_script( 'scrollto', get_template_directory_uri().'/js/jquery.scrollTo-1.4.3.1-min.js', array( 'jquery' ) );
		wp_enqueue_script( 'scrollto' );

		wp_register_script( 'localScroll', get_template_directory_uri().'/js/jquery.localscroll-1.2.7-min.js', array( 'jquery' ) );
		wp_enqueue_script( 'localScroll' );

        /*wp_register_style( 'bootstrap-responsive', get_template_directory_uri().'/css/bootstrap-responsive.css', '', '', 'screen' );
        wp_enqueue_style( 'bootstrap-responsive' ); */
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}

	$jt_use_minified_files = true;
 
	add_filter( 'stylesheet_uri', 'child_stylesheet_uri', 10, 2 );
	function child_stylesheet_uri($stylesheet_uri, $stylesheet_dir_uri) {
	 
	
	global $jt_use_minified_files;
 
	if ( true == $jt_use_minified_files ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/style.min.css';
	}
 
        // return and append version number to bust cache
	return $stylesheet_uri . '?v=' . filemtime( get_stylesheet_directory() . '/style.css');
	}
	 
	add_action( 'wp_enqueue_scripts', 'child_load_scripts' );
	function child_load_scripts() {
	 
		global $jt_use_minified_files;
	 
		if ( true == $jt_use_minified_files ) {
			wp_enqueue_script('site-min-js', get_template_directory_uri() . '/js/site.min.js', array(), false, true);
		} else {
					wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
			wp_enqueue_script( 'site' );
	}
}


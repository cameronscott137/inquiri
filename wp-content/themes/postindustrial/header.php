<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>
		<!-- Fonts -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7468432/741462/css/fonts.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<!-- GA -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-37655270-4', 'inquiri.com');
		  ga('send', 'pageview');

		</script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<?php if (is_home() ) { ?> 
	  	<header class="home-site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	  		<a href="<?php bloginfo('url'); ?>"><span class="site-mark" itemprop="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inquiri_mark_lg.svg" alt="Inquiri Logo"/></span><span itemprop="headline">inquiri</span></a>
				<h2 class="boilerplate-site-description" itemprop="description">An outlet to investigate and exchange ideas affecting young Mid-Atlantic startups.</h2>
				<nav class="site-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				</nav>
		</header>
	<?php } else {  ?>

<div class="container-fluid" id="top">
	<div class="row-fluid">
	 <header class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
  		<a href="<?php bloginfo('url'); ?>"> <h1 class="site-title" itemprop="headline">
	  			<span class="site-mark" itemprop="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inquiri_mark_lg.svg" alt="Inquiri Logo"/></span>inquiri</h1></a>
				<!--<a href="<?php bloginfo('url');?>" class="toggleMenu"></a>-->
				<nav class="site-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				</nav>
	</header>

<?php } ?>
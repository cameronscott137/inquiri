<?php

/*$header_cta = new WPAlchemy_MetaBox(array
(
	'id' => 'header_cta',
	'title' => 'Header Call-to-Action',
	'template' => get_stylesheet_directory() . '/metaboxes/header-cta-meta.php',
	'types' => array('page'),
	'include_template' => array('template-medium.php'), // use an array for multiple items
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => TRUE
));

$medium_forms = new WPAlchemy_MetaBox(array
(
	'id' => 'medium_forms',
	'title' => 'Form',
	'template' => get_stylesheet_directory() . '/metaboxes/simple-form-meta.php',
	'types' => array('page'),
	'include_template' => array('template-medium.php'), // use an array for multiple items
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => TRUE
));*/

$home = new WPAlchemy_MetaBox(array
(
	'id' => 'home',
	'title' => 'Home Page Content',
	'template' => get_stylesheet_directory() . '/metaboxes/home-meta.php',
	'types' => array('page'),
	'include_template' => array('template-home.php'), // use an array for multiple items
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE
));

$moment_measure = new WPAlchemy_MetaBox(array
(
	'id' => 'case_studies',
	'title' => 'Medium Page Content',
	'template' => get_stylesheet_directory() . '/metaboxes/moment-meta.php',
	'types' => array('page'),
	'include_template' => array('template-moment.php'), // use an array for multiple items
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE
));


$blog_television = new WPAlchemy_MetaBox(array
(
	'id' => 'case_studies',
	'title' => 'Medium Page Content',
	'template' => get_stylesheet_directory() . '/metaboxes/medium-television-meta.php',
	'types' => array('page'),
	'include_template' => array('template-television.php'), // use an array for multiple items
	'context' => 'advanced',
	'priority' => 'high',
	'autosave' => TRUE
));


/*$footer_cta = new WPAlchemy_MetaBox(array
(
	'id' => 'footer_cta',
	'title' => 'Footer Call-to-Action',
	'template' => get_stylesheet_directory() . '/metaboxes/footer-cta-meta.php',
	'types' => array('page'),
	'include_template' => array('template-medium.php'), // use an array for multiple items
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => TRUE
));*/

$press = new WPAlchemy_MetaBox(array
(
	'id' => 'Press',
	'title' => 'Press URL',
	'template' => get_stylesheet_directory() . '/metaboxes/press-meta.php',
	'types' => array('ncs_press'),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => TRUE
));

$insights = new WPAlchemy_MetaBox(array
(
	'id' => 'insights',
	'title' => 'Insight Download URL',
	'template' => get_stylesheet_directory() . '/metaboxes/insight-meta.php',
	'types' => array('ncs_insights'),
	'context' => 'normal',
	'priority' => 'high',
	'autosave' => TRUE
));

/* eof */
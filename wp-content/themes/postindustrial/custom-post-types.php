<?php 
/** Register the Project Custom Post Type
==========================================*/
	add_action('init', 'ttv_init');
        function ttv_init() {
            $trueprint_labels = array(
                'name' => _x('Trueprint', 'post type general name'),
                'singular_name' => _x('Trueprint','post type singular name'),
                'all_items' => __('All Trueprint Videos'),
                'add_new' => _x('Add new Trueprint video', 'Work'),
                'add_new_item' => __('Add new Trueprint video'),
                'edit_item' => __('Edit Trueprint video'),
                'new_item' => __('New Trueprint video'),
                'view_item' => __('View Trueprint video'),
                'search_items' => __('Search in Trueprint video'),
                'not_found' => __('No Trueprint videos found'),
                'not_found_in_trash' => __('No Trueprint videos found in trash'),
                'parent_item_colon' => ''
            );

            $args = array(
                'labels' => $trueprint_labels,
                'public' => true,
                'public_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                //e'taxonomies' => array('category', 'post_tag'),
                'menu_position' => 5,
                'supports' => array('title','editor'),
                'has_archive' => 'the-trueprint'
            );

            register_post_type('trueprint',$args);
        }

/*Add new Custom Post Type icons
add_action( 'admin_head', 'ttv_project_icon' );
function ttv_project_icon() {
?>
    <style type="text/css" media="screen">
        #menu-posts-fb_projects .wp-menu-image {
            background: url(<?php bloginfo('url') ?>/wp-content/themes/images/resources_icon.png) no-repeat 6px !important;
        }
        .icon32-posts-fb_projects {
            background: url(<?php bloginfo('url') ?>/wp-content/themes/images/resources_icon2x.png) no-repeat !important;
        }
    </style>
<?php }   

    // Add custom taxonomies */
    add_action( 'init', 'ttv_create_taxonomies', 0 );
    function ttv_create_taxonomies() 
    {   // Market
        $step_labels = array(
            'name' => _x( 'Step', 'Step general name' ),
            'singular_name' => _x( 'Medium', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search in Steps' ),
            'all_items' => __( 'All Steps' ),
            'most_used_items' => null,
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Step' ), 
            'update_item' => __( 'Update Step' ),
            'add_new_item' => __( 'Add new Step' ),
            'new_item_name' => __( 'New Step' ),
            'menu_name' => __( 'Step' ),
        );
        register_taxonomy('Step', array('trueprint') ,array(
            'hierarchical' => true,
            'labels' => $step_labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'steps' )
        ));
    }

?>
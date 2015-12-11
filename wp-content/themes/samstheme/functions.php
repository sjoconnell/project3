<?php 

function custom_css_include() 
{

  if( $GLOBALS['pagenow'] == 'wp-login.php' || is_admin() ) { return false; }

  wp_register_style(
    'custom-css', 
    get_stylesheet_directory_uri() . '/style.css', 
    array(), 
    '20121207', 
    'all' 
  );

  wp_enqueue_style( 'custom-css' );
}

add_action( 'wp_enqueue_scripts', 'custom_css_include' );

function custom_js_include()
{

  if( $GLOBALS['pagenow'] == 'wp-login.php' || is_admin() ) { return false; }
  
  wp_register_script( 
    'custom-js', 
    get_stylesheet_directory_uri() . '/custom.js', 
    array('jquery'), 
    '2151207', 
    true 
  );
  wp_enqueue_script( 'custom-js');
}
add_action( 'wp_enqueue_scripts', 'custom_js_include' );


function theme_init () 
{
  register_nav_menus( array(
    'nav-menu' => 'Nav Menu'
    ));
}
add_action( 'init', 'theme_init');


function partner_custom_post_type()
{
  $labels = array(
    'name'                  => _x( 'Partners', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Partners', 'text_domain' ),
    'name_admin_bar'        => __( 'Partner', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );

  $args = array(
    'label'                 => __( 'Partner', 'text_domain' ),
    'description'           => __( 'Partner Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'menu_icon'             => 'dashicons-id-alt',
    'capability_type'       => 'page',
  );

  register_post_type( 'partners', $args );
}

function news_custom_post_type()
{
  $labels = array(
    'name'                  => _x( 'News', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'News', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'News', 'text_domain' ),
    'name_admin_bar'        => __( 'News', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );

  $args = array(
    'label'                 => __( 'News', 'text_domain' ),
    'description'           => __( 'News Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array(),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'menu_icon'             => 'dashicons-admin-page',
    'capability_type'       => 'page',
  );

  register_post_type( 'news', $args );
}

function register_custom_post_types() 
{
  partner_custom_post_type();
  news_custom_post_type();
}

add_action( 'init', 'register_custom_post_types', 0 );


function myplugin_add_meta_box() 
{

  add_meta_box( 
    'news-metabox', // id
    'News Options', //name that will show up
    'news_metabox_callback', //function needed
    'news' //what post we want it to show up on

    );

}
add_action( 'add_meta_boxes', 'myplugin_add_meta_box' );

function news_metabox_callback($post)
{
  wp_nonce_field( 'myplugin_save_meta_box_data', 'myplugin_meta_box_nonce');

  ?>
    <!-- Image Field -->
    <p><label for="news_image">News Image</label></p>
    <p><input type="text" name="news_image" value="<?php echo get_post_meta($post->ID, 'news_image', true); ?>"></p>

    <!-- Date Field -->
    <p><label for="news_date">Date</label></p>
    <p><input type="text" name="news_date" value="<?php echo get_post_meta($post->ID, 'news_date', true); ?>"></p>
  <?php

}

function news_save_post_date($post_id)
{
  if( ! isset( $_POST['myplugin_meta_box_nonce'] ) ) {
    return;
  }

  if( isset( $_POST['news_image'] ) ) {
    update_post_meta( $post_id, 'news_image', $_POST['news_image'] );
  }

  if( isset( $_POST['news_date'] ) ) {
    update_post_meta( $post_id, 'news_date', $_POST['news_date'] );
  }
}
add_action( 'save_post', 'news_save_post_date');




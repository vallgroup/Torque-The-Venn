<?php

require_once( get_stylesheet_directory() . '/includes/the-venn-child-nav-menus-class.php' );
require_once( get_stylesheet_directory() . '/includes/widgets/the-venn-child-widgets-class.php' );
require_once( get_stylesheet_directory() . '/includes/customizer/the-venn-child-customizer-class.php' );
require_once( get_stylesheet_directory() . '/includes/acf/the-venn-child-acf-class.php' );
require_once( get_stylesheet_directory() . '/includes/torque-jetpack-form/torque-jetpack-form-class.php' );
require_once( get_stylesheet_directory() . '/includes/torque-jetpack-form/torque-jetpack-form-fields-class.php' );

/**
 * Child Theme Nav Menus
 */

if ( class_exists( 'The_Venn_Nav_Menus' ) ) {
  new The_Venn_Nav_Menus();
}

/**
 * Child Theme Widgets
 */

if ( class_exists( 'The_Venn_Widgets' ) ) {
  new The_Venn_Widgets();
}

/**
 * Child Theme Customizer
 */

if ( class_exists( 'The_Venn_Customizer' ) ) {
  new The_Venn_Customizer();
}

/**
 * Child Theme ACF
 */

if ( class_exists( 'The_Venn_ACF' ) ) {
  new The_Venn_ACF();
}


/**
 * Map plugin settings
 */

add_filter( 'torque_map_api_key', function( $n ) {
  return get_field( 'google_maps_api_key', 'options' )
    ? get_field( 'google_maps_api_key', 'options' )
    : '';
} );

add_filter( 'torque_map_pois_allowed', function( $n ) {
  return 5;
} );

// add_filter( 'torque_map_manual_pois', function( $n ) {
//   return true;
// } );

add_filter( 'torque_map_pois_location', function( $n ) {
  return 'middle';
} );

add_filter( 'torque_map_display_pois_list', function( $n ) {
  return true;
} );


/**
 * Filtered Loop plugin settings
 */

// if ( class_exists( 'Torque_Filtered_Gallery' ) && class_exists( 'Torque_Filtered_Gallery_Shortcode' ) ) {
//   add_filter( Torque_Filtered_Gallery_Shortcode::$GALLERY_TEMPLATE_FILTER_HANDLE, function() { return "0"; } );
// }


/**
 * Jetpack filters, for local/staging use
 */
// Hook into Jetpack's form redirect filter when WP loads, without instantiating the entire class
Torque_Jetpack_Form::register_redirect_filter();

// add_filter( 'jetpack_development_mode', '__return_true' );
add_filter( 'jetpack_is_staging_site', '__return_true' );

/**
 * Admin settings
 */

 // remove menu items
 add_action( 'admin_menu', 'torque_remove_menus' );
 function torque_remove_menus() {
   //remove_menu_page( 'index.php' );                  //Dashboard
   //remove_menu_page( 'edit.php' );                   //Posts
   //remove_menu_page( 'upload.php' );                 //Media
   //remove_menu_page( 'edit.php?post_type=page' );    //Pages
   //remove_menu_page( 'edit-comments.php' );          //Comments
   //remove_menu_page( 'themes.php' );                 //Appearance
   //remove_menu_page( 'plugins.php' );                //Plugins
   //remove_menu_page( 'users.php' );                  //Users
   //remove_menu_page( 'tools.php' );                  //Tools
   //remove_menu_page( 'options-general.php' );        //Settings
 }

/**
 * Enqueues
 */

// enqueue child styles after parent styles, both style.css and main.css
// so child styles always get priority
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_styles' );
function torque_enqueue_child_styles() {

    $parent_style = 'parent-styles';
    $parent_main_style = 'torque-theme-styles';

    // make sure parent styles enqueued first
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $parent_main_style, get_template_directory_uri() . '/bundles/main.css' );

    // enqueue child style
    wp_enqueue_style( 'the-venn-child-styles',
        get_stylesheet_directory_uri() . '/bundles/main.css',
        array( $parent_style, $parent_main_style ),
        wp_get_theme()->get( 'Version' )
    );
}

// enqueue child scripts after parent script
add_action( 'wp_enqueue_scripts', 'torque_enqueue_child_scripts' );
function torque_enqueue_child_scripts() {

    wp_enqueue_script( 'the-venn-child-script',
        get_stylesheet_directory_uri() . '/bundles/bundle.js',
        array( 'torque-theme-scripts' ), // depends on parent script
        wp_get_theme()->get( 'Version' ),
        true       // put it in the footer
    );
}

?>

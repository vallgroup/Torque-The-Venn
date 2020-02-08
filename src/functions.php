<?php

require_once( get_stylesheet_directory() . '/includes/the-venn-child-nav-menus-class.php' );
require_once( get_stylesheet_directory() . '/includes/widgets/the-venn-child-widgets-class.php' );
require_once( get_stylesheet_directory() . '/includes/customizer/the-venn-child-customizer-class.php' );
require_once( get_stylesheet_directory() . '/includes/acf/the-venn-child-acf-class.php' );

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


/**
 * Jetpack filters, for local/staging use
 */
// add_filter( 'jetpack_development_mode', '__return_true' );
add_filter( 'jetpack_is_staging_site', '__return_true' );

/**
 * Handle Jetpack form redirections, based on ACF fields
 */
add_filter( 'grunion_contact_form_redirect_url', 'modify_jetpack_contact_form_redirect', 10, 3 );
function modify_jetpack_contact_form_redirect( $redirect, $id, $post_id ) {

  // check to see whether a redirect URL was added to the form config
  if ( 
    isset( $_POST['custom-redirect-url'] ) &&
    $_POST['custom-redirect-url'] !== null
  ) {
    // set the redirect
    $redirects = array(
      $id => $_POST['custom-redirect-url'],
    );

    // loop though each custom redirect
    foreach ( $redirects as $origin => $destination ) {
      if ( $id == $origin ) {
        // exit;
        return $destination;
      }
    }
  }
  // default Redirect for all the other forms
  return $redirect;
}

?>

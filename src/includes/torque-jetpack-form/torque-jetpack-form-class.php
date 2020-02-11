<?php

// $torque_jetpack_form = new Torque_Jetpack_Form( $form_options, $form_fields );

class Torque_Jetpack_Form {

  public static $REDIRECT_FIELD_LABEL = 'redirect_url';

  private $form_options = null;
  private $built_form_shortcode = null;

  public function __construct() {
    
    $this->form_options = get_sub_field( 'form_options' );
    
    add_filter( 'grunion_contact_form_redirect_url', array( $this, 'modify_jetpack_contact_form_redirect' ), 10, 3 );

    $this->build_form();

    // TODO for plugin?
    // register ACF fields
  }

  public function build_form() {
    if ( 
      have_rows( 'form_fields' )
      && class_exists( 'Jetpack' ) 
      && Jetpack::is_module_active( 'contact-form' ) 
    ) : 
    
      // start open shortcode tag
      $form_shortcode = '[contact-form';
      $form_shortcode .= isset( $this->form_options['email_notification_subject'] ) 
        ? ' to="' . esc_attr( $this->form_options['email_notification_subject'] ) . '"'
        : '';
      $form_shortcode .= isset( $this->form_options['send_notification_to'] )
        ? ' subject="' . esc_attr( $this->form_options['send_notification_to'] ) . '"'
        : '';
      $form_shortcode .= isset( $this->form_options['submit_button_text'] )
        ? ' submit_button_text="' . esc_attr( $this->form_options['submit_button_text'] ) . '"'
        : '';
      // end open shortcode tag
      $form_shortcode .= ']';
      
      if ( class_exists( 'Torque_Jetpack_Form_Fields' ) ) : 

        $form_fields = new Torque_Jetpack_Form_Fields( $this->form_options );
        $form_fields_shortcode = $form_fields->get_form_fields();

        if (
          $form_fields_shortcode && 
          $form_fields_shortcode !== ''
        ) :
          $form_shortcode .= $form_fields_shortcode;
        else :
          $this->display_warning( 'No form fields found. Please configure form fields from within the content modules.' );
        endif;

      endif;
      
      // close shortcode tag
      $form_shortcode .= '[/contact-form]';

      $this->built_form_shortcode = $form_shortcode;
    
    else : 
      $this->display_warning( 'Please ensure the Jetpack plugin is installed, and the Contact Form module is active.' );
    endif;
  }

  public function print_form() {
    
    // build extra css classess
    $extra_form_classes = isset( $this->form_options['hide_labels'] )
    ? ' hide-labels'
    : '';

    // echo form to page
    echo '<div class="form-container' . $extra_form_classes . '">';
    if ( 
      $this->built_form_shortcode && 
      $this->built_form_shortcode !== null 
    ) {
      // execute shortcode
      echo do_shortcode( $this->built_form_shortcode );
    }
    echo '</div>';
  }

  /**
   * Displays warning in a wrapper container
   */
  private function display_warning( $warning ) {
    echo '<div class="form-container">';
    echo $warning;
    echo '</div>';
  }

  // TODO: This doesn't appear to be reachable when called from this class
  // IS currently located in functions.php as well....
  public function modify_jetpack_contact_form_redirect( $redirect, $id, $post_id ) {
    
    var_dump( $_POST );
    exit;

    // check to see whether a redirect URL was added to the form config
    $redirect_url_post_var_name = 'g' . $id . '-' . self::$REDIRECT_FIELD_LABEL;
    if ( 
      isset( $_POST[ $redirect_url_post_var_name ] ) &&
      $_POST[ $redirect_url_post_var_name ] !== null
    ) {
      // set the redirect
      $redirects = array(
        $id => $_POST[ $redirect_url_post_var_name ],
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

}

?>
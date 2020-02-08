<?php
/**
 * Template file for displaying Content Module Six
 */

/**
 * Jetpack shortcode options:
 * [contact-form to="al@vallgroup.com" subject="Subject"][contact-field label="Text" type="text"][contact-field label="Name" type="name" required="1"][contact-field label="Email" type="email" required="1"][contact-field label="Website" type="url"][contact-field label="Message" type="textarea"][contact-field label="Checkbox" type="checkbox"][contact-field label="Checkbox Group" type="checkbox-multiple" options="Option 1,Option 2"][contact-field label="Drop-down" type="select" options="Option 1,Option 2"][contact-field label="Radio" type="radio" options="Option 1,Option 2"][contact-field label="Date" type="date"][/contact-form]
 */

// options
$alignment_style_class = 'alignment-' . $alignment_style;
// extra form classes
$form_style_class = $form_options['hide_labels'] ? 'hide-labels ' : '';

?>

<div class="content-module-six-container
  <?php echo $alignment_style_class; ?>
">
  <div class="graphic-container-left"></div>
  <div class="graphic-container-right"></div>
  <div class="content-wrapper">
    <div class="content-container">
      <?php if ( $title ) { ?>
        <h1><?php echo $title; ?></h1>
      <?php } ?>

      <?php if ( $content ) { ?>
        <div class="content"><?php echo $content; ?></div>
      <?php } ?>
    </div>
    <div class="form-container <?php echo $form_style_class; ?>">
      <?php if ( 
        have_rows( $form_fields )
        && class_exists( 'Jetpack' ) 
        && Jetpack::is_module_active( 'contact-form' ) 
      ) :

        // start open shortcode tag
        $form_shortcode = '[contact-form';
        $form_shortcode .= $form_options['email_notification_subject'] !== ''
          ? ' to="' . $form_options['email_notification_subject'] . '"'
          : '';
        $form_shortcode .= isset( $form_options['send_notification_to'] )
          ? ' subject="' . $form_options['send_notification_to'] . '"'
          : '';
        $form_shortcode .= isset( $form_options['submit_button_text'] )
          ? ' submit_button_text="' . $form_options['submit_button_text'] . '"'
          : '';
        // end open shortcode tag
        $form_shortcode .= ']';
        
        while ( have_rows( $form_fields ) ) : the_row();

          // input field data
          $label = get_sub_field( 'label' );
          $type = get_sub_field( 'type' );
          $width = get_sub_field( 'width' );
          $required = get_sub_field( 'required' );

          switch ( $type ) {

            // simple inputs
            case 'url' : 
            case 'text' : 
            case 'date' : 
            case 'name' : 
            case 'email' : 
            case 'phone' : 
            case 'textarea' : 
            case 'checkbox' : 

              // start contact field tag
              $form_shortcode .= '[contact-field ';
              // NB: Jetpack appends '-wrap-' to the class
              $form_shortcode .= ' class="form-field-width-' . $width . '"';
              $form_shortcode .= ' label="' . $label . '"';
              $form_shortcode .= ' type="' . $type . '"';
              $form_shortcode .= $form_options['use_labels_as_placeholders']
                ? ' placeholder="' . $label . '"'
                : '';
              $form_shortcode .= $required
                ? ' required="1"'
                : '';

              // end contact field tag
              $form_shortcode .= ' /]';

              break;

            // inputs containing further options
            case 'radio' : 
            case 'select' : 
            case 'checkbox-multiple' : 

              if ( have_rows( 'input_options' ) ) : 

                // start contact field tag
                $form_shortcode .= '[contact-field ';
                // NB: Jetpack appends '-wrap-' to the class
                $form_shortcode .= ' class="form-field-width-' . $width . '"'; 
                $form_shortcode .= ' label="' . $label . '"';
                $form_shortcode .= ' type="' . $type . '"';
                $form_shortcode .= $form_options['use_labels_as_placeholders']
                  ? ' placeholder="' . $label . '"'
                  : '';
                $form_shortcode .= $required
                  ? ' required="1"'
                  : '';
                $form_shortcode .= ' options="';

                while ( have_rows( 'input_options' ) ) : the_row();

                  // end contact field tag
                  $form_shortcode .= get_sub_field( 'option_label' ) .', ';

                endwhile;

                // end contact field tag
                $form_shortcode .= '" /]';

              endif;

              break;

          }

        endwhile;
        
        // close shortcode tag
        $form_shortcode .= '[/contact-form]';

        // execute shortcode
        echo do_shortcode( $form_shortcode );

        if (
          isset( $form_options['redirect_after_submission'] ) &&
          $form_options['redirect_after_submission'] !== null
        ) :
          echo '<div style="display: none;" class="form-redirect-url" data-redirect="' . $form_options['redirect_after_submission'] . '"></div>';
          // $js_snippet_hack = '
          //   <script>
          //     ($ => {
          //       $(document).ready(() => {
          //         let formCount = 0;
          //         $(".form-redirect-url").each(function(){
          //           formCount++;
          //           const redirectURL = $(this).attr("data-redirect");
          //           $(this)
          //             .closest(".form-container")
          //             .find("form .contact-submit")
          //             .append("<input type=\'hidden\' name=\'custom-redirect-url\' value=\'" + redirectURL + "\'><input type=\'hidden\' name=\'custom-form-id\' value=\'" + formCount + "\'>");
          //         });
          //       });
          //     })(jQuery);
          //   </script>';
          // echo $js_snippet_hack;
        endif;

      else : 
        echo 'Please ensure the Jetpack plugin is installed, and the Contact Form module is active.';
      endif; ?>
    </div>
  </div>
</div>

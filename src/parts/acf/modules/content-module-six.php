<?php
/**
 * Template file for displaying Content Module Six
 */

/* [contact-form to="al@vallgroup.com" subject="Subject"][contact-field label="Text" type="text"][contact-field label="Name" type="name" required="1"][contact-field label="Email" type="email" required="1"][contact-field label="Website" type="url"][contact-field label="Message" type="textarea"][contact-field label="Checkbox" type="checkbox"][contact-field label="Checkbox Group" type="checkbox-multiple" options="Option 1,Option 2"][contact-field label="Drop-down" type="select" options="Option 1,Option 2"][contact-field label="Radio" type="radio" options="Option 1,Option 2"][contact-field label="Date" type="date"][/contact-form] */

// options
$alignment_style_class = 'alignment-' . $alignment_style;
// extra form classes
$form_style_classes = $form_options['hide_labels'] ? 'hide-labels ' : '';
$form_style_classes .= $form_options['use_labels_as_placeholders'] ? 'include-placeholders ' : '';
?>

<div class="content-module-six-container
  <?php echo $alignment_style_class; ?>
">
  <div class="content-wrapper">
    <div class="graphic-container-one"></div>
    <div class="graphic-container-two"></div>
    <div class="content-container">
      <?php if ( $title ) { ?>
        <h1><?php echo $title; ?></h1>
      <?php } ?>

      <?php if ( $content ) { ?>
        <div class="content"><?php echo $content; ?></div>
      <?php } ?>
    </div>
    <div class="form-container <?php echo $form_style_classes; ?>">
      <?php if ( have_rows( $form_fields ) ) :

        // start open shortcode tag
        $form_shortcode = '[contact-form';
        // subject
        $form_shortcode .= $form_options['email_notification_subject'] !== ''
          ? ' to="' . $form_options['email_notification_subject'] . '"'
          : '';
        // send notification to
        $form_shortcode .= isset( $form_options['send_notification_to'] )
          ? ' subject="' . $form_options['send_notification_to'] . '"'
          : '';
        // submit btn text
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
            case 'text' : 
            case 'name' : 
            case 'email' : 
            case 'phone' : 
            case 'website' : 
            case 'textarea' : 
            case 'checkbox' : 
            case 'date' : 

              // start contact field tag
              $form_shortcode .= '[contact-field ';
              $form_shortcode .= ' label="' . $label . '"';
              $form_shortcode .= ' type="' . $type . '"';
              $form_shortcode .= $required ? ' required="1"' : '';

              // end contact field tag
              $form_shortcode .= ' /]';

              break;

            // inputs containing further options
            case 'checkbox_group' : 
            case 'radio' : 
            case 'select' : 

              // start contact field tag
              $form_shortcode .= '[contact-field ';
              $form_shortcode .= ' label="' . $label . '"';
              $form_shortcode .= ' type="' . $type . '"';
              $form_shortcode .= ' required="' . $required ? '1' : '0' . '"';

              // end contact field tag
              $form_shortcode .= ' /]';

              break;

          }

        endwhile;
        
        // close shortcode tag
        $form_shortcode .= '[/contact-form]';
        
        var_dump( $form_shortcode );

        echo do_shortcode( $form_shortcode );

      endif; ?>
    </div>
  </div>
</div>

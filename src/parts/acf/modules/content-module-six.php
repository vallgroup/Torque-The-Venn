<?php
/**
 * Template file for displaying Content Module Six
 * Title, Content & Contact Form
 */

// options
$alignment_style_class = 'alignment-' . $alignment_style;
$include_graphic = $alignment_style === 'style_2';
?>

<div class="content-module-six-container
  <?php echo $alignment_style_class; ?>
">
  <?php
    // background graphic template part
    $include_graphic = $alignment_style === 'style_2';
    $align_graphic = 'left';
    include locate_template( '/parts/shared/background-graphic.php' ); 
    
    // background graphic template part
    $include_graphic = $alignment_style === 'style_2' || $alignment_style === 'style_3';
    $align_graphic = 'right';
    include locate_template( '/parts/shared/background-graphic.php' ); 
  ?>
  <div class="content-wrapper">
    <div class="content-container">

      <?php if ( $title ) { ?>
        <h1><?php echo $title; ?></h1>
      <?php } ?>

      <?php if ( $content ) { ?>
        <div class="content"><?php echo $content; ?></div>
      <?php } ?>

    </div>

    <?php if ( 
      class_exists( 'Torque_Jetpack_Form' ) &&
      class_exists( 'Torque_Jetpack_Form_Fields' )
    ) {
      $torque_jetpack_form = new Torque_Jetpack_Form();
      $torque_jetpack_form->print_form();
    } ?>

  </div>

  <?php if ( $alignment_style === 'style_3' ) { 
    // Locations
    $location_the_venn = get_field( 'the_venn', 'options' );
    $the_venn_address = isset( $location_the_venn['address'] ) 
      ? strip_tags( $location_the_venn['address'], '<br>, <p>' ) 
      : null;
    $location_leasing_office = get_field( 'leasing_office', 'options' );
    $leasing_office_phone = isset( $location_leasing_office['phone'] ) 
    ? strip_tags( $location_leasing_office['phone'] ) 
    : null;
    $leasing_office_email = isset( $location_leasing_office['email'] ) 
    ? strip_tags( $location_leasing_office['email'] ) 
    : null;
    $leasing_office_address = isset( $location_leasing_office['address'] ) 
    ? strip_tags( $location_leasing_office['address'], '<br>, <p>' ) 
    : null;
    $additional_logos = get_field( 'additional_logos', 'options' );

    $illegal_link_chars = array( ' ', '.', '-', '( ', ' )' );
  ?>

  <? } ?>
  <div class="contact-details-wrapper">
    <div class="location-container">
      <h4>The Venn</h4>
      <?php if ( $the_venn_address ) { ?>
        <div class="location-info">
          <a 
            href="https://maps.google.com/?q=<?php echo urlencode( strip_tags( $the_venn_address ) ); ?>" 
            target="_blank"
            rel="noopener noreferrer"
          ><?php echo $the_venn_address; ?></a>
        </div>
      <?php } ?>
    </div>
    <div class="location-container">
      <h4>Leasing Office</h4><?php if ( $leasing_office_phone ) { ?>
      <div class="location-info">
        <a href="tel:<?php echo strip_tags( str_replace( $illegal_link_chars, '', $leasing_office_phone ) ); ?>"><?php echo $leasing_office_phone; ?></a>
      </div>
      <?php } ?>
      <?php if ( $leasing_office_email ) { ?>
        <div class="location-info">
          <a href="mailto:<?php echo $leasing_office_email; ?>"><?php echo $leasing_office_email; ?></a>
        </div>
      <?php } ?>
      <?php if ( $leasing_office_address ) { ?>
        <div class="location-info leasing-address">
          <a 
            href="https://maps.google.com/?q=<?php echo urlencode( strip_tags( $leasing_office_address ) ); ?>" 
            target="_blank" 
            rel="noopener noreferrer"
          ><?php echo $leasing_office_address; ?></a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

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
  <?php // background graphic template part
    $align_graphic = 'left';
    include locate_template( '/parts/shared/background-graphic.php' ); 
  ?>
  <?php // background graphic template part
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
</div>

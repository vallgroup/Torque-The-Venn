<?php
/**
 * Template file for displaying Content Module Eight
 * Filtered Gallery
 */

// options
$alignment_style_class = '';
?>

<div class="content-module-nine-container
  <?php echo $alignment_style_class; ?>
">
  <div class="content-wrapper">

    <?php if ( $title ) { ?>
      <h2><?php echo $title; ?></h2>
    <?php } ?>

    <?php if ( $map_id ) { 
      echo do_shortcode( '[torque_map map_id="' . $map_id . '"]' );
    } ?>
  </div>
</div>

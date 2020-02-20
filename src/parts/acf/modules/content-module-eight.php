<?php
/**
 * Template file for displaying Content Module Eight
 * Filtered Gallery
 */

// options
$alignment_style_class = '';
?>

<div class="content-module-eight-container
  <?php echo $alignment_style_class; ?>
">
  <div class="content-wrapper">
    <?php if ( $filtered_gallery_id ) { 
      echo do_shortcode( '[torque_filtered_gallery gallery_id="' . $filtered_gallery_id . '"]' );
    } ?>
  </div>
</div>

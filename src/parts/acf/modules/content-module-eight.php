<?php
/**
 * Template file for displaying Content Module Eight
 * Filtered Gallery
 */

// options
$hide_filters = get_field( 'filtered_gallery_hide_filters', $filtered_gallery_id )
  ? get_field( 'filtered_gallery_hide_filters', $filtered_gallery_id )
  : '';
$use_lightbox = get_field( 'filtered_gallery_use_lightbox', $filtered_gallery_id )
  ? get_field( 'filtered_gallery_use_lightbox', $filtered_gallery_id )
  : '';
?>

<div class="content-module-eight-container">
  <div class="content-wrapper">
    <?php if ( $filtered_gallery_id ) { 
      echo do_shortcode( '[torque_filtered_gallery gallery_id="' . $filtered_gallery_id . '" hide_filters="' . $hide_filters . '" use_lightbox="' . $use_lightbox . '"]' );
    } ?>
  </div>
</div>

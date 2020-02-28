<?php
/**
 * Template part for displaying page content in floorplans.php
 *
 * @package Torque
 */

$is_grid = empty( $_GET['floorplanId'] );

?>

<div class="content-floorplans" >
  
  <?php 

  // content modules
  $is_grid && get_template_part( '/parts/acf/modules' );
  
  // floorplans
  echo do_shortcode( '[torque_rentcafe request_type="floorPlan" property_code="p1161665"]' ); 
  
  // gallery
  if ( !$is_grid ) {
    // options
    $filtered_gallery_id = get_field( 'gallery', 'options' )
			? get_field( 'gallery', 'options' )
			: null;
    $hide_filters = get_field( 'filtered_gallery_hide_filters', $filtered_gallery_id )
    ? get_field( 'filtered_gallery_hide_filters', $filtered_gallery_id )
    : '';
    $use_lightbox = get_field( 'filtered_gallery_use_lightbox', $filtered_gallery_id )
    ? get_field( 'filtered_gallery_use_lightbox', $filtered_gallery_id )
    : '';
  ?>
    <div class="content-module-eight-container">
      <div class="content-wrapper">
        <h2>Life at <b>Porte</b></h2>
        <?php if ( $filtered_gallery_id ) { 
          echo do_shortcode( '[torque_filtered_gallery gallery_id="' . $filtered_gallery_id . '" hide_filters="' . $hide_filters . '" use_lightbox="' . $use_lightbox . '"]' );
        } ?>
      </div>
    </div>
  <?php } ?>

  <?php
    // CTA banner
    
    // source
    $floorplans_pg_cta = get_field( 'cta_banner', 'options' );
    // options
    $align_image = isset( $floorplans_pg_cta['align_image'] )
      ? $floorplans_pg_cta['align_image']
      : null;
    // data
    $image = isset( $floorplans_pg_cta['image'] )
    ? $floorplans_pg_cta['image']
    : null;
    $title = isset( $floorplans_pg_cta['title'] )
    ? strip_tags( $floorplans_pg_cta['title'], '<i><b><em><strong>' )
    : null;
    $button = isset( $floorplans_pg_cta['button'] )
    ? $floorplans_pg_cta['button']
    : null;
    $phone = isset( $floorplans_pg_cta['phone'] )
    ? strip_tags( $floorplans_pg_cta['phone'] )
    : null;

    include locate_template( '/parts/acf/modules/content-module-seven.php' );
  ?>

</div>

<?php
/**
 * Template part for displaying page content in floorplans.php
 *
 * @package Torque
 */

?>

<div class="content-floorplans" >
  
  <?php get_template_part( '/parts/acf/modules' ); ?>

  <?php echo do_shortcode( '[torque_rentcafe request_type="floorPlan" property_code="p1161665"]' ); ?>

  <?php
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

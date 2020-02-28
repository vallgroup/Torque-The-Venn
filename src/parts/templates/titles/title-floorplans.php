<?php 
/**
 * Template part for displaying page title page.php
 *
 * @package Torque
 */

$is_grid = empty( $_GET['floorplanId'] );
$enable_hero = get_field( 'enable_hero' ) && $is_grid
  ? true
  : false;

if ( $enable_hero ) {
  get_template_part( 'parts/shared/page-hero' );
}

?>
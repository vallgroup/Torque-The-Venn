<?php
/**
 * Footer template
 */

// ACF data
$partner_logos = get_field( 'partner_logos', 'options' ); // main group of ALL logos
$development_logos = $partner_logos['development_logos'];
$partners_logos = $partner_logos['partners_logos']; // specifically the partner's' logos
$design_logos = $partner_logos['design_logos'];
$additional_logos = get_field( 'additional_logos', 'options' ); // additional logos

?>

<footer>

  <div class="footer-block footer-block-one">
    <?php get_template_part( 'parts/shared/logo', 'white'); ?>
    <!-- additional logos -->
  </div>

  <div class="footer-block footer-block-two">
    <h3 class="footer-block-title">Leasing Office</h3>
    <!-- location details -->
  </div>

  <div class="footer-block footer-block-three">
    <h3 class="footer-block-title">Development</h3>
    <!-- logos -->

    <div class="footer-block footer-block-four">
      <div class="left-col">
        <h3 class="footer-block-title">Partners</h3>
        <!-- logos -->
      </div>
      <div class="right-col">
        <h3 class="footer-block-title">Design</h3>
        <!-- logos -->
      </div>
    </div>
  </div>

</footer>

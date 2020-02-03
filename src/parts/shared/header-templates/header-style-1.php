<?php

/**
 * Header Template 1:
 *
 * Logo - Burger menu with mobile opening from top of screen (mobile & tablet)
 * Logo - Menu items inline (desktop)
 *
 *
 * Note: styles for this which require a media query
 * can be found in the child theme boilerplate.
 */

$background_color = isset($tq_header_style_1_color) && $tq_header_style_1_color !== ''
  ? $tq_header_style_1_color
  : 'transparent';

$logo_dark_light = isset($tq_header_style_1_logo) && $tq_header_style_1_logo === 'white' ? 'white' : 'dark';

$extra_classes = isset($tq_header_style_1_classes) ? $tq_header_style_1_classes : '';

?>

<header
  id="header-style-1"
  class="torque-header <?php echo $extra_classes; ?>"
  style="background-color: <?php echo $background_color; ?>">

  <div class="row torque-header-content-wrapper torque-navigation-toggle">

    <div class="torque-header-left-area-wrapper">
      <?php // Burger Nav Toggle
        get_template_part( 'parts/elements/element', 'burger-menu-squeeze');
      ?>
      <?php // Quick Nav 
        // include locate_template('/parts/shared/header-parts/header-quick-nav.php');
        get_template_part( 'parts/shared/header-parts/header-quick-nav');
      ?>
    </div>

    <div class="torque-header-center-area-wrapper torque-header-logo-wrapper">
      <?php // Logo
        get_template_part( 'parts/shared/logo', $logo_dark_light);
      ?>
    </div>

    <div class="torque-header-right-area-wrapper">
      <?php // CTA 1 (text)
        get_template_part( 'parts/shared/header-parts/header-cta', 'one');
        ?>
      <?php // CTA 2 (button)
        get_template_part( 'parts/shared/header-parts/header-cta', 'two');
      ?>
    </div>

  </div>

  <!-- Burger Nav Items -->

  <div class="col1 torque-navigation-toggle torque-header-menu-items-mobile">
    <!-- <svg class="diagonal-top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" shape-rendering="geometricPrecision">
      <polygon points="0,100 50,0 100,0 100,100"/>
    </svg> -->
    <?php get_template_part( 'parts/shared/header-parts/menu-items/menu-items', 'stacked'); ?>
    <!-- <svg class="diagonal-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" shape-rendering="geometricPrecision">
      <polygon points="0,0 100,0 100,100"/>
    </svg> -->
  </div>

</header>

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

$logo_dark_light = isset($tq_header_style_1_logo) && $tq_header_style_1_logo === 'white' ? 'white' : 'dark';

$extra_classes = isset($tq_header_style_1_classes) ? $tq_header_style_1_classes : '';

// Check if notification bar should be included, and assign class to header if so
// NB: notification bar vars are also defined within the template part...
$notification_bar = get_field( 'top_notification_bar', 'options' );
$enable_notification_bar = $notification_bar['enable_notification_bar'];
$notification_bar_hide_on = $notification_bar['hide_on_pages'] ? $notification_bar['hide_on_pages'] : array();
$extra_classes .= $enable_notification_bar && !in_array( get_the_ID(), $notification_bar_hide_on )
  ? ' include-notification-bar'
  : '';

// Check if hero image in-use. If not, add a header background class
$is_grid = empty( $_GET['floorplanId'] );
$extra_classes .= !get_field( 'enable_hero', get_the_ID() ) || !$is_grid
  ? ' include-header-background'
  : '';

?>

<header
  id="header-style-1"
  class="torque-header <?php echo $extra_classes; ?>"
>

  <?php // Notification bar
    get_template_part( 'parts/shared/header-parts/header-notification-bar' );
  ?>

  <div class="row torque-header-content-wrapper torque-navigation-toggle">

    <div class="torque-header-left-area-wrapper">
      <?php // Burger Nav Toggle
        get_template_part( 'parts/elements/element', 'burger-menu-squeeze' );
      ?>
      <?php // Quick Nav 
        // include locate_template( '/parts/shared/header-parts/header-quick-nav.php' );
        get_template_part( 'parts/shared/header-parts/header-quick-nav' );
      ?>
    </div>

    <div class="torque-header-center-area-wrapper torque-header-logo-wrapper">
      <?php // Logo
        get_template_part( 'parts/shared/logo', $logo_dark_light);
      ?>
    </div>

    <div class="torque-header-right-area-wrapper">
      <?php // CTA 1 (text)
        get_template_part( 'parts/shared/header-parts/header-cta', 'one' );
      ?>
      <?php // CTA 2 (button)
        get_template_part( 'parts/shared/header-parts/header-cta', 'two' );
      ?>
    </div>

  </div>

  <!-- Burger Nav Items -->

  <div class="col1 torque-navigation-toggle torque-header-menu-items-mobile">
    <svg class="svg-background" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 660 1000" preserveAspectRatio="none" shape-rendering="geometricPrecision">
      <polygon points="0,0 250,0 630,420 0,1000"></polygon>
      <defs>
        <linearGradient id="grad" gradientTransform="rotate(119)">
          <stop offset="-24%" stop-color="#63be73"/>
          <stop offset="23%" stop-color="#6ec5a2"/>
          <stop offset="59%" stop-color="#9ccfc8"/>
        </linearGradient>
      </defs>
    </svg>
    <?php get_template_part( 'parts/shared/header-parts/menu-items/menu-items', 'stacked' ); ?>
  </div>

</header>

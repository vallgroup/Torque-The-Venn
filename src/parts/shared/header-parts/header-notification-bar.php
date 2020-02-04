<? // Template for displaying the header notification bar

// ACF data
$notification_bar = get_field( 'top_notification_bar', 'options' );
$enable_notification_bar = $notification_bar['enable_notification_bar'];
$notification_bar_content = $notification_bar['notification_bar_content'];
$notification_bar_cta = $notification_bar['notification_bar_cta'];

if ( $enable_notification_bar ) { ?>

<div class="notification-bar-container">

  <div class="notification-bar-content-wrapper">

    <?php if ( $notification_bar_content ) { ?>
      <span class="notification-bar-content"><?php echo $notification_bar_content; ?></span>
    <?php }

    if ( $notification_bar_cta ) { ?>
      <a class="notification-bar-cta" href="<?php echo $notification_bar_cta['url']; ?>"><?php echo $notification_bar_cta['title']; ?></a>
    <?php } ?>

  </div>

  <div class="notification-bar-close-btn">+</div>

</div>

<?php } ?>
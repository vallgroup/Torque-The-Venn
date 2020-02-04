<? // Template for displaying the header quick nav

// ACF data
$call_to_action_two = get_field( 'call_to_action_two', 'options' );
$cta_button = $call_to_action_two['cta_button'];

if ( $cta_button ) { ?>
  <div class="header-cta-two-wrapper">
    <a class="cta-two-button" href="<?php echo $cta_button['url']; ?>"><?php echo $cta_button['title']; ?></a>
  </div>
<?php } ?>

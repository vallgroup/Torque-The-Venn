<? // Template for displaying the header quick nav

// ACF data
$call_to_action_one = get_field( 'call_to_action_one', 'options' );
$cta_text = $call_to_action_one['text_left'];
$cta_link = $call_to_action_one['text_right'];

?>

<div class="header-cta-one-wrapper">

  <?php if ( $cta_text ) { ?>
    <span class="cta-one-text"><?php echo $cta_text; ?></span>
  <?php }

  if ( $cta_link ) { ?>
    <a class="cta-one-link" href="<?php echo $cta_link['url']; ?>"><?php echo $cta_link['title']; ?></a>
  <?php } ?>

</div>
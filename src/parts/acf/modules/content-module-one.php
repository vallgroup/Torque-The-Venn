<?php
/**
 * Template file for displaying Content Module One
 */

// options
$content_align_class = 'align-content-' . $align_text;
?>

<div class="content-module-one-container
  <?php echo $content_align_class; ?>
">
  <?php // background graphic template part
    $align_graphic = $align_text === 'left' ? 'right' : 'left';
    include locate_template( '/parts/shared/background-graphic.php' ); 
  ?>
  <div class="content-container">
    <?php if ( $title ) { ?>
      <h1><?php echo $title; ?></h1>
    <?php } ?>

    <?php if ( $tagline ) { ?>
      <p class="content-tagline"><?php echo $tagline; ?></p>
    <?php } ?>

    <?php if ( $content ) { ?>
      <div class="content"><?php echo $content; ?></div>
    <?php } ?>

    <?php if ( $call_to_action ) { ?>
      <a class="cta-btn" href="<?php echo $call_to_action['url']; ?>"><?php echo $call_to_action['title']; ?></a>
    <?php } ?>
  </div>
</div>
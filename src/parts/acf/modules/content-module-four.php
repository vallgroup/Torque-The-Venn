<?php
/**
 * Template file for displaying Content Module Four
 * Two-Column Content
 */

// options
$content_align_class = 'align-content-' . $align_content;
?>

<div class="content-module-four-container <?php echo $content_align_class; ?>">
  <div class="content-container">
    <div class="column-container left-column-container">
      <?php if ( $lc_title ) { ?>
        <h2><?php echo $lc_title; ?></h2>
      <?php } ?>

      <?php if ( $lc_content ) { ?>
        <div class="content"><?php echo $lc_content; ?></div>
      <?php } ?>
    </div>
    <div class="column-container right-column-container">
      <?php if ( $rc_title ) { ?>
        <h2><?php echo $rc_title; ?></h2>
      <?php } ?>

      <?php if ( $rc_content ) { ?>
        <div class="content"><?php echo $rc_content; ?></div>
      <?php } ?>
    </div>
  </div>
</div>
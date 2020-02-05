<?php
/**
 * Template file for displaying Content Module Six
 */

// options
$alignment_style_class = 'alignment-' . $alignment_style;
?>

<div class="content-module-six-container
  <?php echo $alignment_style_class; ?>
">
  <div class="content-wrapper">
    <div class="graphic-container"></div>
    <div class="content-container">
      <?php if ( $title ) { ?>
        <h1><?php echo $title; ?></h1>
      <?php } ?>

      <?php if ( $content ) { ?>
        <div class="content"><?php echo $content; ?></div>
      <?php } ?>
    </div>
    <div class="form-container">
      <?php echo $contact_form; ?>
    </div>
  </div>
</div>
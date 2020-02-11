<?php
/**
 * Template file for displaying Content Module Two
 */

// options
$alignment_style_class = 'alignment-' . $alignment_style;

?>

<div class="content-module-two-container
  <?php echo $alignment_style_class; ?>
">
  <?php // background graphic template part
    $align_graphic = $alignment_style === 'style_1' ? 'right' : 'left';
    include locate_template( '/parts/shared/background-graphic.php' ); 
  ?>
  <div class="top-row-container">

    <div class="content-container">
      <?php if ( $tr_title ) { ?>
        <h2><?php echo $tr_title; ?></h2>
      <?php } ?>

      <?php if ( $tr_content ) { ?>
        <div class="content-wrapper"><?php echo $tr_content; ?></div>
      <?php } ?>

      <?php if ( $tr_call_to_action ) { ?>
        <a class="cta-btn" href="<?php echo $tr_call_to_action['url']; ?>"><?php echo $tr_call_to_action['title']; ?></a>
      <?php } ?>
    </div>

    <div class="image-container">
      <?php if ( $tr_image ) { ?>
        <div class="image-wrapper">
          <img src="<?php echo $tr_image['sizes']['large']; ?>"/>
        </div>
      <?php } ?>
    </div>

  </div>
  
  <div class="bottom-row-container">

    <div class="content-container">
      <?php if ( $br_title ) { ?>
        <h2><?php echo $br_title; ?></h2>
      <?php } ?>

      <?php if ( $br_content ) { ?>
        <div class="content-wrapper"><?php echo $br_content; ?></div>
      <?php } ?>

      <?php if ( $br_call_to_action ) { ?>
        <a class="cta-btn" href="<?php echo $br_call_to_action['url']; ?>"><?php echo $br_call_to_action['title']; ?></a>
      <?php } ?>
    </div>

    <div class="image-container">
      <?php if ( $br_image ) { ?>
        <div class="image-wrapper">
          <img src="<?php echo $br_image['sizes']['large']; ?>"/>
        </div>
      <?php } ?>
    </div>
    
  </div>

</div>
<?php
/**
 * Template file for displaying Content Module Two
 */

// // top row
// var_dump($tr_title);
// var_dump($tr_content);
// var_dump($tr_call_to_action);
// var_dump($tr_image);
// // bottom row
// var_dump($br_title);
// var_dump($br_content);
// var_dump($br_call_to_action);
// var_dump($br_image);

// options
$alignment_style_class = 'alignment-' . $alignment_style;
$include_graphic_class = $include_graphic ? 'include-graphic' : '';
$alternate_graphic_class = $alternate_graphic ? 'alternate-graphic' : '';

?>

<div class="content-module-two-container
  <?php echo $alignment_style_class; ?>
  <?php echo $include_graphic_class; ?>
  <?php echo $alternate_graphic_class; ?>
">
  <div class="graphic-container"></div>
  
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
          <img src="<?php echo $tr_image['sizes']['large']; ?>"/>
        </div>
      <?php } ?>
    </div>
    
  </div>

</div>
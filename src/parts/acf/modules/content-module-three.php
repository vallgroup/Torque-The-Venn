<?php
/**
 * Template file for displaying Content Module Three
 * Image & Graphic
 */

// options
$alignment_style_class = 'alignment-' . $align_image;

?>

<div class="content-module-three-container
  <?php echo $alignment_style_class; ?>
">
  <?php // background graphic template part, aligned opp to image
    $align_graphic = $align_image === 'left' ? 'right' : 'left';
    include locate_template( '/parts/shared/background-graphic.php' ); 
  ?>

  <div class="image-container">
    <?php if ( $image ) { ?>
      <div class="image-wrapper">
        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
    <?php } ?>
  </div>


</div>
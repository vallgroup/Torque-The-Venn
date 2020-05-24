<?php
/**
 * Template file for displaying Content Module Two
 * Offset Content & Image Grid
 */

// options
$alignment_style_class = 'alignment-' . $alignment_style;

?>

<div class="content-module-two-container
  <?php echo $alignment_style_class; ?>
  <?php echo $hide_tr; ?>
  <?php echo $hide_br; ?>
">
  <?php // background graphic template part
    $align_graphic = $alignment_style === 'style_1' ? 'right' : 'left';
    if ( 
      $align_graphic === 'right' 
      && $hide_tr === 'hide_tr'
      && $alternate_graphic
    ) {
      // use a special graphic for right-aligned alt graphic, with , for this module...
      $alternate_graphic_number = 1;
    }
    include locate_template( '/parts/shared/background-graphic.php' ); 
  ?>
  <div class="top-row-container">

    <div class="content-container">
      <?php if ( $tr_title ) { ?>
        <h2><?php echo $tr_title; ?></h2>
      <?php } ?>

      <div class="content-wrapper">

        <?php if ( $tr_content ) { ?>
          <?php echo $tr_content; ?>
        <?php } ?>
        
        <?php if ( $tr_call_to_action ) { ?>
          <a class="cta-btn" href="<?php echo $tr_call_to_action['url']; ?>"><?php echo $tr_call_to_action['title']; ?></a>
        <?php } ?>

      </div>

    </div>

    <?php if ( 'image' === $tr_media_type ) { ?>
      <div class="image-container">
        <?php if ( $tr_image ) { ?>
          <div class="image-wrapper">
            <img src="<?php echo $tr_image['sizes']['large']; ?>"/>
          </div>
        <?php } ?>
      </div>
    <?php } elseif ( 'iframe' === $tr_media_type ) { ?>
      <div class="iframe-container">
        <?php if ( $tr_iframe ) { ?>
          <div class="iframe-wrapper">
            <iframe
              src="<?php echo $tr_iframe; ?>"
              allow
            ></iframe>
          </div>
        <?php } ?>
      </div>
    <?php } ?>

  </div>
  
  <div class="bottom-row-container">

    <div class="content-container">
      <?php if ( $br_title ) { ?>
        <h2><?php echo $br_title; ?></h2>
      <?php } ?>

      <div class="content-wrapper">
        
        <?php if ( $br_content ) { ?>
          <?php echo $br_content; ?>
        <?php } ?>

        <?php if ( $br_call_to_action ) { ?>
          <a class="cta-btn" href="<?php echo $br_call_to_action['url']; ?>"><?php echo $br_call_to_action['title']; ?></a>
        <?php } ?>

      </div>
          
    </div>

    <?php if ( 'image' === $br_media_type ) { ?>
      <div class="image-container">
        <?php if ( $br_image ) { ?>
          <div class="image-wrapper">
            <img src="<?php echo $br_image['sizes']['large']; ?>"/>
          </div>
        <?php } ?>
      </div>
    <?php } elseif ( 'iframe' === $br_media_type ) { ?>
      <div class="iframe-container">
        <?php if ( $br_iframe ) { ?>
          <div class="iframe-wrapper">
            <iframe src="<?php echo $br_iframe; ?>"></iframe>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
    
  </div>

</div>
<?php
/**
 * Template file for displaying Content Module Seven
 * CTA Banner
 */

// options
$alignment_style_class = 'alignment-' . $align_image;
$illegal_link_chars = array( ' ', '.', '-', '(', ')' );
?>

<div class="content-module-seven-container
  <?php echo $alignment_style_class; ?>
">
  <div class="content-wrapper">
    
    <div class="image-wrapper">
      <?php if ( $image ) { ?>
        <div class="image-container" style="background-image: url(<?php echo $image['sizes']['large']; ?>);"></div>
      <?php } ?>
    </div>

    <div class="content-container">

      <div class="cta-background-container"></div>

      <?php if ( $title ) { ?>
        <h1><?php echo $title; ?></h1>
      <?php } ?>

      <div class="cta-wrapper">
        <?php if ( $button ) { ?>
          <div class="button-container">
            <a class="cta" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
          </div>
        <?php } ?>

        <?php if ( $phone ) { ?>
          <div class="phone-container"><i class="fa fa-phone"></i> <a href="tel:<?php echo strip_tags( str_replace( $illegal_link_chars, '', $phone ) ); ?>"><?php echo $phone; ?></a></div>
        <?php } ?>
      </div>

    </div>

  </div>
</div>

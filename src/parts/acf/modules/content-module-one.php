<?php
/**
 * Template file for displaying Content Module One
 * Title, Tagline, Content, CTA & Graphic
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
      <div class="content-tagline"><?php echo $tagline; ?></div>
    <?php } ?>

    <?php if ( $content ) { ?>
      <div class="content"><?php echo $content; ?></div>
    <?php } ?>

    <?php if ( have_rows( $icons_and_text ) ) : ?>
      <div class="icons-text-container">
        <? while ( have_rows( $icons_and_text ) ) : the_row();
          $image = get_sub_field('icon');
          $text = get_sub_field('text'); ?>
          <div class="icon-text-item">
            <image src="<?php echo $image; ?>" width="100%" height="auto" alt="icon"/>
            <p><?php echo $text; ?></p>
          </div>
        <? endwhile; ?>
      </div>
    <? endif; ?>

    <?php if ( $call_to_action ) { ?>
      <div class="cta-container">
        <a class="cta-btn" href="<?php echo $call_to_action['url']; ?>"><?php echo $call_to_action['title']; ?></a>
      </div>
    <?php } ?>
  </div>
</div>
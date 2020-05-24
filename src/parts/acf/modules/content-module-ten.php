<?php

/**
 * Template file for displaying Content Module Ten
 * Iframe Gallery
 */
?>

<div class="content-module-ten-container">
  <div class="content-wrapper">
    <?php if ( have_rows( $iframes ) ) : ?>
      <?php while ( have_rows( $iframes ) ) : the_row();
        $url = get_sub_field('url');
      ?>
        <div class="iframe-wrapper">
          <iframe
            src="<?php echo $url; ?>"
            allow
          ></iframe>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<?php
/**
 * Template file for displaying Content Module Five
 */

if ( !empty( $image ) ) { ?>
  <div class="content-module-five-container">
    <img 
      src="<?php echo $image['url']; ?>" 
      title="<?php echo $image['title']; ?>"
      alt="<?php echo $image['alt']; ?>"
    />
  </div>
<?php } ?>
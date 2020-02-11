<?php
/**
 * Template for displaying background graphic.
 * Expects;
 *  $include_graphic
 *  $align_graphic
 *  $alternate_graphic
 */

if ( $include_graphic ) : 

  // base path
  $image_path = get_stylesheet_directory_uri() . '/statics/images/diamond-graphic-';
  // alignment
  $image_path .= $align_graphic === 'right' ? 'right' : 'left';
  // image type
  $image_path .= $alternate_graphic ? '-alt' : '';
  // file type
  $image_path .= '.png';

  $align_graphic_class = $align_graphic === 'right' ? 'align-right' : 'align-left';

  ?>

  <div class="background-graphic-container <?php echo $align_graphic_class; ?>">
    <img src="<?php echo $image_path; ?>">
  </div>

<?php endif;
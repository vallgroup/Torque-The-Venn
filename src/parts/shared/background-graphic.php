<?php
/**
 * Template for displaying background graphic.
 * Expects the following to be set;
 *  $include_graphic
 *  $align_graphic
 *  $alternate_graphic
 */

// set defaults...
$include_graphic          = isset( $include_graphic )           ? $include_graphic          : true;
$align_graphic            = isset( $align_graphic )             ? $align_graphic            : 'left';
$alternate_graphic        = isset( $alternate_graphic )         ? $alternate_graphic        : false;
$alternate_graphic_number = isset( $alternate_graphic_number )  ? $alternate_graphic_number : null;

if ( $include_graphic ) : 

  // base path
  $image_path = get_stylesheet_directory_uri() . '/statics/images/diamond-graphic-';
  // alignment
  $image_path .= $align_graphic === 'right' ? 'right' : 'left';
  // image type
  $image_path .= $alternate_graphic ? '-alt' : '';
  // image number
  $image_path .= $alternate_graphic_number ? '-' . $alternate_graphic_number : '';
  // file type
  $image_path .= '.png';

  $align_graphic_class = $align_graphic === 'right' ? 'align-right' : 'align-left';

  ?>

  <div class="background-graphic-container <?php echo $align_graphic_class; ?>">
    <img src="<?php echo $image_path; ?>">
  </div>

<?php endif;
<?php

$modules = 'content_modules';
$modules_path = '/parts/acf/modules/';

if ( have_rows( $modules ) ) :

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'horizontal_line' :

        // options
        $width = get_sub_field( 'width' );
        $measurement = get_sub_field( 'measurement' );
        $visibility = get_sub_field( 'visibility' );

        include locate_template( $modules_path . 'horizontal-line.php' );

        break;

      case 'content_spacer' :

        // options
        $spacer_height = get_sub_field( 'spacer_height' );
        $spacer_measurement = get_sub_field( 'spacer_measurement' );
        $visibility = get_sub_field( 'visibility' );

        include locate_template( $modules_path . 'content-spacer.php' );

        break;

      // Title, Tagline, Content, CTA & Graphic
      case 'content_module_one' :

        // options
        $options = get_sub_field( 'options' );
        $align_text = $options['align_text'];
        $include_graphic = $options['include_graphic'];
        $alternate_graphic = $options['alternate_graphic'];
        // data
        $title = strip_tags( get_sub_field( 'title' ), '<i><b><em><strong>' );
        $tagline = strip_tags( get_sub_field( 'tagline'), '<i><b><em><strong><p><br>' );
        $content = strip_tags( get_sub_field( 'content'), '<i><b><em><strong><p><br><img>' );
        $icons_and_text = 'icons_and_text';
        $call_to_action = get_sub_field( 'call_to_action' );

        include locate_template( $modules_path . 'content-module-one.php' );

        break;

      // Offset Content & Image Grid
      case 'content_module_two' :

        // options
        $options = get_sub_field( 'options' );
        $alignment_style = $options['alignment_style'];
        $include_graphic = $options['include_graphic'];
        $alternate_graphic = $options['alternate_graphic'];
        // var_dump($alternate_graphic);
        // top row
        $top_row = get_sub_field( 'top_row' );
        $hide_tr = isset( $top_row['hide_row'] ) && $top_row['hide_row']
          ? 'hide_tr'
          : '';
        $tr_title = isset( $top_row['title'] )
          ? strip_tags( $top_row['title'], '<i><b><em><strong>' )
          : null;
        $tr_content = isset( $top_row['content'] )
          ? strip_tags( $top_row['content'], '<i><b><em><strong><p><br>' )
          : null;
        $tr_call_to_action = isset( $top_row['call_to_action'] )
          ? $top_row['call_to_action']
          : null;
        $tr_image = $top_row['image'];
        // bottom row
        $bottom_row = get_sub_field( 'bottom_row' );
        $hide_br = isset( $bottom_row['hide_row'] ) && $bottom_row['hide_row']
          ? 'hide_br'
          : '';
        $br_title = isset( $bottom_row['title'] )
          ? strip_tags( $bottom_row['title'], '<i><b><em><strong>' )
          : null;
        $br_content = isset( $bottom_row['content'] )
          ? strip_tags( $bottom_row['content'], '<i><b><em><strong><p><br>' )
          : null;
        $br_call_to_action = isset( $bottom_row['call_to_action'] )
          ? $bottom_row['call_to_action']
          : null;
        $br_image = isset( $bottom_row['image'] )
          ? $bottom_row['image']
          : null;

        include locate_template( $modules_path . 'content-module-two.php' );

        break;

      // Image & Graphic
      case 'content_module_three' :

        // options
        $options = get_sub_field( 'options' );
        $align_image = $options['align_image'];
        $include_graphic = $options['include_graphic'];
        $alternate_graphic = $options['alternate_graphic'];
        // data
        $image = get_sub_field( 'image' );

        include locate_template( $modules_path . 'content-module-three.php' );

        break;

      // Two-Column Content
      case 'content_module_four' :

        // options
        $options = get_sub_field( 'options' );
        $align_content = $options['align_content'];
        // left column
        $left_column = get_sub_field( 'left_column' );
        $lc_title = strip_tags( $left_column['title'], '<i><b><em><strong>' );
        $lc_content = strip_tags( $left_column['content'], '<a><ul><ol><li><i><b><em><strong><p><br>' );
        // right column
        $right_column = get_sub_field( 'right_column' );
        $rc_title = strip_tags( $right_column['title'], '<i><b><em><strong>' );
        $rc_content = strip_tags( $right_column['content'], '<a><ul><ol><li><i><b><em><strong><p><br>' );

        include locate_template( $modules_path . 'content-module-four.php' );

        break;

      // Full-width Image
      case 'content_module_five' :

        // data
        $image = get_sub_field( 'image' );

        include locate_template( $modules_path . 'content-module-five.php' );

        break;

      // Title, Content & Contact Form
      case 'content_module_six' :

        // options
        $options = get_sub_field( 'options' );
        $alignment_style = $options['alignment_style'];
        // data
        $title = strip_tags( get_sub_field( 'title' ), '<i><b><em><strong>' );
        $content = strip_tags( get_sub_field( 'content'), '<i><b><em><strong><p><br>' );

        include locate_template( $modules_path . 'content-module-six.php' );

        break;

      // CTA Banner
      case 'content_module_seven' :

        // options
        $options = get_sub_field( 'options' );
        $align_image = $options['align_image'];
        // data
        $image = get_sub_field( 'image' );
        $title = strip_tags( get_sub_field( 'title' ), '<i><b><em><strong>' );
        $button = get_sub_field( 'button' );
        $phone = strip_tags( get_sub_field( 'phone') );

        include locate_template( $modules_path . 'content-module-seven.php' );

        break;

      // Filtered Gallery
      case 'content_module_eight' :

        // data
        $filtered_gallery_id = get_sub_field( 'filtered_gallery' );

        include locate_template( $modules_path . 'content-module-eight.php' );

        break;

      // Filtered Map
      case 'content_module_nine' :
        
        // data
        $title = strip_tags( get_sub_field( 'title' ), '<i><b><em><strong>' );
        $map_id = get_sub_field( 'map_id' );

        include locate_template( $modules_path . 'content-module-nine.php' );

        break;

    }

  endwhile;
endif;

?>

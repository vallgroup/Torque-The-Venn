<?php

$modules = 'content_modules';
$modules_path = '/parts/acf/modules/';

// allowable tags
$allowable_title_tags = '<i><b><em><strong>';
$allowable_tagline_tags = '<blockquote><a><ul><ol><li><i><b><em><strong><p><br><table><tbody><thead><td><tr>';
$allowable_content_tags = '<blockquote><a><ul><ol><li><i><b><em><strong><p><br><table><tbody><thead><td><tr><img>';

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
        $title = strip_tags( get_sub_field( 'title' ), $allowable_title_tags );
        $tagline = strip_tags( get_sub_field( 'tagline'), $allowable_tagline_tags );
        $content = strip_tags( get_sub_field( 'content'), $allowable_content_tags );
        $icons_and_text = 'icons_and_text';
        $call_to_action = get_sub_field( 'call_to_action' );

        include locate_template( $modules_path . 'content-module-one.php' );

        break;

      // Two Row Offset Content & Image Grid
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
        $tr_media_type = isset( $top_row['media_type'] )
          ? $top_row['media_type']
          : null;
        $tr_title = isset( $top_row['title'] )
          ? strip_tags( $top_row['title'], $allowable_title_tags )
          : null;
        $tr_content = isset( $top_row['content'] )
          ? strip_tags( $top_row['content'], $allowable_content_tags )
          : null;
        $tr_call_to_action = isset( $top_row['call_to_action'] )
          ? $top_row['call_to_action']
          : null;
        $tr_image = isset( $top_row['image'] )
          ? $top_row['image']
          : null;
        $tr_iframe = isset( $top_row['iframe'] )
          ? $top_row['iframe']
          : null;
        // bottom row
        $bottom_row = get_sub_field( 'bottom_row' );
        $hide_br = isset( $bottom_row['hide_row'] ) && $bottom_row['hide_row']
          ? 'hide_br'
          : '';
        $br_media_type = isset( $bottom_row['media_type'] )
          ? $bottom_row['media_type']
          : null;
        $br_title = isset( $bottom_row['title'] )
          ? strip_tags( $bottom_row['title'], $allowable_title_tags )
          : null;
        $br_content = isset( $bottom_row['content'] )
          ? strip_tags( $bottom_row['content'], $allowable_content_tags )
          : null;
        $br_call_to_action = isset( $bottom_row['call_to_action'] )
          ? $bottom_row['call_to_action']
          : null;
        $br_image = isset( $bottom_row['image'] )
          ? $bottom_row['image']
          : null;
        $br_iframe = isset( $bottom_row['iframe'] )
          ? $bottom_row['iframe']
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
        $lc_title = strip_tags( $left_column['title'], $allowable_title_tags );
        $lc_content = strip_tags( $left_column['content'], $allowable_content_tags );
        // right column
        $right_column = get_sub_field( 'right_column' );
        $rc_title = strip_tags( $right_column['title'], $allowable_title_tags );
        $rc_content = strip_tags( $right_column['content'], $allowable_content_tags );

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
        $title = strip_tags( get_sub_field( 'title' ), $allowable_title_tags );
        $content = strip_tags( get_sub_field( 'content'), $allowable_content_tags );

        include locate_template( $modules_path . 'content-module-six.php' );

        break;

      // CTA Banner
      case 'content_module_seven' :

        // options
        $options = get_sub_field( 'options' );
        $align_image = $options['align_image'];
        // data
        $image = get_sub_field( 'image' );
        $title = strip_tags( get_sub_field( 'title' ), $allowable_title_tags );
        $tagline = strip_tags( get_sub_field( 'tagline' ), $allowable_tagline_tags );
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
        $title = strip_tags( get_sub_field( 'title' ), $allowable_title_tags );
        $map_id = get_sub_field( 'map_id' );

        include locate_template( $modules_path . 'content-module-nine.php' );

        break;

      // Iframe Gallery
      case 'content_module_ten' :
        
        // data
        $iframes = 'iframe_gallery';
        include locate_template( $modules_path . 'content-module-ten.php' );

        break;

    }

  endwhile;
endif;

?>

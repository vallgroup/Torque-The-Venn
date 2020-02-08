<?php

$modules = 'content_modules';
$modules_path = '/parts/acf/modules/';

if ( have_rows( $modules ) ) :

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'content_spacer' :

        // options
        $spacer_height = get_sub_field( 'spacer_height' );
        $spacer_measurement = get_sub_field( 'spacer_measurement' );

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
        $tagline = strip_tags( get_sub_field( 'tagline'), '<i><b><em><strong>' );
        $content = strip_tags( get_sub_field( 'content'), '<i><b><em><strong><p><br>' );
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
        // top row
        $top_row = get_sub_field( 'top_row' );
        $tr_title = strip_tags( $top_row['title'], '<i><b><em><strong>' );
        $tr_content = strip_tags( $top_row['content'], '<i><b><em><strong><p><br>' );
        $tr_call_to_action = $top_row['call_to_action'];
        $tr_image = $top_row['image'];
        // bottom row
        $bottom_row = get_sub_field( 'bottom_row' );
        $br_title = strip_tags( $bottom_row['title'], '<i><b><em><strong>' );
        $br_content = strip_tags( $bottom_row['content'], '<i><b><em><strong><p><br>' );
        $br_call_to_action = $bottom_row['call_to_action'];
        $br_image = $bottom_row['image'];

        include locate_template( $modules_path . 'content-module-two.php' );

        break;

      // Image & Graphic
      case 'content_module_three' :

        // options
        $options = get_sub_field( 'options' );
        $align_image = $options['align_image'];
        $include_graphic = $options['include_graphic'];
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
        $lc_content = strip_tags( $left_column['content'], '<i><b><em><strong><p><br>' );
        // right column
        $right_column = get_sub_field( 'right_column' );
        $rc_title = strip_tags( $right_column['title'], '<i><b><em><strong>' );
        $rc_content = strip_tags( $right_column['content'], '<i><b><em><strong><p><br>' );

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
        $form_fields = 'form_fields';
        // form options
        $form_options = get_sub_field( 'form_options' );

        include locate_template( $modules_path . 'content-module-six.php' );

        break;

    }

  endwhile;
endif;

?>

<?php

$modules = 'content_modules';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'content_spacer' :

        // options
        $spacer_height = get_sub_field( 'spacer_height' );
        $spacer_measurement = get_sub_field( 'spacer_measurement' );

        include locate_template( '/parts/acf/modules/content-spacer.php' );

        break;

      // Title, Tagline, Content, CTA & Graphic
      case 'content_module_one' :

        // options
        $options = get_sub_field( 'options' );
        $align_text = $options['align_text'];
        $include_graphic = $options['include_graphic'];
        $alternate_graphic = $options['alternate_graphic'];
        // data
        $title = get_sub_field( 'title' );
        $tagline = get_sub_field( 'tagline' );
        $content = get_sub_field( 'content' );
        $call_to_action = get_sub_field( 'call_to_action' );

        include locate_template( '/parts/acf/modules/content-module-one.php' );

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
        $tr_title = $top_row['title'];
        $tr_content = $top_row['content'];
        $tr_call_to_action = $top_row['call_to_action'];
        $tr_image = $top_row['image'];
        // bottom row
        $bottom_row = get_sub_field( 'bottom_row' );
        $br_title = $bottom_row['title'];
        $br_content = $bottom_row['content'];
        $br_call_to_action = $bottom_row['call_to_action'];
        $br_image = $bottom_row['image'];

        include locate_template( '/parts/acf/modules/content-module-two.php' );

        break;

      // Image & Graphic
      case 'content_module_three' :

        // options
        $options = get_sub_field( 'options' );
        $align_image = $options['align_image'];
        $include_graphic = $options['include_graphic'];
        // data
        $image = $bottom_row['image'];

        include locate_template( '/parts/acf/modules/content-module-three.php' );

        break;

      // Two-Column Content
      case 'content_module_four' :

        // options
        $options = get_sub_field( 'options' );
        $align_content = $options['align_content'];
        // left column
        $left_column = get_sub_field( 'left_column' );
        $lc_title = $left_column['title'];
        $lc_content = $left_column['content'];
        // right column
        $right_column = get_sub_field( 'right_column' );
        $rc_title = $right_column['title'];
        $rc_content = $right_column['content'];

        include locate_template( '/parts/acf/modules/content-module-four.php' );

        break;

      // Full-width Image
      case 'content_module_five' :

        // data
        $image = get_sub_field( 'image' );

        include locate_template( '/parts/acf/modules/content-module-five.php' );

        break;

      // Title, Content & Contact Form
      case 'content_module_six' :

        // options
        $options = get_sub_field( 'options' );
        $alignment_style = $options['alignment_style'];
        // data
        $title = get_sub_field( 'title' );
        $content = get_sub_field( 'content' );
        $contact_form = get_sub_field( 'contact_form' );

        include locate_template( '/parts/acf/modules/content-module-six.php' );

        break;

    }

  endwhile;
endif;

?>

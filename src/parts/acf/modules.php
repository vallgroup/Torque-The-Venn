<?php

$modules = 'content_modules';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

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

        include locate_template('/parts/acf/modules/content-module-one.php');

        break;

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

        include locate_template('/parts/acf/modules/content-module-two.php');

        break;

      case 'content_module_three' :

        // options
        $options = get_sub_field( 'options' );
        $align_image = $options['align_image'];
        $include_graphic = $options['include_graphic'];
        // data
        $image = $bottom_row['image'];

        include locate_template('/parts/acf/modules/content-module-three.php');

        break;

    }

  endwhile;
endif;

?>

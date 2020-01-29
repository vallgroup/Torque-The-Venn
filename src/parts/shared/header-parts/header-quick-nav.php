<? // Template for displaying the header quick nav

// TODO

// ACF data
$quick_nav = get_field( 'quick_nav', 'options' ); 

// var_dump( $quick_nav );

if ( have_rows( $quick_nav ) ): ?>

  <div class="">

    <? // while ( have_rows( $quick_nav ) ) : the_row();
    foreach ( $quick_nav as $nav_item ) {
      
      // $nav_item = get_sub_field('nav_item'); 
      // var_dump( $nav_item ); 
      ?>

      <a 
        href="<?php echo $nav_item['url']; ?>" 
        target="<?php echo $nav_item['target']; ?>"
      >
        <?php echo $nav_item['title']; ?>
      </a>

    <? } // endwhile; ?>

  </div>

<?php endif; ?>

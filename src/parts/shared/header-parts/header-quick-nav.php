<? // Template for displaying the header quick nav

if ( have_rows( 'quick_nav', 'options' ) ): ?>

  <div class="header-quick-nav-wrapper">

    <? while ( have_rows( 'quick_nav', 'options' ) ) : the_row();
      
      // get the nav item instance
      $nav_item = get_sub_field('nav_item'); ?>

      <a 
        class="quick-nav-item"
        href="<?php echo $nav_item['url']; ?>" 
        target="<?php echo $nav_item['target']; ?>"
      >
        <?php echo $nav_item['title']; ?>
      </a>

    <? endwhile; ?>

  </div>

<?php endif; ?>
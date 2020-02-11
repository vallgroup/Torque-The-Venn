<?php
/**
 * Footer template
 */

// Locations
$location_the_venn = get_field( 'the_venn', 'options' );
$the_venn_address = isset( $location_the_venn['address'] ) 
  ? strip_tags( $location_the_venn['address'], '<br>, <p>' ) 
  : null;
$location_leasing_office = get_field( 'leasing_office', 'options' );
$leasing_office_phone = isset( $location_leasing_office['phone'] ) 
? strip_tags( $location_leasing_office['phone'] ) 
: null;
$leasing_office_email = isset( $location_leasing_office['email'] ) 
? strip_tags( $location_leasing_office['email'] ) 
: null;
$leasing_office_address = isset( $location_leasing_office['address'] ) 
? strip_tags( $location_leasing_office['address'], '<br>, <p>' ) 
: null;
$additional_logos = get_field( 'additional_logos', 'options' );

$illegal_link_chars = array( ' ', '.', '-', '( ', ' )' );

?>

<footer>

  <div class="footer-block footer-block-one">
    <?php get_template_part( 'parts/shared/logo', 'white' ); ?>
    <?php if ( $the_venn_address ) { ?>
      <div class="location-info">
        <a 
          href="https://maps.google.com/?q=<?php echo urlencode( strip_tags( $the_venn_address ) ); ?>" 
          target="_blank"
          rel="noopener noreferrer"
        ><?php echo $the_venn_address; ?></a>
      </div>
    <?php } ?>
    <div class="additional-logos">
      <?php if ( !empty( $additional_logos ) ) {
        foreach( $additional_logos as $logo ) { ?>
          <img 
            src="<?php echo $logo['url']; ?>" 
            title="<?php echo $logo['title']; ?>"
            alt="<?php echo $logo['alt']; ?>"
          />
        <?php } 
        } ?>
    </div>
  </div>

  <div class="footer-block footer-block-two">
    <h3 class="footer-block-title">Leasing Office</h3>
    <?php if ( $leasing_office_phone ) { ?>
      <div class="location-info">
        <a href="tel:<?php echo strip_tags( str_replace( $illegal_link_chars, '', $leasing_office_phone ) ); ?>"><?php echo $leasing_office_phone; ?></a>
      </div>
    <?php } ?>
    <?php if ( $leasing_office_email ) { ?>
      <div class="location-info">
        <a href="mailto:<?php echo $leasing_office_email; ?>"><?php echo $leasing_office_email; ?></a>
      </div>
    <?php } ?>
    <?php if ( $leasing_office_address ) { ?>
      <div class="location-info">
        <a 
          href="https://maps.google.com/?q=<?php echo urlencode( strip_tags( $leasing_office_address ) ); ?>" 
          target="_blank" 
          rel="noopener noreferrer"
        ><?php echo $leasing_office_address; ?></a>
      </div>
    <?php } ?>
  </div>

  <div class="footer-block footer-block-three">
    <h3 class="footer-block-title">Development</h3>
    <?php if ( have_rows( 'development_logos', 'options' ) ) : ?>
      <div class="logo-wrapper development-logos">
        <? while ( have_rows( 'development_logos', 'options' ) ) : the_row();
          // data
          $logo = get_sub_field( 'logo' );
          $link = get_sub_field( 'link' );
          if ( $link ) { ?>
            <a 
              class="quick-nav-item"
              href="<?php echo $link['url']; ?>" 
              target="<?php echo $link['target']; ?>"
            >
          <?php } ?>
            <img 
              src="<?php echo $logo['url']; ?>"
              title="<?php echo $logo['title']; ?>"
              alt="<?php echo $logo['alt']; ?>"
            />
          <?php if ( $link ) { ?>
            </a>
          <?php } ?>
        <? endwhile; ?>
      </div>
    <?php endif; ?>

    <div class="col2-desktop half-col">
      <h3 class="footer-block-title">Partners</h3>
      <?php if ( have_rows( 'partners_logos', 'options' ) ) : ?>
        <div class="logo-wrapper development-logos">
          <? while ( have_rows( 'partners_logos', 'options' ) ) : the_row();
            // data
            $logo = get_sub_field( 'logo' );
            $link = get_sub_field( 'link' );
            if ( $link ) { ?>
              <a 
                class="quick-nav-item"
                href="<?php echo $link['url']; ?>" 
                target="<?php echo $link['target']; ?>"
              >
            <?php } ?>
              <img 
                src="<?php echo $logo['url']; ?>"
                title="<?php echo $logo['title']; ?>"
                alt="<?php echo $logo['alt']; ?>"
              />
            <?php if ( $link ) { ?>
              </a>
            <?php } ?>
          <? endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="col2-desktop half-col">
      <h3 class="footer-block-title">Design</h3>
      <?php if ( have_rows( 'design_logos', 'options' ) ) : ?>
        <div class="logo-wrapper development-logos">
          <? while ( have_rows( 'design_logos', 'options' ) ) : the_row();
            // data
            $logo = get_sub_field( 'logo' );
            $link = get_sub_field( 'link' );
            if ( $link ) { ?>
              <a 
                class="quick-nav-item"
                href="<?php echo $link['url']; ?>" 
                target="<?php echo $link['target']; ?>"
              >
            <?php } ?>
              <img 
                src="<?php echo $logo['url']; ?>"
                title="<?php echo $logo['title']; ?>"
                alt="<?php echo $logo['alt']; ?>"
              />
            <?php if ( $link ) { ?>
              </a>
            <?php } ?>
          <? endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

</footer>

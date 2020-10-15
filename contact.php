<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div class="wrapper">

  <section class="secondary-heading-container">
    <h1><?php the_field('contact_heading_1'); ?></h1>
    <?php 
      $image = get_field('contact_image_1');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'full');
      } 
    ?>
  </section>

  <div class="content contact-container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end the loop?>
    <div class="map-location-container">
      <?php 
        $image = get_field('contact_image_2');
        
        if( $image ) {
          echo wp_get_attachment_image( $image, 'full');
        } 
      ?>
      <h3><?php the_field('address'); ?></h3>

    </div>
  </div>

</div>

<?php get_footer(); ?>
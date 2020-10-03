<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

<div class="wrapper">

  <section class="services-container">
    <h1><?php the_field('services_heading'); ?></h1>
    <?php 
      $image = get_field('services_image');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'large');
      } 
    ?>
  </section>

</div>

<?php get_footer(); ?>
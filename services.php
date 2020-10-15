<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

<div class="wrapper">

  <section class="secondary-heading-container services-container">
    <h1><?php the_field('services_heading'); ?></h1>
    <?php 
      $image = get_field('services_image');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'full');
      } 
    ?>
  </section>

  <section class="category-container">
      <h2><?php the_field('services_1'); ?></h2>
      <h2><?php the_field('services_2'); ?></h2>
      <h2><?php the_field('services_3'); ?></h2>
  </section>

  <section class="category-information-container">
      <p><?php the_field('service_content'); ?></p>
  </section>

</div>

<?php get_footer(); ?>
<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

<div class="wrapper">

  <section class="secondary-heading-container">
    <h1><?php the_field('services_heading'); ?></h1>
    <?php 
      $image = get_field('services_image');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'full');
      } 
    ?>
  </section>

  <section class="category-container">
      <h2><?php the_field('category_container-1'); ?></h2>
      <h2><?php the_field('category_container-2'); ?></h2>
      <h2><?php the_field('category_container-3'); ?></h2>
  </section>

  <section class="category-information-container">
      <p><?php the_field('category_content'); ?></p>
  </section>

</div>

<?php get_footer(); ?>
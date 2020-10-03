<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="wrapper">

  <section class="about-heading-container">
    <h1><?php the_field('about_heading_1'); ?></h1>
    <?php 
      $image = get_field('about_image');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'large');
      } 
    ?>
  </section>

  <section class="about-section-1">
    <div class="about-section-1-text">
      <h2><?php the_field('about_heading_2'); ?></h2>
      <p><?php the_field('about_paragraph_1'); ?></p>
      <p><?php the_field('about_paragraph_2'); ?></p>
      <p><?php the_field('about_paragraph_3'); ?></p>
    </div>
      <?php 
      $image = get_field('about_image_1');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'large');
      } 
    ?>
  </section>

  <section class="about-section-2">
    <h2><?php the_field('about_heading_3'); ?></h2>
    <p><?php the_field('about_paragraph_4'); ?></p>
    <p><?php the_field('about_paragraph_5'); ?></p>
  </section>

</div>

<?php get_footer(); ?>
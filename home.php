<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="wrapper">

  <section class="hero-container">
    <h1> <?php the_field('hero_heading'); ?>
    <p> <?php the_field('hero_text_paragraph'); ?>
    <?php

      $link = get_field('hero_link');

      if( $link ) { ?>
        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php } 

    ?>
  </section>

  <section class="about-text-img-container">
    <div class="about-text">
      <h2><?php the_field('about_heading'); ?></h2>
      <p><?php the_field('about_text_paragraph_1'); ?></p>
      <p><?php the_field('about_text_paragraph_2'); ?></p>
      <?php

        $link = get_field('about_link');

        if( $link ) { ?>
          <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php } 
      
      ?>
    </div>
    <?php 
    
      $image = get_field('about_image');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'thumbnail');
      } 

    ?>
  </section>

</div> 

<?php get_footer(); ?>
<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="wrapper">

  <section class="secondary-heading-container">
    <h1><?php the_field('about_heading_1'); ?></h1>
    <?php 
      $image = get_field('about_image_1');
      
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
      $image = get_field('about_image_2');
      
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

  <section class="about-section-3">
    <h2><?php the_field('about_heading_4'); ?></h2>
    <?php
    
    $the_query = new WP_Query(
        array(
          'post_type' => 'team_members',
          'posts_per_page' => -1,
          'order' => 'ASC'
        )
    );

    if ( $the_query->have_posts() ):
      
      while ( $the_query->have_posts() ) :
        
        $the_query->the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <h3><?php the_field('job_title'); ?></h3>
        
      <?php endwhile;
      
      /* Restore original Post Data */
      wp_reset_postdata();
    else : ?>
        <!-- no posts found -->
      <p>There are no team members at this time.</p>
    <?php endif; ?>
  </section>


</div>

<?php get_footer(); ?>
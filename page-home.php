<?php /* Template Name: Page Home*/ ?>

<?php get_header(); ?>

<div class="wrapper">

  <div class="content blog-container">
      <?php get_template_part( 'about-services');	?>
  </div> <!--/.content -->

  <section class="hero-container">
    <h1><?php the_field('hero_heading'); ?></h1>
    <p><?php the_field('hero_text_paragraph'); ?></p>
    <?php
      $link = get_field('hero_link');

      if( $link ) { ?>
        <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php } 
    ?>
    <?php 
      $image = get_field('hero_image');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'large');
      } 
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
          <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php } 
      ?>
    </div>
    <?php 
      $image = get_field('about_image');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'large');
      } 
    ?>
  </section>

    <!-- Featured Employee section -->
   <?php $employee = get_field('featured_employee'); ?>
   <section class="employee-text-img-container">
         <?php echo wp_get_attachment_image(
             get_post_thumbnail_id($employee->ID),
             'square-large'
         );?>
         <?php if($employee->post_title): ?>
          <div class="employee-text">
            <h3><?php the_field('section_title'); ?></h3>
            <h2><?php echo $employee->post_title; ?></h2>
            <?php endif; ?>
            <p><?php echo wp_trim_words($employee->post_content, 50); ?></p>
            <a class="button" href="<?php the_permalink() ?>">Learn More</a>
          </div>
   </section>

</div> 

<?php get_footer(); ?>
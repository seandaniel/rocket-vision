<?php get_header(); ?>
<div class="wrapper">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
    <section class="single-member-section-1">
      <div class="text-content">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_field('job_title'); ?></h2>
        <h3><span><?php echo get_field('favourite_title_1') . ': '?></span><?php the_field('favourite_name_1'); ?></h3>
        <h3><span><?php echo get_field('favourite_title_2') . ': '?></span><?php the_field('favourite_name_2'); ?></h3>
        <h3><span><?php echo get_field('favourite_title_3') . ': '?></span><?php the_field('favourite_name_3'); ?></h3>
      </div>

      <?php the_post_thumbnail('full'); ?>
    </section>

    <section class="single-member-section-2">
      <?php the_content(); ?>
    </section>

  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
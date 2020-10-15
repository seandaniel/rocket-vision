<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div class="wrapper">
  <section class="secondary-heading-container">
    <h1><?php single_post_title(); ?></h1>
    <?php echo get_the_post_thumbnail(get_option( 'page_for_posts' ), 'full'); ?>
  </section>
</div>

<?php get_footer(); ?>
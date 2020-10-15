<?php get_header();  ?>

<div class="wrapper">

  <section class="secondary-heading-container">
    <h1><?php single_post_title(); ?></h1>
    <?php echo get_the_post_thumbnail(get_option( 'page_for_posts' ), 'full'); ?>
  </section>

  <div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

</div>

<?php get_footer(); ?>
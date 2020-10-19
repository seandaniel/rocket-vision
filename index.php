<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">

  <section class="secondary-heading-container">
    <h1><?php single_post_title(); ?></h1>
    <h1><?php the_field('blog_page_title', 'option'); ?></h1>
    <?php echo get_the_post_thumbnail(get_option( 'page_for_posts' ), 'full'); ?>
  </section>

  <div class="content">
      <?php get_template_part( 'loop', 'index' );	?>
  </div> <!--/.content -->

</div> 

<?php get_footer(); ?>
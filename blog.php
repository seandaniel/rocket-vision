<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>
<div class="wrapper">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
  <div class="blog-container">
    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_post_thumbnail('full'); ?>
          <div class="article-content">
            <h3><?php the_title(); ?><h3>
            <h4><?php echo get_the_author() . " - " . get_the_date(); ?></h4>
            <!-- wp_trim_words(get_the_content(), 50) -->
            <?php the_excerpt(); ?>
          </div>
          
        </article><!-- #post-## -->
      <?php endwhile;?>
  </div>

  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
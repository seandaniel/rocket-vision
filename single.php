<?php get_header(); ?>

<div class="wrapper">

  <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="single-blog-section-1">

          <div class="text-content">
            <?php the_category(); ?>
            <h1><?php the_title(); ?></h1>
            <h2><?php echo "By " . get_the_author(); ?></h2>
          </div>

          <?php the_post_thumbnail('full'); ?>
        </section>
        
        <section class="single-blog-section-2">
          <?php the_content(); ?>
        </section>

        <?php wp_link_pages(array(
          'before' => '<div class="page-link"> Pages: ',
          'after' => '</div>'
        )); ?>

        <div id="nav-below" class="navigation forward-backward-container">
          <p class="nav-previous button"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <!-- <p class="nav-next button"><?php next_post_link('%link', '%title &rarr;'); ?></p> -->
        </div> 

    <?php endwhile; // end of the loop. ?>

  </div>

</div>

<?php get_footer(); ?>
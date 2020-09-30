<?php get_header(); ?>
<div class="wrapper">
  <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
          <h4><?php the_category(); ?></h4>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <h3><?php the_author(); ?></h3>
          <p><?php the_content(); ?></p>
          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div><!-- .entry-content -->

      <!-- <div class="entry-utility">
          <?php base_theme_posted_in(); ?>
          <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?> 
        </div>
      </div> -->

      <!-- <div id="nav-below" class="navigation">
        <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
        <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
      </div> -->



    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.content -->

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
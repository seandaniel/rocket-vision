<?php get_header(); ?>
<div class="wrapper">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
      <h1><?php the_title(); ?></h1>
      <h2><?php the_field('job_title'); ?></h2>
      <?php the_content(); ?>
      <h3><?php the_field('favourite_movie'); ?></h3>
      <h3><?php the_field('favourite_artist'); ?></h3>
      <?php
        $link = get_field('favourite_project');

        if( $link ) { ?>
          <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php } 
      ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="wrapper">

  <section class="secondary-heading-container">
    <h1><?php the_field('about_heading_1'); ?></h1>
    <?php 
      $image = get_field('about_image_1');
      
      if( $image ) {
        echo wp_get_attachment_image( $image, 'full');
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
        echo wp_get_attachment_image( $image, 'full');
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
    // leadership team query
    $leadership_query = new WP_Query(
        array(
            'post_type' => 'team_members',
            'posts_per_page' => -1,
            'tax_query' => array(
                  array(
                    'taxonomy' => 'team', // what taxonomy are we querying by?
                    'field' => 'slug', // what field is the query? (other options are the term_id or name)
                    'terms'    => 'leadership', // what specific term are we querying by?
                  ))
          )
    );


    // The Loop for leadership
    if ( $leadership_query->have_posts() ) { ?>
        <h3>Leadership</h3>
        <div class="taxonomy-container">
        <?php while ( $leadership_query->have_posts() ) { 
            $leadership_query->the_post(); ?>
            
            <div class="team-member">
              <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, array('class' => 'featured-image')); ?>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <h4><?php the_field('job_title'); ?></h4>
            </div>

        <?php }
        
        /* Restore original Post Data */
        wp_reset_postdata();
    } else { ?>
        <!-- no posts found -->
        <p>There are no leaders</p>
    <?php }

    ?>
        </div>
    
    <?php
    // developers team query
    $developers_query = new WP_Query(
        array(
            'post_type' => 'team_members',
            'posts_per_page' => -1,
            'tax_query' => array(
                  array(
                    'taxonomy' => 'team', // what taxonomy are we querying by?
                    'field' => 'slug', // what field is the query? (other options are the term_id or name)
                    'terms'    => 'development', // what specific term slug are we querying by?
                  ))
          )
    );
    // The Loop for developers team
    if ( $developers_query->have_posts() ) { ?>
        <h3>Development Team</h3>
        <div class="taxonomy-container">
        <?php while ( $developers_query->have_posts() ) { 
            $developers_query->the_post(); ?>

            <div class="team-member">
              <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, array('class' => 'featured-image')); ?>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        <?php }
        
        /* Restore original Post Data */
        wp_reset_postdata();
    } else { ?>
        <!-- no posts found -->
        <p>There are no developers</p>
    <?php }

    ?>
      </div>
    
    <?php
    // design team query
    $design_query = new WP_Query(
        array(
            'post_type' => 'team_members',
            'posts_per_page' => -1,
            'tax_query' => array(
                  array(
                    'taxonomy' => 'team', // what taxonomy are we querying by?
                    'field' => 'slug', // what field is the query? (other options are the term_id or name)
                    'terms'    => 'design', // what specific term slug are we querying by?
                  ))
          )
    );
    // The Loop for design team
    if ( $design_query->have_posts() ) { ?>
        <h3>Design Team</h3>
        <div class="taxonomy-container">
        <?php while ( $design_query->have_posts() ) { 
            $design_query->the_post(); ?>

            <div class="team-member">
              <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, array('class' => 'featured-image')); ?>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>

        <?php }
        
        /* Restore original Post Data */
        wp_reset_postdata();
    } else { ?>
        <!-- no posts found -->
        <p>There are no designers</p>
    <?php } ?>

        </div>

  </section>

  <section class="about-section-4">
    <h2><?php the_field('about_heading_5'); ?></h2>
    <?php
      $link = get_field('about_link_1');

      if( $link ) { ?>
        <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php } 
    ?>
  </section>

</div>

<?php get_footer(); ?>
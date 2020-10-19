<?php get_header(); ?>

<div class="wrapper">
  <div class="content">
    <div class="secondary-heading-container">
      <h1><?php single_cat_title(); ?></h1>
      <?php echo get_the_post_thumbnail(get_option( 'page_for_posts' ), 'full'); ?>
      </div>
      <?php
        $category_description = category_description();
        if ( ! empty( $category_description ) )
          echo '' . $category_description . '';
          get_template_part( 'loop', 'category' );
        ?>
  </div> <!-- /.content -->

</div>

<?php get_footer(); ?>
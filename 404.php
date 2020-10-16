<?php get_header(); ?>

<!-- not being used currently -->
<div class="wrapper">

  <div class="secondary-heading-container">
    <h1>Not Found</h1>
    <?php echo get_the_post_thumbnail(get_option( 'page_for_posts' ), 'full'); ?>
  </div>

  <div class="error-container">
    <p>Apologies, but the page you requested could not be found. Perhaps searching will help.</p>
    <?php get_search_form(); ?>
  </div>

</div> 

<?php get_footer(); ?>
</main>

<footer>
  <div class="wrapper">
    <div class="title-nav-container">

      <h2><?php the_field('company_name', 'option'); ?></h2>

      <?php wp_nav_menu( array(
        'theme_location' => 'social',
        'container_class' => 'social-menu'
      )); ?>

    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
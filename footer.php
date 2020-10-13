</main>

<footer>
  <div class="wrapper">
    <div class="title-nav-container">

      <h2><?php the_field('company_name', 'option'); ?></h2>

      <div class="footer-nav">
        <p><?php the_field('call_to_action', 'option'); ?></p>
        <?php wp_nav_menu( array(
          'theme_location' => 'footer',
          'container_class' => 'footer-menu'
        )); ?>
      </div>

    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
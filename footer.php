</main>

<footer>
  <div class="wrapper">
    <div class="title-nav-container">
      <h2><?php

      if ($title !== 'Rocket Vision') {
        $title = 'Rocket Vision';
      } else {
        $title = wp_title();
      }

      echo $title; ?></h2>
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
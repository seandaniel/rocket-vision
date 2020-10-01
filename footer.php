</main>

<footer>
  <div class="wrapper">
    <div class="title-nav-container">
      <h3><?php

      if ($title !== 'Rocket Vision') {
        $title = 'Rocket Vision';
      } else {
        $title = wp_title();
      }

      echo $title; ?></h3>
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
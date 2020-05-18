<?php

/**
 * Main Site Footer
 */
?>
    <footer class="square">
      <?php if (has_nav_menu('footer-menu')) {
        wp_nav_menu(array('theme_location' => 'footer-menu'));
      } ?>
      <?php wp_footer(); ?>
    </footer>

  </div> <!-- container -->
</body>

</html>
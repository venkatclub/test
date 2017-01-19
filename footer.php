

<footer class="site-footer">
  <nav class="footer-nav">
    <?php wp_nav_menu(array(
      'theme_location' => 'footer'
    )); ?>
  </nav>
  <p> <?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>  </p>
</footer>

<?php wp_footer(); ?>


</body>
</html>

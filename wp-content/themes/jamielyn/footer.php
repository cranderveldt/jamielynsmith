      <footer class="row-fluid">
        <div class="span8">
            <p>&copy; Copyright 2012 Trevor Moore&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">Contact Me</a></p>
        </div>
        <div class="span4">
          <nav id="footer-nav">
            <?php wp_nav_menu(array( 
              'theme_location'  => 'menu-2',
              'menu'            => '', 
              'container'       => false,
              'menu_class'      => 'menu row-fluid',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => ''
            )); ?>
          </nav>
          <?php do_action('wp_footer'); ?>
        </div>
      </footer>
    </div> <!-- end of #container -->
  </body>
</html>
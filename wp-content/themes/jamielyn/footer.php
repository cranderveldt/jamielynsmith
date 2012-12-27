      <footer class="max960 pad20">
        <div class="row-fluid">
          <div class="span7">
              <p>&copy; Copyright 2012 Jamielyn Smith&nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="">Contact</a></p>
          </div>
          <div class="span5">
            <nav id="footer-nav" class="hidden-phone">
              <?php wp_nav_menu(array( 
                'theme_location'  => 'menu-2',
                'menu'            => '', 
                'container'       => false,
                'menu_class'      => 'menu',
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
        </div>
      </footer>
    </div> <!-- end of #container -->
  </body>
</html>
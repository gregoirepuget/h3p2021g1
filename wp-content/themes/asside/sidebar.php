<aside class="probootstrap-aside js-probootstrap-aside">
  <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
  <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">

    <a href="index.html" class="mb-2 d-block probootstrap-logo"><?php bloginfo( 'title' ); ?></a>
    <p class="mb-0"><?php bloginfo( 'description' ); ?></p>
  </div>
  <div class="probootstrap-overflow">
    <nav class="probootstrap-nav">
      <?php
      $args=array(
          'theme_location' => 'sidebar', // nom du slug
          'menu' => 'sidebar_fr', // nom à donner cette occurence du menu
          'menu_class' => 'menu_sidebar', // class à attribuer au menu
          'menu_id' => 'menu_sidebar' // id à attribuer au menu
          // voir les autres arguments possibles sur le codex
          );
          wp_nav_menu($args);
      ?>
    </nav>
    <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
      <ul class="list-unstyled d-flex probootstrap-aside-social">
        <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
        <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
        <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
      </ul>
      <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved.</p>
    </footer>
  </div>
</aside>

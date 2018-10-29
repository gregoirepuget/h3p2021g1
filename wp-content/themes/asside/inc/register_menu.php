<?php
add_action('after_setup_theme', 'aside_register_menu');

function aside_register_menu()
{
  register_nav_menu( 'sidebar', "menu de la sidebar" );
  register_nav_menu('footer', 'menu du footer');
}

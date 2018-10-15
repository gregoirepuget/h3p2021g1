<?php

add_action("init", "hetic_user_login");

function hetic_user_login(){
  if(!is_user_logged_in())
  {
    wp_redirect( wp_login_url( ) );
    exit();
  }
}

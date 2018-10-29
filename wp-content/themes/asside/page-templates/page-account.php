<?php
/*

Template Name: Gabarit account

*/

if(!is_user_logged_in())
{
  $loginUrl = wp_login_url( $redirect = get_permalink() );
  wp_redirect( $loginUrl);
  exit;
}

$user_id = get_current_user_id();
$user_data = get_userdata( $user_id );

echo $user_data -> first_name;

$args = array(
  'post_type' => 'posts',
  'posts_per_page' => -1,
  'author' => $user_id
);
$the_query = new WP_Query( $args );

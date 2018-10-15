<?php
function ajout_scripts() {

  wp_register_style( 'google_font', 'https://fonts.googleapis.com/css?family=Work+Sans' );
  wp_enqueue_style( 'google_font' );

  wp_register_style( 'bootstrap', CSS_URL.'/bootstrap.min.css' );
  wp_enqueue_style( 'bootstrap' );


// enregistrement d'un nouveau script
wp_register_script('jquery', JS_URL . '/jquery-3.2.1.slim.min.js', array(),'1.0', true);
wp_enqueue_script('jquery');





}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );
/*
<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>

<script src="js/main.js"></script>

*/

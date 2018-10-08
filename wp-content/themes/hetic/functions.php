<?php
add_action('wp_footer', 'ajout_commentaire_footer');
function ajout_commentaire_footer(){
    echo '<!-- Je suis un commentaire -->';
}

function ajout_scripts() {

// enregistrement d'un nouveau script
wp_register_script('main_script_header', get_template_directory_uri() . '/assets/scripts/main-header.js',array(),'1.0', false);

// appel du script dans la page
wp_enqueue_script('main_script_header');

// enregistrement d'un nouveau script
wp_register_script('main_script_footer', get_template_directory_uri() . '/assets/scripts/main-footer.js',array('jquery'),'1.0', true);

// appel du script dans la page
wp_enqueue_script('main_script_footer');

// enregistrement d'un nouveau style
wp_register_style( 'main_style', get_template_directory_uri() . '/styles/main.css' );

// appel du style dans la page
wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

<?php
add_action("init", "hetic_add_portfolio_cpt");
function hetic_add_portfolio_cpt()
{
  $post_type = "portfolio";
  $labels = array(
        'name'               => 'Portfolios',
        'singular_name'      => 'Portfolio',
        'all_items'          => 'Tous les portfolios',
        'add_new'            => 'Ajouter un portfolio',
        'add_new_item'       => 'Ajouter un portfolio',
        'edit_item'          => "Modifier un portfolio",
        'new_item'           => 'Nouveau portfolio',
        'view_item'          => "Voir le portfolio",
        'search_items'       => 'Chercher un portfolio',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Portfolio parent:',
        'menu_name'          => 'Portfolio',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 1,
        'menu_icon'           => 'dashicons-admin-customizer',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

}

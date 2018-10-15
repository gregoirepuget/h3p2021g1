<?php
add_action("init", "hetic_add_member_cpt");
function hetic_add_member_cpt()
{
  $post_type = "membre";
  $labels = array(
        'name'               => 'Membres',
        'singular_name'      => 'Membre',
        'all_items'          => 'Tous les membres',
        'add_new'            => 'Ajouter un membre',
        'add_new_item'       => 'Ajouter un membre',
        'edit_item'          => "Modifier un membre",
        'new_item'           => 'Nouveau membre',
        'view_item'          => "Voir le membre",
        'search_items'       => 'Chercher un membre',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Membre parent:',
        'menu_name'          => 'Membre',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => true,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 1,
        'menu_icon'           => 'dashicons-admin-users',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

}

<?php
add_action("init", "hetic_add_service_cpt");
function hetic_add_service_cpt()
{
  $post_type = "service";
  $labels = array(
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'all_items'          => 'Tous les services',
        'add_new'            => 'Ajouter un service',
        'add_new_item'       => 'Ajouter un service',
        'edit_item'          => "Modifier un service",
        'new_item'           => 'Nouveau service',
        'view_item'          => "Voir le service",
        'search_items'       => 'Chercher un service',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Service parent:',
        'menu_name'          => 'Service',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => true,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 1,
        'menu_icon'           => 'dashicons-hammer',
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

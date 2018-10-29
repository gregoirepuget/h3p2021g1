<?php
add_action("init", "hetic_add_portfolio_cpt");
function hetic_add_portfolio_cpt()
{
  $post_type = "portfolio";
  $labels = array(
        'name'               => 'Portfolios',
        'singular_name'      => 'Portfolio',
        'all_items'          => __("All portfolio", 'aside'),
        'add_new'            => __("New portfolio", 'aside'),
        'add_new_item'       => __("Add new portfolio", 'aside'),
        'edit_item'          => __("Edit portfolio", 'aside'),
        'new_item'           => __("New portfolio", 'aside'),
        'view_item'          => __("View portfolio", 'aside'),
        'search_items'       => __("Find portfolio", 'aside'),
        'not_found'          => __("No result", 'aside'),
        'not_found_in_trash' => __("No result", 'aside'),
        'parent_item_colon'  => __("Portfolio parent", 'aside'),
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

    $taxonomy = "thematique";
    $object_type = array("portfolio");
    $taxonomy_args = array(
          'label' => 'Thématique',
          'rewrite' => array( 'slug' => 'thematique-portfolio' ),
          'hierarchical' => true,
    );
    register_taxonomy( $taxonomy, $object_type, $taxonomy_args );
}

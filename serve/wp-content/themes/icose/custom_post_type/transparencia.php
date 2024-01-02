<?php
// Register Custom Post Type
function custom_post_type_transparencia() {
    $labels = array(
        'name'                  => __( 'Transparência', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => __( 'Tansparência', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Transparência', 'text_domain' ),
        'name_admin_bar'        => __( 'Transparência', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Todos os Transparência', 'text_domain' ),
        'add_new_item'          => __( 'Adicionar Novo Tansparência', 'text_domain' ),
        'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
        'new_item'              => __( 'Novo Tansparência', 'text_domain' ),
        'edit_item'             => __( 'Editar Tansparência', 'text_domain' ),
        'update_item'           => __( 'Atualizar Tansparência', 'text_domain' ),
        'view_item'             => __( 'Ver Tansparência', 'text_domain' ),
        'view_items'            => __( 'Ver Transparência', 'text_domain' ),
        'search_items'          => __( 'Procurar Tansparência', 'text_domain' ),
        'not_found'             => __( 'Tansparência não encontrado', 'text_domain' ),
        'not_found_in_trash'    => __( 'Tansparência não encontrado na lixeira', 'text_domain' ),
        'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
        'set_featured_image'    => __( 'Definir imagem destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Remover imagem destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagem destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Inserir no transparência', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Enviado para este transparência', 'text_domain' ),
        'items_list'            => __( 'Lista de Transparência', 'text_domain' ),
        'items_list_navigation' => __( 'Navegação na lista de transparência', 'text_domain' ),
        'filter_items_list'     => __( 'Filtrar lista de transparência', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Transparência', 'text_domain' ),
        'description'           => __( 'Transparência da instituição', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor'),
        'taxonomies'            => array('tags'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-pressthis', // Ícone do menu (pode ser alterado)
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
    );
    register_post_type( 'transparencia', $args );
}
add_action( 'init', 'custom_post_type_transparencia', 1 );


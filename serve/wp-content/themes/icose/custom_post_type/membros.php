<?php
// Register Custom Post Type
function custom_post_type_membros() {
    $labels = array(
        'name'                  => __( 'Membros', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => __( 'Membro', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Membros', 'text_domain' ),
        'name_admin_bar'        => __( 'Membros', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Todos os Membros', 'text_domain' ),
        'add_new_item'          => __( 'Adicionar Novo Membro', 'text_domain' ),
        'add_new'               => __( 'Adicionar Novo', 'text_domain' ),
        'new_item'              => __( 'Novo Membro', 'text_domain' ),
        'edit_item'             => __( 'Editar Membro', 'text_domain' ),
        'update_item'           => __( 'Atualizar Membro', 'text_domain' ),
        'view_item'             => __( 'Ver Membro', 'text_domain' ),
        'view_items'            => __( 'Ver Membros', 'text_domain' ),
        'search_items'          => __( 'Procurar Membro', 'text_domain' ),
        'not_found'             => __( 'Membro não encontrado', 'text_domain' ),
        'not_found_in_trash'    => __( 'Membro não encontrado na lixeira', 'text_domain' ),
        'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
        'set_featured_image'    => __( 'Definir imagem destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Remover imagem destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagem destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Inserir no membro', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Enviado para este membro', 'text_domain' ),
        'items_list'            => __( 'Lista de Membros', 'text_domain' ),
        'items_list_navigation' => __( 'Navegação na lista de membros', 'text_domain' ),
        'filter_items_list'     => __( 'Filtrar lista de membros', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Membro', 'text_domain' ),
        'description'           => __( 'Membros da instituição', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor'),
        'taxonomies'            => array('tags', 'category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups', // Ícone do menu (pode ser alterado)
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'show_in_rest'          => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'membro', $args );
}
add_action( 'init', 'custom_post_type_membros', 0 );



// cria campo personalizado (custom field) para o tipo de post 
function add_custom_meta_box() {
    add_meta_box(
        'ordem',         // ID único da metabox
        'Ordem de exibição', // Título da metabox
        'display_custom_meta_box', // Função de callback para exibir o conteúdo da metabox
        'membro',               // Tipo de post ao qual a metabox deve ser adicionada
        'normal',               // Contexto (normal, avançado, lateral)
        'high'                  // Prioridade (alto, baixo)
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// Função de callback para exibir o conteúdo da metabox
function display_custom_meta_box($post) {
    // Recupera o valor atual do campo 'ordem'
    $ordem = get_post_meta($post->ID, 'ordem', true);

    // Exibe o campo 'ordem' na metabox
    ?>
    <label for="ordem">Ordem:</label>
    <input type="number" id="ordem" name="ordem" value="<?php echo esc_attr($ordem); ?>" placeholder ="1-10" />
    <?php
}

// Salva os dados da metabox quando o post é salvo
function save_custom_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Verifica se 'ordem' está definido em $_POST e se é um número
    if (isset($_POST['ordem']) && $_POST['ordem'] !== '' && ctype_digit($_POST['ordem'])) {
        update_post_meta($post_id, 'ordem', intval($_POST['ordem']));
    }
}
add_action('save_post', 'save_custom_meta_box');
<?php

function api_membros($request){
    $args = array(
        'post_type' => 'membro',
        'posts_per_page' => -1, // Limita a consulta a um post.
        'meta_key'       => 'ordem',
        'orderby'        => 'meta_value_num',  // Ordenar numericamente
        'order'          => 'ASC',  // Ou 'DESC' se desejar ordenar de forma decrescente
    );

    $consulta = new WP_Query($args);
    $membros = array();

    if ($consulta->have_posts()) {

        while ($consulta->have_posts()) {
            $consulta->the_post();

            $titulo   = get_the_title();
            $conteudo = wp_strip_all_tags(get_the_content());;
            $categorias = wp_get_post_categories(get_the_ID());
            $ordem = get_post_meta(get_the_ID(), 'ordem', true);

            $membro = array(
                'titulo'   => $titulo,
                'conteudo' => $conteudo,
                'categoria' => $categorias,
                'ordem' => $ordem,
            );
           
            $membros[] = $membro;
        }
        wp_reset_postdata();
        return rest_ensure_response($membros);
    } else {
        return rest_ensure_response(array('message' => 'Nenhum post encontrado na api.'));
    }
}
//registrando endpoint 

function registrar_api_membros(){
    register_rest_route('api', '/membros', array(
        array(
            'methods' => 'GET',
            'callback' => 'api_membros',
        )
        ));
}

add_action('rest_api_init', 'registrar_api_membros');
?>

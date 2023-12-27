<?php

function api_transparencia($request){
    $args = array(
        'post_type' => 'transparencia',
        'posts_per_page' => 1, // Limita a consulta a um post.
    );

    $consulta = new WP_Query($args);

    if ($consulta->have_posts()) {

        while ($consulta->have_posts()) {
            $consulta->the_post();

            $conteudo = get_the_content();
           
            $transparencia = array(
                'conteudo' => $conteudo,
            );
           
        }
        wp_reset_postdata();
        return rest_ensure_response($transparencia);
    } else {
        return rest_ensure_response(array('message' => 'Nenhum post encontrado na api.'));
    }
}
//registrando endpoint 

function registrar_api_transparencia(){
    register_rest_route('api', '/transparencia', array(
        array(
            'methods' => 'GET',
            'callback' => 'api_transparencia',
        )
        ));
}

add_action('rest_api_init', 'registrar_api_transparencia');
?>

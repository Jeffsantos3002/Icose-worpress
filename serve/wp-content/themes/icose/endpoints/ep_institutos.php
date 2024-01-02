<?php

function api_instituto($request){
    $args = array(
        'post_type' => 'instituto',
        'posts_per_page' => 10, // Limita a consulta a um post.
    );

    $consulta = new WP_Query($args);

    if ($consulta->have_posts()) {

        while ($consulta->have_posts()) {
            $consulta->the_post();
            $post_id = $post->ID;

            $iconID = get_post_thumbnail_id($post_id);
            $icon = wp_get_attachment_image_src($iconID,'icon_comunitario'); // consulta icon no db.

            $conteudo = get_the_content();
            $title = get_the_title();

            
            
            $instituto = array(
                'title' => $title,
                'conteudo' => $conteudo,
                'icon' => $icon,
            );
           
        }
        wp_reset_postdata();
        return rest_ensure_response($instituto);
    } else {
        return rest_ensure_response(array('message' => 'Nenhum post encontrado na api.'));
    }
}
//registrando endpoint 

function registrar_api_instituto(){
    register_rest_route('api', '/institutos', array(
        array(
            'methods' => 'GET',
            'callback' => 'api_instituto',
        )
        ));
}

add_action('rest_api_init', 'registrar_api_instituto');
?>

<?php

$template_directory = get_template_directory();

require_once ($template_directory . '/custom_post_type/membros.php');
require_once ($template_directory . '/custom_post_type/transparencia.php');
require_once ($template_directory . '/custom_post_type/institutos.php');

//api
require_once($template_directory . '/endpoints/ep_transparencia.php' );
require_once($template_directory . '/endpoints/ep_membros.php' );
require_once($template_directory . '/endpoints/ep_institutos.php' );



remove_filter('the_content', 'wpautop');  // Remove a adição automática de parágrafos
remove_filter('the_content', 'wptexturize');  // Remove a substituição de caracteres especiais

function format_custom_post_content($content) {
  // Usa wpautop para adicionar parágrafos e quebras de linha ao texto
  $formatted_content = wpautop($content);
  return $formatted_content;
}

add_filter('content_save_pre', 'format_custom_post_content');

/*Cadastrando tamanho de imagens*/
add_theme_support('post-thumbnails');

add_action('init', 'my_init_function_tamanho_de_imagens');

function my_init_function_tamanho_de_imagens() {
  /*images index*/
  add_image_size('icon_comunitario', 28, 28, true);//Slide Principal
  
}

// Hablitando upload em svg 
function custom_allow_svg_upload( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter( 'upload_mimes', 'custom_allow_svg_upload' );
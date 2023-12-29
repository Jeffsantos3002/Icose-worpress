<?php

$template_directory = get_template_directory();

require_once ($template_directory . '/custom_post_type/membros.php');
require_once($template_directory . '/endpoints/ep_membros.php' );
require_once ($template_directory . '/custom_post_type/transparencia.php');
require_once($template_directory . '/endpoints/ep_transparencia.php' );

remove_filter('the_content', 'wpautop');  // Remove a adição automática de parágrafos
remove_filter('the_content', 'wptexturize');  // Remove a substituição de caracteres especiais

function format_custom_post_content($content) {
  // Usa wpautop para adicionar parágrafos e quebras de linha ao texto
  $formatted_content = wpautop($content);
  return $formatted_content;
}

add_filter('content_save_pre', 'format_custom_post_content');

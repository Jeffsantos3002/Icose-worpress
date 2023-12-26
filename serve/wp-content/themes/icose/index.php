<h1>Hello word</h1>
<?php
$args = array(
    'post_type'      => 'membro',
    'posts_per_page' => 10,
);

$consulta = new WP_Query($args);

if ($consulta->have_posts()) {
    while ($consulta->have_posts()) {
        $consulta->the_post();
        echo get_the_title() . '<br>';
        // Adicione mais campos conforme necessário.
    }
    wp_reset_postdata();
} else {
    echo 'Nenhum post encontrado.';
}
?>
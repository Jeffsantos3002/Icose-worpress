<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'icose_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NSki`_]Jd#Eq,~:d`zh$!vh:wTQ=Z&z=)5+{d&yg*o+WwMVe=m&+<<Gwk Z6yNUA' );
define( 'SECURE_AUTH_KEY',  'xNtI)7l)Znn?`38K/cLml.oI}&o=BJyPqw;.0Gh-&bq/?29L.YjzpQT;(_f=RLvl' );
define( 'LOGGED_IN_KEY',    '[?=4~q@kHw.zWHZJ1&R>Y8[Ai7(hI>e_aPr5A7iYnU60%P$JcM?T*.-,d-b<0K0]' );
define( 'NONCE_KEY',        'u5=&U10Khbbn]+IrRG1$1n`=% -d$Q<43Y[ZULY}w^>HVn+?4l`Kpa}AI`8K4do#' );
define( 'AUTH_SALT',        'co9?{Qavc3c*z9@MgCc[<`jfP6o{s&@dL6%FLqHTUQ=o$_r={ R(c$;9~B[!D:]v' );
define( 'SECURE_AUTH_SALT', 'lSa}fnuNjUw[1`}Fs1f5P,6>=]AC0K5#9Sf?uVl97zJET~$& 6RFI>>&p=ZC52+{' );
define( 'LOGGED_IN_SALT',   'v>CzC#W*{4254DZFk0@#LH-H(R{-R5zV2n!j+Z&!HeW]dS>EF*7-sJ!YkIc7miQH' );
define( 'NONCE_SALT',       ']cL()zULsn2/,htWnL=zm&&&&|epSZ5IcJDq.{ndm!0k`l7id=!eeT=/6%o+/Osw' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

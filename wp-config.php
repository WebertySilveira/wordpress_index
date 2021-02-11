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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_index' );

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
define( 'AUTH_KEY',         '{33}NLXjWfhFYC<#eBPiDW&n-%Fe6A=JiaXms8 ]lB)^R`l.N.aok&E7+P19S?mb' );
define( 'SECURE_AUTH_KEY',  '8z;66aev(+z%S4|$<s)~OqqdX8zbD]W`_HVr`a^))ue`0Q$W9H~W]/3k8+3N/a$j' );
define( 'LOGGED_IN_KEY',    'u7vQb`n7Zf PCCeL@n AD:O&&}?] bvJE:{x8Lm8np9:>E.kj|aWJ5|v.IV|)rV[' );
define( 'NONCE_KEY',        'E|kG;&QKkl2wU^yg-)WE-m2CeJ*|H&&GV`sNwK>*RUSUVpp>3~P%n&A1]Q7B.}J5' );
define( 'AUTH_SALT',        'S_%nMJ|0x^v[aLcS0|?}4/rm%oxg<CQts;;gp|iOZUGA3%^J8L6tFt4_j^3{v4x-' );
define( 'SECURE_AUTH_SALT', 'b4BZBKhHgazW+fxKT05uiVt![|):0HOfBe/~gYPw|yPyV?O#H/:cEy*8STs7? Uj' );
define( 'LOGGED_IN_SALT',   '2T})O@I#O07}uC1j4NYfwN?PMtPvmP]eKm=WQQ=3$VLAt$]+?z0~FmH{=<RH^&GZ' );
define( 'NONCE_SALT',       'cF$0.gKH@Z<qGe{Ilg/>t5SMkWrJ(ypD|Zz4bj_czwqQRT[*O]2[N5OuHrGcwo4G' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';


set_time_limit(3000);

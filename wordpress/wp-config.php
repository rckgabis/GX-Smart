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
define( 'DB_NAME', 'gxsmart' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '6438' );

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
define( 'AUTH_KEY',         '9<T_v{QWn+$qs9$p(/hS>v3:Id,YC8C~1X&n:wZ(9-yo;(Owta//T%~a}MDsB4`p' );
define( 'SECURE_AUTH_KEY',  'Y+;Op(![8Vu$-v<r*q0o?#?Bs#w@{xK~VuW$l`FB;a4w%lZ($m9MiJmAHDXg.@CR' );
define( 'LOGGED_IN_KEY',    '2jj?o1-=Lv$3qe9;Hk2[wasw7WEe15H:p9?AG, };[:B`:y8[N2q3/}<$}/a~6gl' );
define( 'NONCE_KEY',        '?x}0|)+r37Tw[iNqo/+4`+)MCp{E|NYBd*yNjh:<E<9Y}H!seLw$,!],8/pbqVy/' );
define( 'AUTH_SALT',        '{;&l$ma+Za-Qw22JVoXj.E_XK,xdb;Mbf-s^sS@kKJq1g`YGeUNfNw~7.2J~hvA)' );
define( 'SECURE_AUTH_SALT', 'QkIvBx`]|$ZyL-#dd`nJk&S6fFdt*ii*mE/mW][Ok4i&C5g0=Mm;%&IH_)ee&31A' );
define( 'LOGGED_IN_SALT',   'UR_+A+^|D![)QYPE.cd@8g4A,Z-F5&kNqd!6fzf_IV4ATC@-Up>{s$=I[F_+,Pe1' );
define( 'NONCE_SALT',       'aaXC]4aS-6]|,S#7Q1oI8m84+D^-0m<- roY+fJ=`X5s_K,n@NklC!`pI]7JB2IV' );

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

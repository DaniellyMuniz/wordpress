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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ejcnetflix' );

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
define( 'AUTH_KEY',         'dW;@:ue7LTm)Dg Tt+aliK?i`KyLd~g6)I,k`mK!hB)FzXl`|>I9Cd2ybGD)z=(S' );
define( 'SECURE_AUTH_KEY',  'fQfkO2Rb4{x}|+M$5<70x9EvsK*;r-T4x&nR2)N~1|)@|wP:o$DN iQ.0tg9`NXz' );
define( 'LOGGED_IN_KEY',    '-~G2aS<$HPb6){]daU:^hm</pu<VO.m=#90f2Nv-GNxVFeD&mO@<[2fs/@1K<#{+' );
define( 'NONCE_KEY',        'T]{I&X*K|w.`svCy!%spUOz.B`46HgWtA3ke-s_OzH8^w#N+;2g#/[yuak~K{FuN' );
define( 'AUTH_SALT',        'G%2CrGX{Q`Nehz4HcKMa{kVpFDJ=3xb/0?6}^DzS!P6|aLYAos1Y;OB=jPy[^7D7' );
define( 'SECURE_AUTH_SALT', 'XF{zO4{<~?J~.hauqj}ch9#)dq51YDH=zA}[z(u>=%F0l=lU:/~,0SlY8_jg7i^g' );
define( 'LOGGED_IN_SALT',   'W% Hpi](vW3kA^nu)=Y8.Z)yF.+vgz60gT@c})90fXxM65kIDVX4gXd;;[6<]H3:' );
define( 'NONCE_SALT',       'OT!+!O) {X,dK1rNCu|dWr8h(bC0vz#:i>e?%5CV6IbivP,k*H]Tk[8ZoAtNlU>$' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ejcm_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

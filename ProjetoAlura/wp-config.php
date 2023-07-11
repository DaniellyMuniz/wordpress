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
define( 'DB_NAME', 'projetoalura' );

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
define( 'AUTH_KEY',         'eHu^)xRV!8fk/jf@Fjz}e[tV[{_cjM,)i`KjoYEU/ZRt+pYOh3n+N;$iP]_=N{pV' );
define( 'SECURE_AUTH_KEY',  ',H[x8~p&~OU~H:U`XyXJ};iY0hU1[dZ:S_b,&qHaIrpt%sW<Q{*^qztjqZPB `H2' );
define( 'LOGGED_IN_KEY',    'HXJ|hj(<sj-Q]U0~^W9|^HbmO4EJEIR0NKdLd^}c8ZH(ey0Bc8gUrQS-SkLVY*`+' );
define( 'NONCE_KEY',        ')y5CUH7$pP*`JFDSYG?Enm878&)qWoZ{Z;$B|70Sz0H;[*+[>&[]iz^`zI7$Vm{Y' );
define( 'AUTH_SALT',        'qBWb0[^b8YP)C`WkP2y68AD2n6g;owr(7I)1Jwgbv3{EfA.79vsTYgKBHep|0&7c' );
define( 'SECURE_AUTH_SALT', '1M!c`H~c+`/X#@wQ %<[=(}U:&5+7~x]G(A>%Cp}4](.5Q+8%AV>uH9lL5}o4SeJ' );
define( 'LOGGED_IN_SALT',   ';SABE$JF$VUc:)>;sM0;NU`gf)Gym<frG/stou4k>G-2(+a2+jwf2^Tislg+lxls' );
define( 'NONCE_SALT',       '^)z6^$A<@aC(f|}oK,6y{MZ0TI1&WrwwZZ}nB$Uef/^FYHRM_7!(~@<;%HjZI/&|' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'pawp_';

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

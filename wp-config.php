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
define( 'DB_NAME', '25movies' );

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
define( 'AUTH_KEY',         'JX4WX7hV+uBaX;:_Ep4m)@CUVVo_q3*O6Ky3_0h NH{#}1>-r`#]NeZ8J|]]ia$<' );
define( 'SECURE_AUTH_KEY',  '4>wV9 vZ|+]^]WJM9o.uf@4btL#?0+,=!+)e>@P(]@THi]FX &eJ{$|K(A .e$6B' );
define( 'LOGGED_IN_KEY',    '1zE(,#v=Jx$vtq@uaB]LJ+y~I8N*51x*>^B&fzv@+(j>_]Gh+E2pXkvZ 77Y#S[k' );
define( 'NONCE_KEY',        'mUD7iA##tG{gEaVjRy-KS0leo_UE/MIN~gH}l.;T.;gigJf~LQ(Q>~@M{: TjY#m' );
define( 'AUTH_SALT',        'PuyTU~yT^AVe:F`$5n_!>ZduUm(E=Q7N[=RIpu2v>);7]jVt5U#VlkPjgN(i8zna' );
define( 'SECURE_AUTH_SALT', '?#*b7b3;0 7k3+2ZIVWpk?3#Hq c( }U(&y9QuSBwKy.M~R8o$)am>sh>../t@Ws' );
define( 'LOGGED_IN_SALT',   '>)f8tu;Kn+FIj:!x>4LIiVs_Od`8-J+Ht9=go.ASY6ItJ6Q2U_&U2.+!+{k=2m%E' );
define( 'NONCE_SALT',       'W=lRahvvPp_TjZjW)Ps0.d93w@-aPT.bD*_SmvhsV+@gin;JQ=0M#lpt_mHqI/zt' );

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

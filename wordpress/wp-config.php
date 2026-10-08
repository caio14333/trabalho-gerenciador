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
define( 'DB_NAME', 'trabalho-gerenciador' );

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
define( 'AUTH_KEY',         'a3o]UiJEZ`D[SM8t4yg6QzI>]!4PD%%4]59PL70:upkKeNcVCD,XwM8XxcPU%|fM' );
define( 'SECURE_AUTH_KEY',  'fOKE,==1](w >9G6$Y96CB7/o=~IbnmQkwd<wh!c-&HwIp_pB#u[/Q>$nwnSAb<2' );
define( 'LOGGED_IN_KEY',    ')T1>fX#~~|MMvj3338IXL3q9Z+h6xk&L*$_Cg&Qagl.#!+s{$>&Q,+dRc-#beW#*' );
define( 'NONCE_KEY',        'Ei0.HfK~Oti?zl)>7129^eNO}8XP|9?8xZ:BW8M-0$gvN&]n|%m2C6cVTt$a;hft' );
define( 'AUTH_SALT',        'kYH!8;6{tj^i7b%POEj@;bq3QL^$IQZXB%y_bzY%np%m9vCn$oEmc>_nDK^Dn_Rn' );
define( 'SECURE_AUTH_SALT', 'm]5 g~x{/z|y,2WZKS6EDF@9uO6x|=lZ@p^`G#bafw(i()pp//L@ 6!nYqs?4=@S' );
define( 'LOGGED_IN_SALT',   'Jlfe`b*PoR.cEm{[*IC^}lPKSf*.{%,*2V7F$4XsWk9E,YAOu24{<mmC*7,,}mi9' );
define( 'NONCE_SALT',       'Nw9lz%8G3Jz<:q9FGCCfR,l8TebKSz!lv}A?/|;^)ma<{-nDt <{4 hTI{x1@]{%' );

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

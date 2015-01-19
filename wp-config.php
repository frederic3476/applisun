<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'applisun');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/yB+Qy;g>}lUz}~WVH U<,Z~>Vyb*`ABLn-T|[=y9^T9bfSt#`>^v6eDneci8=#{');
define('SECURE_AUTH_KEY',  'SfE<_kSQ23pIN+d29c4c._jV2c[+q4fR6x!s:(,|X~|hcNc+?[%Kni|o1;H)t*|L');
define('LOGGED_IN_KEY',    '[ -i[D[X8fEc3kV|4UjuhCI?4vAt=pM-xC.a3#/1I/? x_SRD(7,U|N5hc]Gj:>K');
define('NONCE_KEY',        '-Qv|_L@w2%0-fTtoY+KrX,ug|_lR^-ZuML:-h:%%8vSlQZvcg-M6J14#D?)MYnO~');
define('AUTH_SALT',        'L|jhTlQk-9_0z&T-c;]9w4AHWZAH^heTW$AFH22p 0&wM(ynp-&&b#rFG:v[D|SV');
define('SECURE_AUTH_SALT', 'pb:&>[/I|KzlNxgpTx;~_vGZ{=cr=q/DM.oI{H+W)y-(lr%|/oV/_abas:40+,r6');
define('LOGGED_IN_SALT',   '<U7+wFGm,<p2Dl`B^H&@T-*x/$C-bG_rFW$a-_yF|hV2b`#:`Yn|CD5D)&)5 `],');
define('NONCE_SALT',       'Bd=OXf^6kta|+MA(ax*j+RBv<#6h._7pI[C*/+mn&:j@?xI+|e$2p+T-?<WPgp8J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

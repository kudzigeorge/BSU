<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kudzi+aalc');

/** MySQL database username */
define('DB_USER', 'kudzi');

/** MySQL database password */
define('DB_PASSWORD', 'cig12bit');

/** MySQL hostname */
define('DB_HOST', 'sql.mit.edu');

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
define('AUTH_KEY',         'o,c#s;qn&:9)uNi;Wf~Dc#+J3e30b(*al~ikvCyK*TFm2)1 .<kwuxspYOfZGl`y');
define('SECURE_AUTH_KEY',  '%tT`f1Xe.8w@Qe}tPY~/-k&J`vm;z5]Zkm+DumIv8KNZH`<Yyg+/t eF_lC4H#J.');
define('LOGGED_IN_KEY',    '@Em+#JhKQv~QFrjYBr/U_@=(|KJ*|At,7+`lJs0EnseS:vT=$RXw!f({.!9zzetF');
define('NONCE_KEY',        ']2Vka#CEq!_QH+!]cWQZcPO{8Z#X$<z$.4xzd(NehS3n|pUaFf(2)<9juU@aU|c/');
define('AUTH_SALT',        ';soF{+Zx !J*zdk45B*_uGC1)SBPF11,~iZ`@`6=F;8.0nsOZ5INN/KSFDA[uj{~');
define('SECURE_AUTH_SALT', 'af5u4uWDTh@z81Wi?qgGS&CC-n7PbsF,Z;OQpyMv_dmoTnQx<5+cE.OZNYY^zPs^');
define('LOGGED_IN_SALT',   '[),&XX;]ZOL5WB_1Vag.SiVH):uin24AA>h.Y3l2@RU`a17_RszE()(fIi*7}zY%');
define('NONCE_SALT',       '`^/TTB]/gmS!:28:Gb%+77m. Wn<-G9/nd;2fGB4h6KJn?8,]Hc+S0OXYS./XwP.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
define('DB_NAME', 'targa');

/** MySQL database username */
define('DB_USER', 'targa_user');

/** MySQL database password */
define('DB_PASSWORD', 'Rj2AWcd4aLKvuyVu');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '{8U>BZMNsVSgzd_S6d9Jn7]N[Swuq`((U5!=,OYzhy%%r?+e|<%8Kz7:LZ-V}T:,');
define('SECURE_AUTH_KEY',  'moFyu {4&1>`UM^ok*qU:NLeU2>t1Qd*VbiimYa[dk .T^V}>M`9DQhZ8BgSc8&?');
define('LOGGED_IN_KEY',    'gv|yg{1JGc4xDA6=iA@(H?!.Fl)tu&vO$:6Jzr-&p]#a5C#cE[TQ$mAy9(#`1DU5');
define('NONCE_KEY',        'a{TJ>&u@zcF;rE4T_se$a9ZRTqOIdSH_?f(dkDzO(jQUEotWk7?f$z!28LgDBwD#');
define('AUTH_SALT',        'cBF8O#12NqD.TyC@ZP]^&1&`jnJW4W5]Lz4M<M7cNu*R#P2}#@aNwwCR!GcQH^k1');
define('SECURE_AUTH_SALT', 'l9Nwo_!2hwxFX/`o%YqNDZ+r@}q0!g1j1Qtn?f^W)rV9^ L:nt/BTjOc|RAbyj?0');
define('LOGGED_IN_SALT',   '8H#oPaN-XfE-RWD 1~;m48;%nUyl)Q6YWmVQ?Ba<Rv6;=e7mv52*YqkreRvZN:)/');
define('NONCE_SALT',       ']4HWk`npu#GylG {/PX;_3QrTEnEo7p>)04;XpoLFOiH1@4 7a.raG8yX<QUdyxS');

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

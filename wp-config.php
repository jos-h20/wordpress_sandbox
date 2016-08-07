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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'xTpS@?UvPR%%~u@/5~7Nq.1`h*`eTX6 y4E(itx<>?L>s,MUsX 87&$@@9qOE,o$');
define('SECURE_AUTH_KEY',  '%P!UyzVnxp))VOb=S8}_Y&38)KQ#,TZ(NjeH[?#B.3uC1&kWck c_IM3xWTO]L[P');
define('LOGGED_IN_KEY',    '=^a~ZYKFMF3}rALSdlNEWmIi[i9Kg0rpFu`K{H3(y[bk6n))=k]j<%(%]zob +DI');
define('NONCE_KEY',        'qD7RJhAu0VPFbNm5~wT<+,K~WaR`Cw000lNJ&/?=mM&k]7`B6OO|2)5q_Uysd(%N');
define('AUTH_SALT',        'SX$}}d2 %>F#f}<^<0,?A@?j:}QKvXr.seeJCLo;KY4+kORXVT@J;k=U8u-Wi`g>');
define('SECURE_AUTH_SALT', 'k1Bc{w/Jb}YqSgxkX{o_ (pd!iKG 7@M|!xle-y6m@.{6q,hd9u=+,c!tHjh<7A%');
define('LOGGED_IN_SALT',   'S(I`/RQJQW9ZNfA~.uKzj @HHJ_Zgee8_D?g|F0GY+]wI/q.[yi<Qq-[1{(Ch;l7');
define('NONCE_SALT',       'zAn^sM6ZqC5#YFjTIRg VSA|hlP_z,0i%MXm#.1<[@b0)<e$Y`Mk#:Dn2*BZxa)`');

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

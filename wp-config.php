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
define('DB_NAME', 'desafio20');

/** MySQL database username */
define('DB_USER', 'aincatoni');

/** MySQL database password */
define('DB_PASSWORD', 'otaking25');

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
define('AUTH_KEY',         'iUmiS>Mm1g2wAz8$t@VA}R4IzsZUg|piulj??5kGs,MFH:Jg`J2>!lDo^wIA-FPS');
define('SECURE_AUTH_KEY',  ';{)Cg}*yp+%f7C%{:GAE*D#lgWGDkQ/[M[d,nD3!QN>dC#M7!759C*qvvx~_B5s}');
define('LOGGED_IN_KEY',    'm$M&B(Yrj_N9oyu%Dh.0m62^h>[Q;o1WyK!~DST.^;cZQ./J7:_>{`Ghy6 Ace|i');
define('NONCE_KEY',        'y+%UgpDA>O{K/< 1SJtQrOE*!5>R&qgzh!~GCJ73SEQ-:$!RBJ8k-<zBFL~Ki.?0');
define('AUTH_SALT',        '.?n 9ZS<DQa!=/AT!9JRgj7##dpIfr06}g{|?mIncBfC#fwwdS Rj$WtsM%n=Y`7');
define('SECURE_AUTH_SALT', 'hs0ZtSrZrIbY~,@;Td4PL{Mm@;6GmGBjxNXf+mNTVKq/.?*SCBZw<pCv|-qhF?^]');
define('LOGGED_IN_SALT',   'Ly7cNj^TO>Ua3Ya|l !fOKuZU0Qy|du$__(:Z$ZJNeN,7:f<tu^{b4SqCOBe^gD~');
define('NONCE_SALT',       '|h(V5/G5t;6W)O8iEDaD5#X2(o]_ehjSf;sCOO8Ym_MUl!R9#?3N8TUnQj#]nPSd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'df_';

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

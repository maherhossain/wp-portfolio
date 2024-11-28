<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BFK&dw E&Fh&$AD+medWRBHyw!+=@<(8?8m$Y*IOg^Kjg)O5shV; q+}8//Y[9<y');
define('SECURE_AUTH_KEY',  'w_4$MzSB&-BiM#-3`$5=a.mb:qhvz5LN;AT$oi5c8wc,74BC8/:h!k+$y$FMDFOx');
define('LOGGED_IN_KEY',    '#Z{6+@gIZ~&5d+r^9:_6.zdM<C#.>Sz4Gg@fh=X+[hmy~l/O9m|0jdKY@C8,aNGd');
define('NONCE_KEY',        '0FK$.x_]JbeiH~R~Qpv^~2bscRYjBPXY`O6X%W^qZ^jf4~ei!T~9c9!J<.*Y<jtA');
define('AUTH_SALT',        'W7Hm+@,6%;l#h/5z%?9)%hU~01O4e:S#rN~i?km54Q<?j:?Q1+fT$v7]:u,e)YB3');
define('SECURE_AUTH_SALT', '$  OwkJ;UpK`|6&OTwEHb3#.bys313a>x+M1aVQ9wC_y`oNmNRvz#?NS% i&:H?P');
define('LOGGED_IN_SALT',   'K$]=W626QP,a;H6KRn3FGA[iozO2N^[%@Jh`dZ^JRx^cHyt6V]H`M-;+{$>I88kw');
define('NONCE_SALT',       '#*Th=rv6z| ^-}bjRGFc6_1iE>O~MgQ!03Fd:XkU51##IFJ)&EhF*MaZpAyma9yW');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

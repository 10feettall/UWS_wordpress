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
define('DB_NAME', 'UWS_website_new');

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
define('AUTH_KEY',         'gqsnRuV=E~7H4WzeEVU9`|()wQ8WC9vMp^&6lQe,QSYC71#5 Zz&;?^e9h=3&/`n');
define('SECURE_AUTH_KEY',  'o6.}/Lk0((2#i JTzgfiWj<GX|N|DD~}MYkQvIuE@kn<Rno xr)T}vR|L7^K8#Pa');
define('LOGGED_IN_KEY',    'Bn7bVX0=1wg_]WxWh<&HN!i:SHu<QDUk]95#s)a2Z9uB!.Zc4Hb0ZiW}|M57]xD{');
define('NONCE_KEY',        'T<%6W*[H Ya3G3.1aeu,=nkKE8nTIB{cjWNuw{sc8~FILdX*IU %(mY#XWIK-#Z;');
define('AUTH_SALT',        'LN@&$*MTsfjqycnyYiyo+$k_[OuKOF&jG=Sf[ADo8IlY3Ifn#U5R*M^;qd(|CwpJ');
define('SECURE_AUTH_SALT', 'mAD#9G M>[z3~qV>%4<nZOxXei1_cR7s&:7{?G]>tzJ[Mr1l$oYqro,=osWt!..Z');
define('LOGGED_IN_SALT',   'ZxdY1MRd&FIv(oN@#1B){ZF aOzz*=zqSP*o<x5z{gEOJ|}D:Iet! +tW2g;wFZ<');
define('NONCE_SALT',       'l^QoeP.WQNi1-U$]zK7h:X6Ro>/fD7t7^POg%/*GVH>]/2;@Lw+zWE?HzSzB#IbH');

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
define( 'WP_MEMORY_LIMIT', '96M' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

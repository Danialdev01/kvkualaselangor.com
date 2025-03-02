<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'enpdRVIgOERqRVsuMWxLYUVjcFgyRFJUaDoqNV56dW9BT1o5PzoxcFpYSXBzM3glZzRoVi9FVXMxXiNDYXg/SQ==' );

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
define( 'DB_NAME', 'kvks_kvkualaselangor.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'danialdev' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '!hNk/i?~;PqF:&&dRv~u$fXGX=up`F<#R{ouhr2dAAL:|Q;kFn%y)Axrh0M3r^gu' );
define( 'SECURE_AUTH_KEY',  'v#c>qnAa1DrG_av<13=Jd:z:Gv [mN4rt3r//zVc*9/r_S}pkzre(L8UYrD4ai[$' );
define( 'LOGGED_IN_KEY',    'gad6)[Vqd#XqRh3(i2Dl1MlM8H9~JRZwhd }/$B)FG ~wjvY+#YWT}RJ;Rn6/(8!' );
define( 'NONCE_KEY',        '2?~u/*U(eb^F=[5jTkNmgYcz*lOleI;b:Km>.rK(W_znR|s[5GevcmtJ^e<NuW$J' );
define( 'AUTH_SALT',        '3.]?l+8BY0,2PhTCJN70N:Ql=-`xEKft*gY^.qR)NTG+8[t]Ml`,.OCN,1`4N7-o' );
define( 'SECURE_AUTH_SALT', '{DzEnc&A_Ek&heyNpRtVh;.K-B|;59EMsV]?pIGLz~!=e8stwxZFh4mU7Tw3H(90' );
define( 'LOGGED_IN_SALT',   '! wkN<PU7{gSfq/FUc<pyT)WKJT&W.mJ+~YI/65M2j&=y/_]ETLE,PysU6-J<:M{' );
define( 'NONCE_SALT',       '/{t o6qs1O9V+f+TUS-b+&Z4?[~y.X.;U%(N[!JX<L_XfQ|jG/GILpzF|Dke9BW>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');
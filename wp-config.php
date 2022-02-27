<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_anyway' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'PgJyAYVjl_wM`p+y`35J/A4t+{N.GQU5O~@atsI2BY@Q7a.hx)^}7l&EkzcQ,+|c' );
define( 'SECURE_AUTH_KEY',  'X^1)?NdutVpjyd#>F3U.xm4+7f_q5N~7}(zQ= / XlMuP*7l{%&4:j]v)F81wS.2' );
define( 'LOGGED_IN_KEY',    '`pJBA8[gBu[t2THb(p&fK{+O=g%b~lwldyfht ~QNS1oGxU.c.Cn2[h:=fJ^I`<:' );
define( 'NONCE_KEY',        '(1+?JBsd`2<?#zF3bwnA.penzOO:P#Z-S8,^*y458x=!mAFpL~`01Z%-N%0g?8@f' );
define( 'AUTH_SALT',        '@!/OI/!I}oKGaW_;eVJQ(pQxrI=3OR~NF>=k=g{+fKw+M}J^|[J<X4N*e*z7Ml@5' );
define( 'SECURE_AUTH_SALT', '- 3ZsPWoKnKKkL2!6~yM5IL{L:M efMf4qQ1B7~{jWA6gi]c>xFA 6vxbM3w8YYu' );
define( 'LOGGED_IN_SALT',   'U.De{UpFoY>oB-^QCD()`;3L_PauSMpYV9uPO$_%MP#)2FiHNd.UjFbM=/]rk?Ml' );
define( 'NONCE_SALT',       '0ss/(CdL2wzMPe;jOgFi`!fRZ|l#~,: !Os6oC)an9(W-pZ8wAtiX3g]MW9xGH|n' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

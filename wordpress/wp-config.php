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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'KDBOLA' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?wADOM9tSH]X*_gqr_|0i?mqA>J1jM:UcG1<rn]@2Auqj 5{Dt,|ImviZ#9I tZa' );
define( 'SECURE_AUTH_KEY',  'ic;+Q<{Y^K/Tuc4D2<g/c4^?@wpI+gb9RSO9nGt|Y7*uX%:zlHd+Xs|6Xyir<sU3' );
define( 'LOGGED_IN_KEY',    'ucMsy1 j)z[%e)8ZME?@!rf9TJz+)!mx7a39.@@gdONZ1Rsen|=%Q>0iEZ(2S6`!' );
define( 'NONCE_KEY',        'aAr<oc+l08J>+_Z6}5: `hVFf<^{W>`L<#/yl~nn{@JuXs1O]#28dlSc_:aoBCUk' );
define( 'AUTH_SALT',        ' <Q?[!^oWO9#~z Z>35>5V)]o!ZRMXL3d=pMAEr.fV&<MDRuXqXK#KA}L/dSn[l4' );
define( 'SECURE_AUTH_SALT', 'KnU:t<]Dj 2*W(B4;X +:8T*f4OSHh8Y8E/1uJ],)zOLuaFV6^)!Cy13rPVBm$S]' );
define( 'LOGGED_IN_SALT',   'Kh^fye0,vM8X>y/6Q(Dv%OOKuQx_UHIrers>:Y+EzZe0.PS.3ed@%N2yh! b:(/M' );
define( 'NONCE_SALT',       'nAF]r-?HsA0S-_!DyA=R~!r:Wv93//lG^AG[W>2X29w)e$IFah_[TXL*x)Su3{)K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

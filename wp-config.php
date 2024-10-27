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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iiscs_conf' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'An1s1@1990$' );

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
define( 'AUTH_KEY',         'NSDN2RAh| 8c.p&)c0q(l #&SSw[7_7b.qhUAtSkGtB@d34t`?d:#)~Uq7kzq9Rv' );
define( 'SECURE_AUTH_KEY',  '20=BQRrvyaff}d6~ni|;`^%Bk9y;D^V`Mb=Ai%5g6B:l?kYh;yl#/AkuNvm0Q6He' );
define( 'LOGGED_IN_KEY',    '=bbm9M&>J*|fxhusDAj4_8QB{U#y8(^UP6Y4 Y,6>^.q<&VOLe4s=JgkDHWJ2^>d' );
define( 'NONCE_KEY',        'u(p`g2<*BBqz+dj9-jMFeSZRWfV;epBj]umpgBfMDm!bB&aR<D(j~#2yWwv){DS~' );
define( 'AUTH_SALT',        'wXOb38KwMEnvf:zo~&rN%{dCpaoQ0 Kl,#)t,g7O)7ttCtX;p(h3ROUX)`~.i+/f' );
define( 'SECURE_AUTH_SALT', 'lZ%_VwK`aY/NMxfip{`f=/HvQEbLoyt,;Xg!824`:qfQbZ:Uxw_ryk>(>JK9ne0#' );
define( 'LOGGED_IN_SALT',   '7=8e%CbHQf@e5&hl@m;PxffOS!NS{40Ie{$Ap=ikhw-9uOQl#o=7Lsh)IbO)CJK,' );
define( 'NONCE_SALT',       '14IgV.}guBi;GqP0-XQ/+kj7@qj)sXB2>l|sIG`M]G5`O_/%tS2(0u4!dvk`v~LI' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

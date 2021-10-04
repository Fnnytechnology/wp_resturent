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
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'shop1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tuhin159@#' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '~hu>tEGW_?~T$nquLNV]Sy7;A6ku4mR2;UD{*?4=p-&&<isD6l?I#yG2)JMiUWXY' );
define( 'SECURE_AUTH_KEY',  'Blb<FJC|{dqqKy1]EX~ij9AS?h-o<ZW?t=r)i%:{rXn/=!lZIei6hlQuWdGvVtQ3' );
define( 'LOGGED_IN_KEY',    '_pV)_3YD:3_?CWT*}gMjvl9|Vk+~bY|(.56I:9ZJ8^aEcH*R%48^(X~u6AQk._`P' );
define( 'NONCE_KEY',        ']e<=X*dJ0ce9GN:NOKN%&KF2{s&QQ1]7Ox,&4Hwy,|1,0uIX6p_XMkrmf;7CBd`6' );
define( 'AUTH_SALT',        '4YV%vo,ptFwB-Rw|ac2 3d-hq)&)0l=8MMzzgrL{@=ka&Q7HB+#MgCsqJ>DbY^=&' );
define( 'SECURE_AUTH_SALT', ' pozHPO),8Vc8XzEmU2YqY6+Qdq3E[3A-Up];-1iOyT?{*Wm>eZX&r{ $syKhY6v' );
define( 'LOGGED_IN_SALT',   'bD^8N=m0^,H6!E>y4<^|Qp_!v-B<;^upD;_oHCShE.$BuQy1VPS 6V@ Iq+kU(4(' );
define( 'NONCE_SALT',       '*mtDai:Jw|=}/a&Dp@?C *].grA.+HipyL/0u$qKt.tpS,.IrM*(8[O*s!b{`LTm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

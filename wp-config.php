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
define( 'DB_NAME', 'gimanaaja' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']~|94KCXr}Y[.zu`U@n4UG~P*.2mDv7r5,pt_>GIbS6@2dC#p{q2cfi*9{fZ#!k%' );
define( 'SECURE_AUTH_KEY',  'e^DfeNI6r__$W&VNU)fGyk$eoX+=+qJTk*v[kIPTtL94>dBVQfhSz`g5-AKOyo3Q' );
define( 'LOGGED_IN_KEY',    '=3-2+P+k>l.M@h8VG7itLZ!,IM^j@Eikj]4zHz5CrwJ[@RYecf[g5uGO9]bN`q1*' );
define( 'NONCE_KEY',        ')8n<jMd4d5BL;o IAo_-3&0(q+[IykQP]6-nQ}23Y$Vf=|NGzw}(#EkZ!.*LNP6d' );
define( 'AUTH_SALT',        'tHXg~O`Z7aC6tr-WgbVxZ KzCT^#&t)$W{>RZI>cr.e.J|qctrvh68-z-[R5SL77' );
define( 'SECURE_AUTH_SALT', '|*Un7x7js(9K]pI7Ka#!SSQ<X,Kh>$y@4pF.X1F7G49ymhv@agW6we`n(d{|tXJe' );
define( 'LOGGED_IN_SALT',   'PSEJDmoE,q`O]4p2)RuVZ-Qej] Lx<VD&{^5B_p&QEgdm[9@4P9!W_hI?c0%X[8]' );
define( 'NONCE_SALT',       'UtQvQ_:33v|cCfgUz^<FgKLZ|>GhJ[!]z=-e3}eT0<qYHG<Q5%YhF6Jt>p/X;N(6' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

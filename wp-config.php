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
define( 'DB_NAME', 'Elkiffanianet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ER;svAR=euaV$w:OQ^BZ26{bK5_giH:+?RZ6,SCLEuzuq[UpbzBRFZOSCz.G_$me' );
define( 'SECURE_AUTH_KEY',  'sjI4G0eBJcI,-s>z_1koF6p IEPh4]ra/QFfF_cKWA6G+f|W2fs^Km@ivlL41@-x' );
define( 'LOGGED_IN_KEY',    'd=GkOwVc|bkqP)ZV7[Sdh2jkm=5~ULvl0l=t/b]$s?Es|Z:(X9UYNuD||=(bFgWb' );
define( 'NONCE_KEY',        'O9fO ]bW021=wCio@oq/(+Dw/AQL<mW[j-4yxEc Ago7JNS%LF!oN5=`RC<9ZZhx' );
define( 'AUTH_SALT',        'n`]2#{?899%$U*J~mZ7vWldRWBu A d0g[MtJ0p}6I&*fj8oC3cF{Lk1}s`rtUoG' );
define( 'SECURE_AUTH_SALT', 'G[b-M<$P]ZsC-a*Z6MN>d0usC~&7%prt-m|F!|U t68}0RMkse^/bs]JSI;Bj^N`' );
define( 'LOGGED_IN_SALT',   ',H3bLYiw )/72]@o:h<(8&O2NbF<fMUKMJ_C5KlRV]E|YWz*4^pkZ2+2]5KcI$nE' );
define( 'NONCE_SALT',       'YJt_ P[[JEo;FyvDLxjM ks(HbUa1ry(w1dURQ.Lc<|Czr]k0~CtH~!f9mtMk@T`' );

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

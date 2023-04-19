<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'fashion' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'RNIu/{)p[{-T%C+f5>X/WK!FPXR(n]MVyl$rD1pg(^=d1Hm_IbT4ZX)Bui4?2<,}' );
define( 'SECURE_AUTH_KEY',  'fg=mh~^7~{4&~Rt0j<HpD.5sHh)nnb(jL{t1|l4[T1nt]HXzI2FH</xVf3E}$YNU' );
define( 'LOGGED_IN_KEY',    'Oy:8qb+.kmAAu0],bhgv/CKz$nVs&H+vRHngU[$Ej.0yJ>bynq2{$btl`ih^a+xQ' );
define( 'NONCE_KEY',        '?Z*qpV|1X=xzv$G,#iSM=o59w=YCp(kZ=`La&uMiu9vLOhRgAZ?tVss-y(+^gGX/' );
define( 'AUTH_SALT',        'vj]sGq+X,N?J-/#|S>e*uysOxyu8-1#T  pFrENV!N0UC5qcB+#mSKBj:AtQ~GOI' );
define( 'SECURE_AUTH_SALT', '^On![,kAY$8.0bX{Uc/(*{Xw4pWiWxgf<enQ5@JHf5C9G:[,04K5QYf^7]{aTKQP' );
define( 'LOGGED_IN_SALT',   'isxzy;m8QX*]w>!3Kv.]x>7E5`8VTouJatC*w?W),@zF7[t.8QcpD@VP@rw$;i2|' );
define( 'NONCE_SALT',       '}]T;T@xn]>:Qeq;NJzWi($)huoU1_P9mwpR+x$LiUa,KgdWWQr#Ar!93k]`<lRX1' );

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

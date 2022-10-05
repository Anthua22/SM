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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         ')%a#D/s@aR,zoaq5H6+]+7= AI4tPf-}eKP0xyp^0sjdR.i=V;.l^UI4SL[DuQU5' );
define( 'SECURE_AUTH_KEY',  'OxGf]J&{23_Sn*8|>sTcdXF`mJFc5A<2#~hc9fVyEj9]!w,kKtG145u6~SUEj{P|' );
define( 'LOGGED_IN_KEY',    '4BhOefe@f-L_pj^XaDfPsu}uzujrcl^EOgKQBTyfOv)za-%r{1PpYYx)K44Y0mdv' );
define( 'NONCE_KEY',        '0UQwB`k_5NHUG_Ah8X*Gm9GltUuSsKDN&)2Et;BDTS#USv>Is@N4tcJj*fbOp %_' );
define( 'AUTH_SALT',        'p)PLvg>}2,|%ehc3{O1wUie/6(S_;OZq{,]?;Ri9=q!Rv~K[(P=(!!s:n>?~chQ^' );
define( 'SECURE_AUTH_SALT', ',bc-#dASr&`8Az`6+@dwW|.r>3]rDA{s)OKWHcQ+|%LnIE3uGM;r*RFp&CpThICl' );
define( 'LOGGED_IN_SALT',   'Ou]c]wSY*KH!-%DvzTX>f/GHu`aIwiey|!%l:al&u,h&ARgDn/d9Y0q:NJ^^rWi ' );
define( 'NONCE_SALT',       'j.}qU,j5QT]Ni=ca}_QNNmc[,WjqZ q_CmvvAi{z7A4JW.zQ|;ycangHEaV*FfW`' );

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

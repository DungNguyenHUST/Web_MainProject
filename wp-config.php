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
define( 'DB_NAME', 'siteofdung' );

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
define( 'AUTH_KEY',         '>sdA$d7i_K~|c?H91PEAm_(O`0LYH${ufl5=gv/f+lcL8]rjCf^*BMMm#o9mV@xj' );
define( 'SECURE_AUTH_KEY',  'Y9NUj25W?&!BAY@<x;pbu*<X>iVe+XMVh7; />^SJs2lwMFfCAIBHiNE/yQ<+g /' );
define( 'LOGGED_IN_KEY',    'j?z/@G`-3j5{R]/P]!Z_6YxbaFkD3h3VlD5SPeLa75!N$Qn<qr6#pUVo34 W(hQp' );
define( 'NONCE_KEY',        'YQ?YYgpC}Poq;lVaN?c~BE/xc/N}O@bYHVn5ERge)CyrHU?#v{m0[ju6-nJe:Ly!' );
define( 'AUTH_SALT',        ' H2r$&YcShw1TP@C<TC:uqZPuceMG3`?jrsBfTMhA1f^nw#z&VH XnnKm^6r ;fZ' );
define( 'SECURE_AUTH_SALT', '(hU8/lIFDwi#I^qN6y6I5sq4tY4vLdeKQgtwu&Tn)s[)z)wo_hhvPr?$ub~$d)1S' );
define( 'LOGGED_IN_SALT',   'EYTt1ruKOR<Wl*nP(|usoE[4Xh|qI^d=ar6_kru#`=K4k2.aW97Zwg[D`p)f7:;.' );
define( 'NONCE_SALT',       '@O{d,rq{oGsf67V8 <wz2i,8x`KO7nd(E9NY^K,=a,v1^>1i4%]<_CwsvA0@T9! ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

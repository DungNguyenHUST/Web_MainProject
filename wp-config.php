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
define( 'DB_NAME', 'for_test_only' );

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
define( 'AUTH_KEY',         'FNf&Xd{_xk5Cg4)pa;;yoHb)}D?4WK45kx#&cD^{<P-soVe;Y` <+{0;SZXrcd~c' );
define( 'SECURE_AUTH_KEY',  '&L?Jh=ofG<8<`L^z@Xp0LRPUYj)!R5C,bX;HTBGX=7)).KhWjVt g2? 8;oe)%?V' );
define( 'LOGGED_IN_KEY',    '7f+6~Xl@+@g2qZ^xkCTPN^(tS#MYEN&(QsC)3v.!)q9|O?0Elihu;AU;xi6|;sQ`' );
define( 'NONCE_KEY',        '6]- rr~8|V),Eo_LH3@c7n;-2JhK{>-E7SK!dn0N-dm*7ECvD]xr<?1M^w1`T!y?' );
define( 'AUTH_SALT',        'c_-10C#PKQA_{ijYn#T~BhELWuJ9_s`7{.Z@6f5$k;[s{A#szw|[mfxVjvUE?%S9' );
define( 'SECURE_AUTH_SALT', 'q|mw0|U:8/imG5%u?Z_qvk1td:Kpc*n[p@}AqF[6qmhP&kWHMN#mfXhv_hH.a/(^' );
define( 'LOGGED_IN_SALT',   'x26b,2%VOPy6qH@Ea^@7*k{>Yg^X`pg/e?QSwC{.|31A&yaf|L[}SrvSr3bZh;9>' );
define( 'NONCE_SALT',       'HG}#@<fmmF`R=a,Lw76sIeM_d<kB X`|dl[XF$6w):mcn~%L~NhIGiFkXy$pUz8a' );

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

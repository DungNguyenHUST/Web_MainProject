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
define( 'DB_NAME', 'dzung_nguyen' );

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
define( 'AUTH_KEY',         'Kqxtsl7: yTuOk$P3)R`gxRG^5rEyx*)Np0L|vt!:h70j1e^wds7zR+7X@;^(<Aj' );
define( 'SECURE_AUTH_KEY',  'obo)HO0FI=STRVGQ3e~Wz?#m3|<-e!brRl|{Bd$V#b;.Y7<^.2yYscKB_vS/V*J1' );
define( 'LOGGED_IN_KEY',    'WZto 5kI9V%R?Z XCpMs=Z?QK4m=P7}o]d6O~Zja2[l)`o^_UtTJDbj$VmSyd,Lo' );
define( 'NONCE_KEY',        '2=bD-Ez1Fsi){^)G HwVjHRS(=wm&val|gMh@`beixAWeAJ~R0p/^hRyy8<<DjIr' );
define( 'AUTH_SALT',        's-;w^l>`hXR$0Ol1]dswqhL@ZjgBetA1_d9JERvk{},`NpFbVLK8|yPT6<AqrwIU' );
define( 'SECURE_AUTH_SALT', 'Yka!RF,in)7chjnW$c{3)rl{9arj(=}>Rwy~~(3~v]jVQ+r[09<33Dv|Zc<Y:}LG' );
define( 'LOGGED_IN_SALT',   '|_m&!XF8P@^:bs4Agwh2O/ObEiY<3*X)<5_%R7Z{T<2+sp+6VxupdHWjaDC]QCL|' );
define( 'NONCE_SALT',       'X,5*%S)>[yzY:8`>QHk-u0)HRK!>ScHE/$.^E}=J5`+09&T{{0hmTfbe*{ndU/W0' );

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

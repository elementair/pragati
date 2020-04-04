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
define( 'DB_NAME', 'creactiv_pragati' );

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
define( 'AUTH_KEY',         'HoO[K79cIfuvMDWur.>zXKDG):PHMP-hmI)LG*N?9! $DtVJTAqr[xx{5TjsJa g' );
define( 'SECURE_AUTH_KEY',  '6:=<SC:$a]XClY1IuwO-OSP#++Q*XJ^MD@.f[4)/$)TEH4O9qlyNlRA/~&[&P/xf' );
define( 'LOGGED_IN_KEY',    'u]E3>^]aQgKF;S11R@aWS}KF)xOA|2 WU2?HrO8hX:)nx?@[N5N2Hz[X1;{24;<J' );
define( 'NONCE_KEY',        'V:8U(};fY`*l&8q4j*-FxF_y)|Y7yHt/oyit^;ooe_eJn~(pDU0ysJuV{L7Qsen}' );
define( 'AUTH_SALT',        'hb_0>N=g, eA)<DZ@@8#r^Nhq9fsKI|Zo^kLjVfX}-3Lxj#4QvDX}M:V*up#!zh;' );
define( 'SECURE_AUTH_SALT', 'SX$mX$^]cwE]#v`v3]Lsq[dZ[#qbNX{6fXaYkURJv?]YRg%C[_>?%FYiC$Pt8(W[' );
define( 'LOGGED_IN_SALT',   ':P!#rIcT.*zAdv&%jDz;rflY2Qg$Hv*B`rl.It;oq:6jg}g5rM:kL:^nM.7q|UI!' );
define( 'NONCE_SALT',       'ag4KSd4rg3ABZc[g_|^;X/DTr>-|JHpXOFGXZv:2jkw`#>j]}72,HkGLN@%Q=?jy' );

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

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
define( 'DB_NAME', 'wp_blog' );

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
define( 'AUTH_KEY',         ']$ZBC]@hH;[)YRL1x[2L1.0bF1`<d:1Z(q?5~]M/pp^~>O>Z3b?,<bMi4u3nID7x' );
define( 'SECURE_AUTH_KEY',  '30A98?*8QoS$mup[:-4L!YS?QHOGqV;R:. .-C<^/k&+R/j@YL9hS7<8M{6!w1JU' );
define( 'LOGGED_IN_KEY',    '2mp3UeT,z[dDTdr6]U%-8vnd(!{u%&!Oj (.R${5$p[UJ!|`!aqbvE[bQp(nT}b^' );
define( 'NONCE_KEY',        'R(MEkExUM+a |1{RTs-!:7YY1/H2H(1o/zT]wu+jE9Q(pRph>)dHdNMPk$LP0SX{' );
define( 'AUTH_SALT',        'H.d7JuFhBf]we57}p-P)eDw46PL +e70W)*yyu4Jw@;^LH.up>Z&g>pWMx03,#(Q' );
define( 'SECURE_AUTH_SALT', '?~7CdZ9qu1$gkxGO:!~,Ceu&$eG-3gVteJh:&C+KQb,D$*e`X$a;{kr2*17kVm]b' );
define( 'LOGGED_IN_SALT',   'S.t9q.ZMd.[I9a~OVS+AWL8LNa)sncC*bktXHr4>Ugr]N~CO%hD=D2^n.n7W%K2 ' );
define( 'NONCE_SALT',       '2imM33j~0I4+.%8^QW+g6h.P>4]|v5A)s(fu@A6] IC68OZT}AMStt02bprtl<7v' );

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

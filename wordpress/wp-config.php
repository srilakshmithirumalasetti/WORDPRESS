<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'srilakshmi' );

/** Database username */
define( 'DB_USER', 'srilakshmi' );

/** Database password */
define( 'DB_PASSWORD', 'SRILAKSHMI168' );

/** Database hostname */
define( 'DB_HOST', 'srilakshmi.c54mimg2yaem.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '~Et1dATE/|)Zv{|3.r7LF9-@~*Ir{E#L%zo=|{ISmgXKpfC[ogjGCkUxQ8aY*3(+');
define('SECURE_AUTH_KEY',  '@/D+[Obu4Gsx1e!oY^{|>24UB gp?yS;u<I)j0ots]k}|~[]MSUBv+A)w/bq~^m+');
define('LOGGED_IN_KEY',    '7fJa2Yu+8+i-TA|T+Ibf+?sa_0SjaNg|c n*$QE_+(JZ2k5a^=w74bIkHWP?Q/aq');
define('NONCE_KEY',        '!-0!%<-5EMz+^`d{<DLz $H|kHQ!->Fb|0c)&wDx@+}AW0]J005Vr/v+8yNKgx`X');
define('AUTH_SALT',        'u|Tn;Qd,|M0H[i61WQS|?eV`6Z7_xpWHn?8q[%$L1^ygeR#/f+HvK!BD_#ka>]Gk');
define('SECURE_AUTH_SALT', 't8,%+n)g|VMf258*Fh%U8x-&2yjVVeh,iH4(<W|b7/<5}CWgDPSr;100|{IU;22X');
define('LOGGED_IN_SALT',   'fxQ?z;9gYABn?0>0*]]?iWn(HYqN9EzaL)>h)*<ehkVuc~J&XQxowdT]i}2i_v>j');
define('NONCE_SALT',       '[yO+L1.A|l|Nuyfa@&ZT(9VcXG!`$nI{_|l&WEWQ=|0R<L}cT`XYR[+LR>0Yyf.m');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

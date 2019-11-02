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
define( 'DB_NAME', 'ocean' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'heisgood' );

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
define( 'AUTH_KEY',         'pokht1N^7+W,+RG]^ztU=~0=,KV`+$ZpQq_HB:,}X,UN7Qfx]&z0@[D`Ff`xnw;~' );
define( 'SECURE_AUTH_KEY',  '^o>>=XQW_FEcqd],C<{1^-hZyce]!dKKG*Xw*H*zF?8@! OJyAy>?hSE{sgx&,bm' );
define( 'LOGGED_IN_KEY',    'JIGHP*S(I,4Fkoc+0N6E+RW86Kt.t*+gzWKTN9^YH8D~<i~[*7;vMB6BY%55!7v.' );
define( 'NONCE_KEY',        'Qzy@3ZG~_n&0:jP*PMg<z[Ly|wWD3.BdLOYaE1(]8>{oQS+~P|5.B}<?bhjP_/E+' );
define( 'AUTH_SALT',        'l&t0q[S}qr P[xO0!n3in@7;q?Mf7lroS3[MFCdGQ62z-Ib*lkTX@9WUX[_w6/G_' );
define( 'SECURE_AUTH_SALT', 'S@>fx]+/8]fDM X 3(c OYvYhAl[J$5|$18{@j@_!BSF-9z~:+Z9{yFU_7LlI6CX' );
define( 'LOGGED_IN_SALT',   'yvau$kZ}f]RSqL WWA!LkEY*4V*Q30>%617:},^/d{U:F&oX5x4Xx;Y7wwCmUN`F' );
define( 'NONCE_SALT',       's]Qo#iFu4)TW>TGib>`a9a|zu=KQ.l s(9a#}Rh9`D{[&lDl~zN$Z])ZL]qy2-sq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'owp_';

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

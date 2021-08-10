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
define( 'DB_NAME', 'paintings' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!h2iO@t])T9|Uj!n6|kx4?&qxJ]m3BY27E5b}U@bS]D&GG1OI3 YY:Dog2q*D_7!' );
define( 'SECURE_AUTH_KEY',  'LeC:Iw@QDwn;PK!H13HGYSu_4kGh=@u|K[~t>pYgtT#WOc!chtKG8a^9@~bf1`e|' );
define( 'LOGGED_IN_KEY',    'UD#+/RU%cAXT{Tz/HhS+7HE8S(_k[SO(;VAv/;14)!T>p1YzS0W(][HrD?x;e.i*' );
define( 'NONCE_KEY',        ')(GpmyzZYC7wHH,be1!`/RB/KW;[R73Ysy4cqx)nWNf;SX(gN!*F]FQ:CZ;Qi47$' );
define( 'AUTH_SALT',        '_Gd{@dTzLF9$Q+Pbl!]X!n&`tdL9KrB)O%)y T?/qvqm$t3v+@ciiWN@2PFu~SP&' );
define( 'SECURE_AUTH_SALT', 'A!}D;H%cw,fPv,|%O|@m1en0$tO(W[X9(~~b+ Hm22 0%{|^Z:ly%<pYU-A[w~P4' );
define( 'LOGGED_IN_SALT',   '4s>fE|+]CTt9L:@}Hk9}JPm@zF{):7 XtNAgc2}!G9.=l4$;Fp#P1[|14q#aJP/T' );
define( 'NONCE_SALT',       '!Dh~sFXzdz@t?xf`C)Rfv:>_3?{#g@G(6tR|$i1`?-~7T=J@Ld[Wnw$ED&2~4pKX' );

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
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

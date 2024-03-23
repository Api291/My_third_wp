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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'My_third_wp' );

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
define( 'AUTH_KEY',         'Bnrg1=#RAD 92[nD8>pu~D}z|k|gjH0jOq7K1p.zT$Dw(<xQ[!J$ as<NBLh6lFD' );
define( 'SECURE_AUTH_KEY',  'Bz$t.1u-TOB$r9d.sqJ9R6HSv$-6QdZK[^$-~iKbdf+{L%QaD~G)V<L,k@j)e~4i' );
define( 'LOGGED_IN_KEY',    'xx6:zRzg#da<tQ3<3%V,6_Dr0PiSIJ(|Z>mKV&H8^GtA, 5*BJi5qsDKMub@34pD' );
define( 'NONCE_KEY',        'bH1U%>X.m%e[8[gc$j~`a]OqR]4_Lbw%2P]VoC!2v*sgmgwE!`kX]E{F#j}{ qn|' );
define( 'AUTH_SALT',        '/aucS6&8(lW6i|c;5U!fOw}mpK+dO?3G@_$*+1u3I(jW;HXXX:A-!6vvT81Jw([S' );
define( 'SECURE_AUTH_SALT', '}OrGe^8-[X+Kx}dMLGmjqSHN.?Sr }Nq.%!1%eG$slXZt|KjnX.JVl)N8!x?<PQn' );
define( 'LOGGED_IN_SALT',   'L$:U*Z8vxXIYcite#hT5we6iStBgm(#lO8[OTnbmJYsNx(/_%rP]=Xavj{8OHRpH' );
define( 'NONCE_SALT',       '|ShYvxF@{|_PSVw)cn&_.uoMvlGzF>R<u*ZOLAD5h.H<7iAy~Sg8:$WHqa`[Y?{7' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

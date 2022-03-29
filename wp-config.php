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
define( 'DB_NAME', 'survey' );

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
define( 'AUTH_KEY',         '#V:X8,g?He{(_YSrl>Q^TbEVE:42^!1$k#,K8YmdD4`&4XTwTRH@,+;-A<Fb]|:b' );
define( 'SECURE_AUTH_KEY',  '>c 5(W[w1#q%+}/`?KUxz[*|9HhYf~ci38}>dyz[m)J/gZ~VotKkozF@/.`G/c=_' );
define( 'LOGGED_IN_KEY',    '`a98<Ji0*>EzyHY n:(/epdX5&-`ihGq[K.YxUzeqTjJcVmGtN1uYthwU,|j-d%;' );
define( 'NONCE_KEY',        'eRjU$tUI+RTNS`A.0(9#Jm=?B_zM8+Z`}c]4$ip4A&>H[cxAfUJ0^$]9Im_3ZjUe' );
define( 'AUTH_SALT',        '[JXAImZy/)*Qf,{+9 WW@*)u/j.c-XjsTA[TSfA6r#K}O34rX?i6{W!LGBGnynT,' );
define( 'SECURE_AUTH_SALT', 'xjB`i>5*(lI:q,o5mr-XFkHHxieRRW(3Xz_l_O~4gj!k1=5|}2u1]B ImDd)s~fc' );
define( 'LOGGED_IN_SALT',   '@yMMvM_hw;%V:T;>tqoN2Qs=^Z8Dj(nF@eKm7ahZi)82lb},ALbR, D|.:i_ksgg' );
define( 'NONCE_SALT',       'z`=f@4@kK<E31Ad-SCUa? r$76H03R9fq4,.s4|&kT&%z:;hbpA%z*,jo#l@ lYZ' );

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

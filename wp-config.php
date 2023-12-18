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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'RT]8!o{y2CFjOWTHOW_huTWG#=1!%adH>OH,N?XpqFSM!?H00S-;$IGE#PGno<~;' );
define( 'SECURE_AUTH_KEY',  'op8M1dagVPQT`lJ?OG[{~WS@8|}fW0^ghI9B;]_ZUX52v?!FuxmfYww9E-xbbdb]' );
define( 'LOGGED_IN_KEY',    'G s7*DI$%jBC9ji`8EC,kP><4}|BHw o4CN;P^W2bdyC/VwNz|Pg;.My(mR]Q!sl' );
define( 'NONCE_KEY',        '3vS 9aL<LLd*lwS+&+HjWiK?.+`Xw$pJy(I`v%#Pk6Bh}gN]5AXU(lTpoS*)gzDC' );
define( 'AUTH_SALT',        'R}ekS,!u(l,E<LnObowo]%vEh|s0#}]XC;:SAGr*sk`SAbKLYXE{b[@1:>j(*sco' );
define( 'SECURE_AUTH_SALT', '2WhZ30#j:N`Rh<MeS/{b[>!z9Sg^$v.DD 56nEAp/?5u%:cNDik@d&Rr-0*.7MEb' );
define( 'LOGGED_IN_SALT',   ' {2:X$3tzWiGJrl +Q18e=)yOK`I,N4x:4|I/]}[@>9jAPFD)SsA+P#q]H ahFVD' );
define( 'NONCE_SALT',       'cc86`di@]Sl?TBNKXpgI+B3:GT>5^34|Oy~GQ|9DOXss~5SaE;`&IeXqy!Pwi_v7' );

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

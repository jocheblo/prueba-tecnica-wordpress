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
define( 'DB_NAME', 'herraiz-soto' );

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
define( 'AUTH_KEY',         'd :_iicWlw*<^S/$|%DY(-0zz2KTa$Tdv:W}c>Uw|Ft4]wXEN9F6a:=qBY#8&j;3' );
define( 'SECURE_AUTH_KEY',  'F1o}UQzfPC9YAd+-$]Rl#_MARnXa0dCNl|q};*.#^Yt%e+mb!JiM!S<MRSDYSQ!n' );
define( 'LOGGED_IN_KEY',    'L@&/#Z0fRt$SCE{x(?1sC{$&(jUs@..($/gqp5:5ER^h%r?B%04iAPT2[*RDCqbz' );
define( 'NONCE_KEY',        '0p;vl7.TadfXfi>66K=uU|z|DEr)`&c6&(RWmI.fI:<c0rO};j{Yev/t:zQ~e5y:' );
define( 'AUTH_SALT',        '&7H/$~[9+c(Sdd/ ?.M*y`E|Rep[l,j2z1DpFY?]{];J9C=NLuj-{MasXD>/vO}N' );
define( 'SECURE_AUTH_SALT', '#b`ERM)Iwu@B}^q*1!PJpgwPk5|:+q~:9>!k3U &P7A!JAi|JbklBwiAhR621r.K' );
define( 'LOGGED_IN_SALT',   '[v_5To$~/1FYG1vg^Zi3(:CQkmW%[)zn+w?HTnJYa5DXMt~+%VZj*lMlb&Lx9yA)' );
define( 'NONCE_SALT',       'T7Np!6_yWf|rv^{icp` G~ve+`T<P>NmP;yTXt<V.-S}sm%cF`eD5~VG1B?,%~%G' );

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

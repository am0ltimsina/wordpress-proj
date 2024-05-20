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
define( 'DB_NAME', $_SERVER["DB_NAME"] );

/** MySQL database username */
define( 'DB_USER', $_SERVER["DB_USER"] );

/** MySQL database password */
define( 'DB_PASSWORD', $_SERVER["DB_PASSWORD"] );

/** MySQL hostname */
define( 'DB_HOST', $_SERVER["DB_HOST"] );

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
define( 'AUTH_KEY',         'P4z}41&QCi(L}=d1R/1{S(+z>MsjZYyz95Mbbq5+,pTS|_k<JvH&`,pm~:0yK)to' );
define( 'SECURE_AUTH_KEY',  '-Tn|m0Z0`+v4FOJ=S~I*B&_dmETl+|w:E9QaV)[ELedC(^i}_^hyWXVkGIclrkT/' );
define( 'LOGGED_IN_KEY',    'R;.AP+C$a?iF]Wo/z6N~[;JcfW@NfB/Di5Shx fC@UM0,A&/tx$0)FgTTqe/Q6=f' );
define( 'NONCE_KEY',        '+,|Fp~fAx6JkT%@~<SL]H~;6*Nv|Y,?EidH1&c080>qYR3g4<9Df37dx55b0#np`' );
define( 'AUTH_SALT',        '-$Pc}M!URKTzW=m%-=PIH-0_S=v*~jxBp*LWD8SiNS_FE6;efd/U0JhVL3+kMBLH' );
define( 'SECURE_AUTH_SALT', '=Z@[ 7((A@)an(]~775]!O0`Annl!^UOLe7Pvp2rxt|qvvmvL$YOpeCX[-!!{U+f' );
define( 'LOGGED_IN_SALT',   '|J] m3~!!x0Y<C@fKSGWlsHiuRslb/&Uw gs#1:]+y8+DM]#v-XnSf@tm,IjAkM<' );
define( 'NONCE_SALT',       ')LpbR<(h;&B5,Wi4S&S31g^#[E6m|C`BlB4!Sxze+mL[+ZBH,abIL):z#P.Wotu/' );

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

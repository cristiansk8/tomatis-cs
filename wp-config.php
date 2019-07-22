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
define( 'DB_NAME', 'depuracr_tomatis' );

/** MySQL database username */
define( 'DB_USER', 'depuracr_tomatis' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zASk)*g.t_tz' );

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
define( 'AUTH_KEY',         ',6XHZz-i?&C>800*O@Ov{9-y&oDVd}xVNBIMm!RDigCDA6x^38&p?+)RkqX9H! >' );
define( 'SECURE_AUTH_KEY',  '=&AdzXOV@8IJdMfojxuwIrjd*H<ydt0C+kcor[pe@aUrZ{(@Km|]vI]oVDwFSyDG' );
define( 'LOGGED_IN_KEY',    '$?`1%Ywxb ,$+REL|5=!n$lOb}nO& W=ZBm;|D9P,g4O~$/U,WJgE*Pg9N7CzLTa' );
define( 'NONCE_KEY',        'aoUZ#q%NadMr([^FA)Foc|NAq]g^RiJfz 75JioB_R.f0aN-1h{FM+uejCGPo3Ng' );
define( 'AUTH_SALT',        'XI#>ByZD5b#yKP7m<G+0/9l6F_?%&u^ ?wG`wf<|hWTNPh)(6[n;AS:!g[:FKcvO' );
define( 'SECURE_AUTH_SALT', 'm. Q(I+qq*{q8j%h|.{%tC*?Dtd-2tKs)8]s;X[1d5woGHt$U*`TDQVoQ!sWNx@F' );
define( 'LOGGED_IN_SALT',   'Qfk:2@C$pe$hK|F`fib&Iju82l*Q{pucCcBX`a_Qg}0?B)(bvb6763O`ptq5BIyh' );
define( 'NONCE_SALT',       'g8-PLKt>y&bisCRK>e)&u10])~ZR=qEBk{&a=hp9v+W^yoj5{tKi^<{*D<XEU#7z' );

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

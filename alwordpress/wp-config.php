<?php

define('WP_CACHE', true);

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
define( 'DB_NAME', 'db_alec' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'UjowmtF`}^b%HD7,>S*o_y(|bW}nW::#J=;`LI84$vOsrk(L2Fz7TgKD5Qxk bX0' );
define( 'SECURE_AUTH_KEY',  'N]Ml(QwGnj*I#H,&^UUt;AIC_HlM2]C@GV?%txU,vqh`Ke#Msw[&4ipF=wV2I}];' );
define( 'LOGGED_IN_KEY',    'U_&ls:b54a;2y|gMCd[C6j-i.(wxSrA!5NAPt*J[/!cV xt$(SxsusVaBx~!/SHX' );
define( 'NONCE_KEY',        '_JmSbD)A]PbvisHut.r@K$D3}b;ryY_8oXHF~5a1@,sXUWb:YFrgVVEl_IAcmoN~' );
define( 'AUTH_SALT',        '4x;k9iy=-nn5&>W )2f(5m(9Tzz_ S5q(*u@l|2- oZ.;aHC,Hxwr9TCMjP,f$K!' );
define( 'SECURE_AUTH_SALT', 'Ae4G4{99/XLc~bvs+1D}4M.SSvPJV`s$!C.H4tuVSYD,Dng;1W%];^~p+OjLSSeD' );
define( 'LOGGED_IN_SALT',   ')zMHc=4#&{Y4GN%0#ZdFovS 2|8$( tq9nlh3+LW2(*kNiqt@0[qNPu5R WW1 Ax' );
define( 'NONCE_SALT',       'K+r{0Rt9Je;D|(yk`_`D3[QM#*G5$@_x.E-$y8c^12V@}u4)i^^W;^0}NojoZ-]D' );

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

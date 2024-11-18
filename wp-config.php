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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '/J![&`(^iOGh&AI0-KD>QRDwv!P+!nWG/*c+~Y%3%zt4;f~3?~_L)?C7$c6Z4Gjd' );
define( 'SECURE_AUTH_KEY',   'm9gRha`6-mZhe)Mcq@1djP6#1(18-(dXWXuY7V: (I*cjNil;U0s?HhO,~It+)a.' );
define( 'LOGGED_IN_KEY',     'Uf]K:f#h,j5OLB{``65[CQ=IlzBBD67rZ4w 0AOUTwwx/OR](4dsy/Nv`Kn@Mu3a' );
define( 'NONCE_KEY',         'M=iJvV*MdMBP)bF`>#x(d /M(EF_-cywjToOAM>tW>]WY_|925f<*Z>%>TI.Z)79' );
define( 'AUTH_SALT',         '|u(|5Joxb/XS{7PsUW~A2M[VQ1&dLm^0vHeJoHGp@jF/X>aG,b[ bPE&$(s.(+@X' );
define( 'SECURE_AUTH_SALT',  '`%?R 4-Ii5k5$>f_?W@5W,ETCWZ95S3(DkWt47v#Qt4sO#Q26[||#&<HOf/Y{;.v' );
define( 'LOGGED_IN_SALT',    '.k@t[z(`ofg/jjI{p-QsGh}%e)njPx=q;Tous}=?byiSvAe ^m`mw[,V>EM%(/Th' );
define( 'NONCE_SALT',        '<4avRvtOj%5c~d+:IRNyGr/TW,QLVGr4MC-}^b%9gGDLokN8Wb&+hr4/Z&iHe%vf' );
define( 'WP_CACHE_KEY_SALT', ':G}[XQ1tyz`L:YcS|iz+nbu28H#Gv`tgcjNaKInR|J8?^>l&HEGbl+`*qKT`oq0O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

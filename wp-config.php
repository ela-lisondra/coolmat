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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coolmat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'riOJc1+o1GFVYX,AX)9>FET=#.=*@*$6&U)#@CVv,fM<?,W&Fj7f[=:yZ9RQ_:v,' );
define( 'SECURE_AUTH_KEY',  'yl #ShFdi&i7NcL7,;mhpw<5v[c+`xY~}|@uMY6o%JReS(xdHq9V?bWz`U2ST<p;' );
define( 'LOGGED_IN_KEY',    '~E~lj8~GQ4L4)wfJxy1~HSEZ|oBm/69A!&r46ZKX5t2sII;P+</N9I@#e))8%#69' );
define( 'NONCE_KEY',        'O/;x#GuU<II^zlopz$p!j0d<Hw-{[l~W_KTnryt47!.ccX{=SQ#asM@jF-r2obcI' );
define( 'AUTH_SALT',        'ybc _vx;c*:`7!]6KI/8i@N3aggZPs81$Y[m[1*{:gA#gLN>B?lZBU9iWxv0T:^T' );
define( 'SECURE_AUTH_SALT', 'YJdns+K5n02Xfd1*i>!`~aWzvb<-T3!p,/t!Qv;+T}wo^@KO 7,vLczFL)`;G@tn' );
define( 'LOGGED_IN_SALT',   'E&NW!NYYWJML6my_LE>Yh|i@+ynOy[Phs/8,IZ;p1qyi&p[u ^;HMaa @Yo>r_c#' );
define( 'NONCE_SALT',       '8^&StLt4TJ#{},u(;Pk&&2eIR%jsI1Gy`4W?AOx*qQL:LPG!f9HoM#Tv/x.agsDE' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

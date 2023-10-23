<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'hudsonca_site' );

/** Database username */
define( 'DB_USER', 'hudsonca_root' );

/** Database password */
define( 'DB_PASSWORD', 'r@hc903@!' );

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
define( 'AUTH_KEY',         '^3,$XVU=+NBI2-C Ms*F-yaG1B~4t[@@)(Q+e^{3H4+RgMbkWQ~WGXPzf`re6g;t' );
define( 'SECURE_AUTH_KEY',  '-`oBaz?;bC<]jZvDWvF?gYk8bq(G-t9!_^Ay8P9PUI3GE]udE]N*RPns[T~Pc?Bl' );
define( 'LOGGED_IN_KEY',    ')U<}A2ayH`RA`fC`f=AG~< 58-vbZ,BHSQpnSFr#aSW CQ)bZlxArZG*xD1`@IeF' );
define( 'NONCE_KEY',        'j4u5PZghxc_;bg,]rqn-X{v)Jm?!jjlY>[g%f;biN^:o6boa~W5?m32T.{|VJ7LF' );
define( 'AUTH_SALT',        'n&ct:@>^V` ?)2)M*S^%. r9T)cXt)#@MW)K*CLE7 r}@/+=X*DhMs ha1VK,&f9' );
define( 'SECURE_AUTH_SALT', 'a8B3BUzm10Z#,&!wa8^|XrBnUt9fC9tj03B*`o.}X;:Jm5qX#SgN*t+M4>R&v(V*' );
define( 'LOGGED_IN_SALT',   'c4FH|p~2E]m`L__#m4F$nTXrpC?{q/&1A+eL=wx?:):JkT==hv7@b,4pRV9,J`ZY' );
define( 'NONCE_SALT',       'c>C_nF.]ovSzf^~slCy[k0^Q+~u|FovRY5 lD8uGCb4+T`E+F_XSd`k+BRi676Ws' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hc_';

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

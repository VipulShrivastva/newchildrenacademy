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
define('DB_NAME', 'webflt1c_newchildrenacademy');

/** MySQL database username */
define('DB_USER', 'webflt1c_newchil');

/** MySQL database password */
define('DB_PASSWORD', 'newchil@&^&&&(');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$lt*WM6U*ArtcZH$g1.XM!BYEi6?{}DZ0^bcP:vjPK9lHkb>,Zore{T3q9*dV6Xy');
define('SECURE_AUTH_KEY',  'N)N%{0F+eeM)ycYTk@)Y;G2]1d3BOvKSTok %S(orf^o.KaK|OvU([1Ufl^gwC/D');
define('LOGGED_IN_KEY',    'HR6ZEz^NR~@VN,y_|hHZLU]|N>m/mRhv]K*=9|R-3%<bVXK`&^kNrnPw}q=A^!mv');
define('NONCE_KEY',        'LY[ R|+PP;7c{X!(Fh{6Z]I X?*h?kygR[K_axTwCk*u=|4,zbxX-enfd%W)?~Z]');
define('AUTH_SALT',        'JNd6XUZ/_T]]vyV|ko*B+*bxBD28?1{^Jy#BmJCW`bTSdD8-F7O!rpCZWn%nFrAx');
define('SECURE_AUTH_SALT', 'r;xZy5FhG:J~Mwnq.F[OkQZ9+i>ZI%o 2fE53P2z-Rr9]#OvuZ*= tK8TFZhroh^');
define('LOGGED_IN_SALT',   '@ouni;`x;,niSHRpBSGRzX[) 1N&k.5poT;o$P`]6IMw~p:V5}vZ@O77+s%59yZY');
define('NONCE_SALT',       '/c(=kA,qtkb&;<a?>))@57rh2W80m8576Ua^~yPX9UG5cy{GN}kp,&xJ^N+Yum&t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

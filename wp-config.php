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
define('DB_NAME', 'test8');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'G>!bkGQzTEWTzSn/U6aCP#sbk|!#w[`to+D:lfXSa&?x-BKD^$QcI?nABZK?)MXV');
define('SECURE_AUTH_KEY',  '&X@N6~NJhT]J)5wH2*O*6wx!AClXWv:8a?-9<b (PW+i`hPV^^}MfBvl2=;=XvIu');
define('LOGGED_IN_KEY',    '?~dbgz4:]7E?wCuRpK@=q{_AM*5iVZTsjfe0Fv35mf6}9C40D>2V&.sodLqt~:12');
define('NONCE_KEY',        '`ggQ&{j+?:FgT+B_|?_B&Y_oBy<sL6;,;byj^Y7Hv2uQorc_|$YJ/T-?[;sNI$!p');
define('AUTH_SALT',        '}O.Czc~2Rn*Wd(67Zg+Uv%pkay_3na82d`Y92Z8]&W!-ce|7rr&:Wq+lv3GR?o[k');
define('SECURE_AUTH_SALT', '^?Y+Sg.E_W~|VOa[s8AcQPy#f*9~VPn<%dy5_-&4N<&Oib?trwi-U&N i+U1W]4*');
define('LOGGED_IN_SALT',   '25?AIk3,?wD%!6ePcn-}/KG5uTJnF!P%OY}fs.Z:fc 5+G~7zZ$iF|~8Rsq0<cGJ');
define('NONCE_SALT',       '{hR*BRDUyaP%W|jP<6&f0zFF=Riro%<!a>3xNY[Uv]3:(j zLVDg.iTC,dDp?Gw{');

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

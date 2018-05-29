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
define('DB_NAME', 'project2_db');

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
define('AUTH_KEY',         'f/`:^qjH,B<3U@=/QYN$E$^PP-@w?fCUhLNk@+9STqhx.|KNBh<]O/x&og&vp>&M');
define('SECURE_AUTH_KEY',  'Al <zoXy7F}3=Z} - 93;=q<<D)/e7U;*>,^)on8U0eJqtfJyUa!+t:}w[gn<J``');
define('LOGGED_IN_KEY',    'C1asGA,v(_I{V5.mywS5zXKdr(bT6]KEacw4a0:tsK|5^:r.b)wU=.1}E$_Tq1O/');
define('NONCE_KEY',        'QILYs =P;+WBz_NwQN.Wi/mUV5_@23M|V7: <2b9=`%mNs-X0CYV Tip7`_0s#xL');
define('AUTH_SALT',        '@/:RHb8J{L+5>4Jt%KeXmpk+k~j#*wl`O1YhRim9gB isImqO)~uqigS.5h0: pU');
define('SECURE_AUTH_SALT', 'C7/Y$g3#z)?P<}QCS>XoZ!GBW7XoQI68O`|HR{[]I1:o+9qg}8`T083*|_$B}Q<,');
define('LOGGED_IN_SALT',   'U4eWYuK^3Fx)T>N-<j/&y40`]T<vp14(wQv)d/OuxhOHxkQsR]Qh)f.(A|l3sP|^');
define('NONCE_SALT',       'kCl!f@ka8:&At#,:fiULoTKfo7.kfNQ({b[vlK)j~vGeZM:#7r/+otI-Q)-2{M@A');

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

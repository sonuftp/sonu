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
define('DB_NAME', 'c1sonu');

/** MySQL database username */
define('DB_USER', 'c1sonu');

/** MySQL database password */
define('DB_PASSWORD', 'codefire');

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
define('AUTH_KEY',         ',Uh:==BgGlwucuFL%C]L`(;v~M5FRLm?L8ptcI?AO+B{H+GEu`zP0jkRLI/r!K(/');
define('SECURE_AUTH_KEY',  ';z#O&ri>@-gO8?]%*<$2,)N[0P+6F)N.5nn[k,kg];=v)]T[YG`4M0*?UDc;b/$x');
define('LOGGED_IN_KEY',    'lgkC+}Y50l;hpc/W2`5V7#;}*S{E+=i!)$*f}N:mEIrO`gDBwhf.eS+,.9jzj]-`');
define('NONCE_KEY',        ']2ko|kt(KviN2FD>,ry2/zWBuK!qlmLI@yL]eeGO$iBvpC>5!HT} W<-lBh=q8(>');
define('AUTH_SALT',        'nYv HR{g*BZzqI=YVjguwZ84&q]tf[Li$+J:rydJ};CA]R)EMmX4v(6$#j9vJ4g{');
define('SECURE_AUTH_SALT', 'e-85hQmi~+-lSgO,g;,Q<.x2d!^*l>A,9w&V(H> o&B]r3LB`S$iIup;mOauB>R6');
define('LOGGED_IN_SALT',   'Fd*w3uMizN(f]gtRTUJvuXi9te]$59|.l[KNcnWX_uaR@NPJi^(t6c-}9kVkS,%Q');
define('NONCE_SALT',       '-Rd?_&`LgPSS^)6>a%uzZ1 nL$k5KEuv8w&1PyI**_T7p`=1]jnM #/!+C9<:K@K');

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

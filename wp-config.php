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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/olly/code/www.ollyrobinson.dev.cc/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'ollyrobiDBugmg8');

/** MySQL database username */
define('DB_USER', 'ollyrobiDBugmg8');

/** MySQL database password */
define('DB_PASSWORD', 'gJVK8PH5ym');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', ':VZ!Zg-@|:empx*29x*25DL]2ADLemDLTmtxlt-~#9H_#:GOWa;HLSatOSbu$y^<j');
define('SECURE_AUTH_KEY', 'fn3.MEbue+2<E{IfFcJgVr|v8JBYUr>n0^3Q1O4VoS-l~!8RCkNg!8D#5LaHWmPap');
define('LOGGED_IN_KEY', 'Ur^nuy^3Bv$,^>07JQ}37FQYfnjMTfmuqy^<iq$.{36I$,{<7IQX37IQXfbjq');
define('NONCE_KEY', 'cn}n0Fw-[C8Oh1Gapl~_w|N4JNdCR-hw-:t#]t#P]EHXDT+p~_5~Ha59Piet#IXqm');
define('AUTH_SALT', 'Vsgz>8>QgIYn$Yr^0z>7N-~:C|5KZ5KapSsw#w[8N0GVkGVl-ds4<6LaDTm+Xmq*i');
define('SECURE_AUTH_SALT', 'jy*3I,3IXTj$m+{A.26L<ALmLHTu*+Fgrnznzv^0z>,0R0}7YkgMnyv^u^$>I^$>7');
define('LOGGED_IN_SALT', '4Qjfy<Yr3$FUw[84KdgGV~k-~1!JYFJYrNw[gzCp_15~1a5PeiOe#-[:G[SlGKa');
define('NONCE_SALT', 'o|@GZ58Rhdw|k@F>BRV4csYcs|l+;l-;_5LP5Lthw-:w9O:1GaWl~fu<.6MP{EnQj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

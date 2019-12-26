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
define('DB_NAME', 'ollyrobiDBugmg8');

/** MySQL database username */
define('DB_USER', 'olly');

/** MySQL database password */
define('DB_PASSWORD', '2Y5gxau8GCZxwySI');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'Yb6-sm|(@jFXft%X#+kK}X_VP M,T4,E8lIV+AO0|.~W86vBG|vSZYwP3kK(f;zf');
define('SECURE_AUTH_KEY', 'tV2x^).*fsRXEu@J%3|D0J2dSl}^Czk,/%HJP-g-Rk.ZS.E-|4Qt01FTpWl/Qb+e');
define('LOGGED_IN_KEY', 'U0,$w[Gz~-g 6Vhye5Vjgq>qx&Z2$^c|q)fN/YI]-8-fX++)^$=?W+[KF:}v0moy');
define('NONCE_KEY', 'rygsshq6v@$UOnGV|P`S&hFKLT=w-p>IB*ZIXF$Kh>n={IOsy)gs{~LrGb>!(-cc');
define('AUTH_SALT', '@}O@# 1AvQ3Ea-oO#Yjb&o^LZnKX6y]?IC5.ksPro+!`xHggD3*)AMUFb|-mw%+A');
define('SECURE_AUTH_SALT', 'az8%tFRFUrm{>;XC&89RA/ID=s|=Oo|2^8c|Uj*v(Uu,Ti9z nK^2D6=F7>iw2bb');
define('LOGGED_IN_SALT', 'yT&x}|9awE!1DJNMV#EHE&1OYJ!9({8,n}u!4`$(n9YbHazoE;&Ew9C(a13Mo/1G');
define('NONCE_SALT', 'F:=|.T0H@&R#v/|j(dCktF^#sEQhjn`T#cFMPzs$*op-1F1WKy MB}/gu|a!-5Hn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'olly_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

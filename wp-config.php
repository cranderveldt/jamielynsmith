<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jamiely2_wp_jamielyn');

/** MySQL database username */
define('DB_USER', 'jamiely2_sql');

/** MySQL database password */
define('DB_PASSWORD', 'cPOH#)NDIFJP3');

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
define('AUTH_KEY',         '2*@IxuGA(Bqrz-,}k2B_@2 I7Mv8JstA@jnki4Hr!TG6kp%vlB09gg;?z|i?rnww');
define('SECURE_AUTH_KEY',  'Fm!-_ye6M!f@5_)H}Zap>74BCCzUwSRme58DXAwfj`UNK1Q|G&s&$pk_leV/!)>p');
define('LOGGED_IN_KEY',    'lHaG&)IL`}b?#3 |a0PuawiX{+vO&IxrGl)=0X.n,!o!_;/FYf[P1-l-8ihyjCY]');
define('NONCE_KEY',        ')?IBOR!2GjEfjE:ER;|A,}h}Q4z*G~KPn!_V0OO4JF%*$[*cMgR6?v^5]5CgN4sz');
define('AUTH_SALT',        'kXLT|7z9%r%QF~Q(;%9xS]Uu!!9V}P-t~U1h qHK>~f0-Qt8rV31S OH[cb*e^s9');
define('SECURE_AUTH_SALT', 'o/a_q$RBQ+p2OkUg,t=Gi6(zla5<%6$+QOmvy>6{PT>OFdneaoQ ?J[[+rU<&G+q');
define('LOGGED_IN_SALT',   '1pm-?Wt[C|JuUqq{u{(#yfxuL+g>|Wtw-z8`lY;qgQs,9cgMSf0.muDggdGhq&{u');
define('NONCE_SALT',       'o3H^zj&|V_Ln1)G9MBD@=y1n4~b$-S6/BiRuh}E|5fH;KCSp]vfDuN=Gp-3}Niby');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_jw4qk_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

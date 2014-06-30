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
if ($_SERVER['REMOTE_ADDR']=='127.0.0.1' || $_SERVER['REMOTE_ADDR']=='192.168.0.15'  || $_SERVER['REMOTE_ADDR']=='192.168.0.6') {
    define('WP_ENV', 'dev');
} else {
    define('WP_ENV', 'prod');
}

if (WP_ENV == 'dev') {
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/wordpress');
    define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']);
    define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . '/wp-content');

    define('DB_NAME', 'telefonica');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
} else {
    define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
    define('WP_HOME',    'http://' . $_SERVER['HTTP_HOST']);
    define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');

    define('DB_NAME', 'telefonica');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
} 


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
define('AUTH_KEY',         'Z}:2mXZ0K7{4e}n#fRH|tMqf;{kfq=Jkp}ksx|&q,Kpk@!}p(j<E.x)B,dI:4#tX');
define('SECURE_AUTH_KEY',  '/P&NAQ?e|rav)Dx(XNyrDSl6o_*<v_i8k8V^p5[gVQ[,J`Y*lfIPc;>Ix0Ju@Tq6');
define('LOGGED_IN_KEY',    '?~kMUs0I:js!8kJ0R!aY7vNVr;%$>w^L)DE^cvRqso[9f|-w9j-G*a*qloFb}4pX');
define('NONCE_KEY',        'Q)>D^*&5q8fG1hG0h!jg-EPI&y[dT4!s$!MS]G5?$%3H~OH;h#~sHd]-5g[-!?d~');
define('AUTH_SALT',        'EL9M/?p)+ZQ{bxkn6csa^P*p&J}($Jv[E!b!~9L[R,+$mz3T1z{?Wi0~O,PcKLKS');
define('SECURE_AUTH_SALT', 'A zygHPANHi|&M5.(VeGUTaIHc3Sk|){PX_i18f[jD /|leMS*1 -tQCrGX-$<N3');
define('LOGGED_IN_SALT',   ':4(&|+ o(0,G10(fHLuNUaPa}t71yb-4eNF}rOcv|It,X!$3hP|,9Ak%fN6W~Ujl');
define('NONCE_SALT',       'eys+jJ~Yb@_#.PZ,}DI|F>6QT|<*86y4M@-oiNAAQYY dJaK-&XLGwPQ`ZevSU9-');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

 if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

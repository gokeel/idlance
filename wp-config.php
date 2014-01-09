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
define('DB_NAME', 'idlance');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ockytika');

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
define('AUTH_KEY',         'Y~9291=rv<0(9wf>3xR(RH%b3Iqz}@vm/WB*sZC&ohkJ~B0(Gz*|+y(t#2g[;^/W');
define('SECURE_AUTH_KEY',  '(lJ2tOWW%w-|:JQIDtGEC;/A;lYm^[?}^-p##O<G^Es,`>q{9H3u49#Uy(8_]`&(');
define('LOGGED_IN_KEY',    '<UWQw>RUWJyTXv.f<YV&9biWT4}IHzWqJXjNv3bMeKo_?N1Y)UZ0B)8S9^Z/roi`');
define('NONCE_KEY',        '~2H&>l[0KI!vO}x@u> pUJ3s]nF7hyJ^R1qL1<?QvdQ~dbvJH>Q ET]?^>zs`pn4');
define('AUTH_SALT',        'Vmr}-8rh&fc2|%ys1jS9^^45F8&M#o ^s&uX]SIVt<H.G;2^VA23*z`[txK4A(_}');
define('SECURE_AUTH_SALT', '9GYcd*:^):YYS@N*+rwP(Krzm``_DUJY=w=WKz)3~Czq0@UMBC)BNf9`77_w`TpS');
define('LOGGED_IN_SALT',   'Ch6+SQTMM}Rn0r{a^Oe2/tG__m6$-qo:oUdy~_tjB,61f)9t%FSkf7H_IDLJ3lKd');
define('NONCE_SALT',       '){:ZrdBq*>^[/s7,s!)[AKW%|eqy*F2LQM1 *WjUi<XlWdkT~<KOvcG(=v``NgHe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mj_';

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

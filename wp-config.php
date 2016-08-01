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
define('DB_NAME', 'fininsite_com');

/** MySQL database username */
define('DB_USER', 'fininsitecom');

/** MySQL database password */
define('DB_PASSWORD', 'RZqQDyrr');

/** MySQL hostname */
define('DB_HOST', 'mysql.fininsite.com');

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
define('AUTH_KEY',         '9j?RGrVRUKh$W%o06t)*M6@jg$U#l@#j%!lmo/&IO(Y&g^xo+4V#+Nlyq|bAO8::');
define('SECURE_AUTH_KEY',  'fZ))qR*UB_2bSeaoE!w1;)uYaEQl:_EO0ebrb)PbYqbu+LDJXrmy:v!5:lRLszIM');
define('LOGGED_IN_KEY',    '/kq%+gG9zf&oAPoU?bhq|"?s5xBeJx|~dY|d0:WSp)4DG3R2)^3!j7Bh(fRlopoT');
define('NONCE_KEY',        'fvK@y5equ;Zc;frR1&8eA7EC4c;WDcy1x3;??xu1Ct&1SQ8e1:|"BQ)BbqbK8"KG');
define('AUTH_SALT',        'nMYU?6u%Xaox%`dH*T?oYLM6MI67d&3Oi/y2eE6kp#f5M~_|e3YEjB%rN76C;dG1');
define('SECURE_AUTH_SALT', '4Db&;4C+!s+@DU"MZf!/MQ7HR6z#F^rq^#cQByskg7k?pD3z!hT2q)~+;FBukDz~');
define('LOGGED_IN_SALT',   'QU/G;HHL#Ii%k7cCK~F~l+0BOq6_^*t%LG2?_hhnDUjs:A:nAFhxzO1fUv8AF`Bm');
define('NONCE_SALT',       '|2a*OiGGe^_zuwyA^MvOTG3++nUxH@8XCa~lm3Jxxs#q@Uk:!x~o#vz$|j*E5V+T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_uknu4c_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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


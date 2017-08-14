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
define('DB_NAME', 'nguyenkhoaland');

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
define('AUTH_KEY',         'MgMr=ur4*XO=4^eb*GP[WnuL)vKg|I#HKP^|<*VO7lb^XAT]CL;`*[/pFUCV@kaf');
define('SECURE_AUTH_KEY',  '?yNduibH(x[o%Y(g%g6/A/dPk9uT2NvFwq>=qaf}z,ey[;aRiAviUV_Od)2F4r8m');
define('LOGGED_IN_KEY',    'e@13@Ki]&zQF&=SX8%qY)WYHBm9/rNJ@+b]r72i~(`~<@4E2jGnTs@H/Um)yfw?,');
define('NONCE_KEY',        '47x2ZcSe8eQiv-+-S=cA0TaF0eJC{7{1D7](spRsKG`MKs!stgoPv$@<q.h|s%mY');
define('AUTH_SALT',        'YcwPT28r;.>4#(u~K&d<I5!hD^I=z7Z,,X/F6fJB*s{P0k(i/di5W(wS)!:n]Sy^');
define('SECURE_AUTH_SALT', 'j%v73%3m|X_2~,b^r|TtaP>#9[l^.1peoege~3mM!Ew`AqL%Z@lzY_MV`8Z]?n}M');
define('LOGGED_IN_SALT',   '6TPB&nIMo/*Oe,gd+=WT@m*eWQ;Hu?:9[!A@u-Ys#[A9JeA[~w=EWKK#q(Y?V)RD');
define('NONCE_SALT',       'kYQ8%_^=pc)(Oi(4[X>D`um@||y531qW2ssBn)&KC+p@)b/mzvRG{3J=*%x=v(vM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nguyenkhoaland_';

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

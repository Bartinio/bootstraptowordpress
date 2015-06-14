<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'VhAXWqhf3TDhq8za');

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
define('AUTH_KEY',         'LPPp]zfJ)r,!)MeQ85+}+Wwb`Dry}o6Ia-jNSp0vt{Vjh*I+|,kY-g`7uk^<x5q7');
define('SECURE_AUTH_KEY',  'w-mo*p8L~[w|vvC|p0T7 |D$w-{X56OG,xn&u6;krRxK=>)yK.)c6%>TA?PW0%9%');
define('LOGGED_IN_KEY',    '9hZFE|2b#Nc.*WBztV|&Ye|9kf!gi;;~+YfGv/WR$G9-0yI0-3i%C]JIK9f-$IQ ');
define('NONCE_KEY',        '6,B%7JQF2k:Hb**vGiwyrI4_=6#N+rTVZ|TFl+8LFl&sL{F-Uy6i!Xt_C#[bx`=`');
define('AUTH_SALT',        'rB9k:^rmsWy1ORVN)S=%F5/vTQ$GX,V|WNP(Su#uI_ m+rb90~%qx ri1^eQ!Q){');
define('SECURE_AUTH_SALT', '&65*^]%hJz-beJmt+(-3DS)P*?3?ia,>r:%-VTO^:C=`FvdHomq#QOr29w32M7}f');
define('LOGGED_IN_SALT',   '}=g~n-FqzO /&3gX^n2K_$pmt4-3`]a!dDhZM2lI^TX|-|j,XV1LPsoCD`f]2-[Y');
define('NONCE_SALT',       'd0}T09(|h|f|!>Am,p$BsK-$4<bGozQSl`72--F2w$ S<u!?c//s!(&;06vT+-js');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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

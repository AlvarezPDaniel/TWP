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
define('DB_NAME', 'twp_db');

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
define('AUTH_KEY',         '~o=$~8$?khFh9#-fI#qN<P)f51WcP2,+U0Qe0yz3unS-U{a#zB#5zpi8J[ogUzw(');
define('SECURE_AUTH_KEY',  'gwXCo`U*L?yrXe0=CM6?<;lh]_~8Z*2(~GvE(6q35;kKb@#rnd087l/KUv`p<zFE');
define('LOGGED_IN_KEY',    '^}P4zEIzxq4euO6lau<IJE:M8u,I7({t(Q#m@oINP)-Zo3 ISoi#->y:ioN~1W)Z');
define('NONCE_KEY',        '-C3JXdqyC/Q|Gb&tx&V(u+H+HJ6IBemaE|X_AuYacuRM$ZUxg/R~Mt6Hd3m,al s');
define('AUTH_SALT',        'dlwGx]2ee|Ak-Ko|<j]i:l^ZS/22e?Z4YCxXSc$dKz%0au qE8Bf01t{$gYGj(B?');
define('SECURE_AUTH_SALT', 'nmkP=|Q9{)/CLtGZuqHCGvF6)[p+gbL5l[-%_zg|4(,?k2xiMW+s@^yE|WL#b4>t');
define('LOGGED_IN_SALT',   'zL_N7o9@yHURqUrwR55n)Lb`7}5ZPtD,T.M?KtVwo!UGe<mi=diYM-6.`NJ]CiC{');
define('NONCE_SALT',       ' Y0&MS^gV:Y0VwSp3BKO.TKCaUf68J,zo,[y/N1*YXaZUu5ni)IMKk!|G#j1GDMB');

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

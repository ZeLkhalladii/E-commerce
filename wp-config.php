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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<TwndHhz6la&*Sp-mnk3 %WZuBtjiDSqsdk2tT{e^X/nQyqm&qPh!K-=D> vG{L=' );
define( 'SECURE_AUTH_KEY',  '@i;XgGB|I{9i}*[[+]gAU81fv>70l2nB#t.l1km%)E,xS5XpUa`<7NtBcgW_6te#' );
define( 'LOGGED_IN_KEY',    '`z_r+{A3[&&d:6cb$Q/r;X|l9j5FphF 4.qePLr[;}^rME-.-q@GVF,y3/l S>K ' );
define( 'NONCE_KEY',        'Jd*n&j?! Kv&)4XJS^I13La,Gqtt}_5w^M9frSR.4}Crpz2imDxS<TSiFZix9|ix' );
define( 'AUTH_SALT',        're_o0Q@XiFz%wtpfTsjtYj,Gy2. #SSx34&3+V&4eXj0A>T3`AY*{Wj3C/4)EmK/' );
define( 'SECURE_AUTH_SALT', 'uaU)}quMX2AHW(Z_l)yn3IG$o)v-{~Ab;1o<_#||tLVE9VU<h3P$>+6B)nYo_#M9' );
define( 'LOGGED_IN_SALT',   '2`z#WbXBe/+5i23:F.PziZ=$pF$MBiIA|i2;N5|Q]bd#8y)8v*F@F;4tnM1,XV!<' );
define( 'NONCE_SALT',       'L.8S;A:EG)+pXr@KavI;T-9HAm>MMuh!Bu{D)q[]C8417k5h-AYv I|>O9A|KYG*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_ALLOW_MULTISITE' , true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress.localhost/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define( 'WP_DEBUG', true );
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

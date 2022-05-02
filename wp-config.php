<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '2Mots' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uO7XylPDfB57r3R7URncmYJaQzfuVGyMWp4JuIWZQpFXResxGhzjnpYs37XRh9LG' );
define( 'SECURE_AUTH_KEY',  'nBKSpsqcmleHqYXGqYXQPgjp5dame4qZOMIMoxyaxw5DNGps3F7Kp2QJuthuyJ8u' );
define( 'LOGGED_IN_KEY',    '1LFd4oh54PfxgachlQ7w7ycOXLQAUOYpniJH9RDndMjJo1mpSfro0JdaYnENjxog' );
define( 'NONCE_KEY',        '3H3tTK6GrRm87csZ9Zr1idJk25Fltcbfi7ok1oe0UGjfphHVUSdcJawdEU5n1LFd' );
define( 'AUTH_SALT',        '9j6SwnAHWcgTuFcWOWTeMCrzpF4gWZJy4StZGNcaCjmUf5NFPciY0kdXPiJw5pJp' );
define( 'SECURE_AUTH_SALT', 'izOpXjM0yQXRpAp0oIrcyLkw9x1lkcCiEDXG96zqlDsIVpDFBeFGnciqtyDgvwyS' );
define( 'LOGGED_IN_SALT',   '064u0uvekWiWhjK6Trajy0aixo80FRcZj5VJi3bl7P17MzLi2WiRG4vGxkan4wT0' );
define( 'NONCE_SALT',       '1BiAmEfj72D10362naTpyw15WgeY2vLGZvSMsZMgS2ztCISUrEW2YUJWB7HvAxdr' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

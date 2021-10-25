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
define( 'DB_NAME', 'Upstart' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OMX31lD0twJSlle9pxWt8BhhbWUViQ3TMXkUkTsBU0T1Aev9S1RjWhr9ymj2LcE1' );
define( 'SECURE_AUTH_KEY',  'Xjd1y3WRrwbnN40EnWlJ9Ngaqp3teOYkniE7HmYtMZNNwKyFJy6XC1TUGRfxrQP4' );
define( 'LOGGED_IN_KEY',    'ITm9kY93LEUJ18gGWs8ynwaLFeN6JmU42Ow8jybTCxsKr66MlTwUmn6rQaJATPmy' );
define( 'NONCE_KEY',        'WUCj5CXnUCw2LtS5g6bVPlUcp8gn3WQERBrSSQh8usVfDTKF1YHYLcBhIXxtDDHt' );
define( 'AUTH_SALT',        'dLezdUDV6ewUi4J637OFp3evj8vfMIrY8Tz9P5ztnJVketiHBUww6nOuOcW05bp2' );
define( 'SECURE_AUTH_SALT', 'X4YSlTXD5IqJnU6szeJWcQoDIbsNlx4bysL0InLDimJZ6wZvhA4b6Zl1AUEGNzV1' );
define( 'LOGGED_IN_SALT',   'K1njgbXLau8J1cU51bKYhoJuswZvNM1QPZlcnzl3dHzML6rzPYUOUkgdRtANTodf' );
define( 'NONCE_SALT',       '4fgTzPsg7M6hX1tFECDUIWu3S3ZuwfD7IhcunN1naLKI8UUxnV83ktb85YryYNGw' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

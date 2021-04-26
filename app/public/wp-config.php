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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dfmD9CE/xMIH89FTPDJLvBFpYetB/GPN4DKiBtR6YW2wxl4kpwxmMevd2UM53HBOqRBtx+U+DFp7y06cTFMX7w==');
define('SECURE_AUTH_KEY',  'bkbL+XrUPkWJqjFThsL9MaTonLMozXN+IhdPyNegxgILUCCI8E4a8RDwNFu3sB/YYYSwAF5ftCENLUf5zOvbRg==');
define('LOGGED_IN_KEY',    'ip/UV17TmWj0Go4lOlfkJJ48Ouno1k1IlbLEP6I6zJGVXLWqkm2e3VECigW5+RhmBRg9efyQTQuIMqTpjBeGKA==');
define('NONCE_KEY',        'GVvS5T5eHHVhlGyi/3gZaznEsPfUtHd4oLgkj3xlXQtyDoRDHcUAg+xQgqR9OJIJo1LIwotLeP1s4MQx78KrlQ==');
define('AUTH_SALT',        'FPi0Xr971YddFP+BeQ4aEj8oIT8UqjmiJr7maUeKBszczgOn84EJTCzgE+oOzXGrPiRRp3enND1xzAbIBkhG2w==');
define('SECURE_AUTH_SALT', 'WlBOzlqieyn8OnGYXdrK+VneL8eFkHkxnuW+jSaLeJVQSFEs9XL8XgKlqRlPep9n7oznd6IUuvROHhNYzy1sxQ==');
define('LOGGED_IN_SALT',   'lfFc9evvg3S1mqyiTl8DA75tQ44qaonlFeYCKbF1lLyH0Nk+J2kHNLUCPCOT3N3yZuhV6mMTeKBtgXS+SUAW8g==');
define('NONCE_SALT',       'vV+bGMhMt5A3Qs9lEoEZ+1+15Ji14fQ1ID8eW4eXUBCXIUeImsg0ke+raUum1hXkbVxid0vNXuNH3K0/y+91Yw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

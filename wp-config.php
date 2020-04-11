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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jC7pCbYiUAbk2EWWQ6ClN9mG8qVDuf2B2HhMoQYnuFMcQiIML4ZdmpMYkEnEzPGa');
define('SECURE_AUTH_KEY',  'jt0gVg5hMOE1KnFS3BHkLlJWFXvlOk8ReKXsfGQNwNnyRDwsWz2G8P10vf1U7hzS');
define('LOGGED_IN_KEY',    'CiEbKnJW6nvyupYblkKC2AJBlv5jpI4qKRlfGkpHIlqYXf1p8OYXdTDmKBb4z8VN');
define('NONCE_KEY',        't6eO8PKTrkJEEwLgD0EefBWKtbjlF2kXo1nezYXzse9DwFU5eKcIK3fLKJnU7leh');
define('AUTH_SALT',        'bQcd1YhEV2Q58RccAM3uhMmhwkg8PyYdcsrPzrUG073D2lbdqc8msIGh8id9Z6nE');
define('SECURE_AUTH_SALT', 'RMDC3xNpqM4FARsD2gCvVnuoaUUuvRunrPQ4wd0JFj8fMF6uB0JJltErvA8W3G8J');
define('LOGGED_IN_SALT',   'CA0aNH3XkN0tBJG1lHf1tJj4ZbrMoPIoYhehrqi1C0jxogZl74eydhTQqcnTvH1O');
define('NONCE_SALT',       'q9cLAGaS9JvrGnEEq8gkj7QsZMQeHC0SYfwPGWBI3Jj2CZB2ssmu5DTBTUiViY3A');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ocwq_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

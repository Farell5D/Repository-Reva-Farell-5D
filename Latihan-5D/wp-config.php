<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Latihan-5D' );

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
define( 'AUTH_KEY',         'YcIavHi0NS7lwUzar9yRhZIDFaEvFhss1yYv5BJUb9muEhfIFQkakqvCLK4rG7ZC' );
define( 'SECURE_AUTH_KEY',  'DEd1IR2qKowzf8EzS6VwH4CnBVcUnX07Qg8vJgRjkZBgfspGxvb28L55nFmtfJr2' );
define( 'LOGGED_IN_KEY',    'cCGEI6e5xVM1EG27YPD6FvLy3gqzJ2PzswDXc8qlsMhkBlXhBD7sb2AtfiP8KbJy' );
define( 'NONCE_KEY',        '7IU58rH2VGl1xEYv13rIgzn0i8dB6kR2C8o62j8HDvHGxD0cY707gfFMOG7sNAhZ' );
define( 'AUTH_SALT',        'zbmuWIn3ygqEExE0KyubNoKKd46x5NxjZUi1il6nKdO3Ed5rdF87Ap88W1HJfRpC' );
define( 'SECURE_AUTH_SALT', 'QFBOrPYRXxySlkQViVQXM8jlWJcSfPnxNxyJ3hSok8EzkFlfJJzj8xSkSkr5vA4o' );
define( 'LOGGED_IN_SALT',   'pCULxLaAPIdsZ59jTWb56HbD0DkpvGejkxE7kEouUdbeLZv8HrSNRVPI2wKvVPbN' );
define( 'NONCE_SALT',       'ddWhOS7Y991ONzhG7eW9zhLMHDIAoapR0pnBMyszwbStwqFXaWm6TdhW9c1gQQof' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

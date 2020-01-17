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
define('AUTH_KEY',         'opQ2YuiX9DeTl9NgGAfc4OgX9x0AeUTkmludnnCCCs+TbwyMEGWdAeudteyQGlf/Mm7cRgsG8MBx8+fq/VtAng==');
define('SECURE_AUTH_KEY',  'JN1Ebp45uGJ+Kb0ZU6MNRb81EmSOunnVbTyLfIILA1zLp75W9eO3Cke459zhb0LJ+BLlC9My5H8OhJLO4AHmEg==');
define('LOGGED_IN_KEY',    'Q6affxV1PokAt30vONjA5xh7ZElONsLsjnxTDnBbIK93GXcP/8v/c1VQMbSoO1jCJbPrsukUsW8/exJBL36JXQ==');
define('NONCE_KEY',        'BwRBxma1k3BJqzyf5FZorXEym+QYno/b6enRIA4L416ovwHXdwPzbruL5To9QWGSF/9E6B2KsKebjPJIPJ5tuQ==');
define('AUTH_SALT',        'r8zbhucRijcj8l/6vwwKdBDrOcMcrcHtTZb4d/49lSzlGBV1QoHZJG1URMmWz7Ohq1Eza+dNZJ53THhRhTbxYg==');
define('SECURE_AUTH_SALT', 'Y+8iBMi3Wj/+j3gLcMU+ceSopbkDn9ogUjqywaPmvoCQfdK9n4DYbLmYYxraWL8rXaNX3ynC6R8qFZVH1unr6w==');
define('LOGGED_IN_SALT',   'ioY/gRlISkuK3DG9ugpxHG53SeJnWXNswaEhoU251k7eQyXyyBJPlDOq7arFjNukztSFnSNZmA1Xbzow1D7k/Q==');
define('NONCE_SALT',       'ZWTaE8KQpYLU7nrKpunHxWDg/pl0gU1QhHlJ903Krsg1TJ49EZYfnTpn3JBCxCSmam1YNrueWZ8hF9GJmu6x3g==');

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

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
define('AUTH_KEY',         'TViI5CjwVR78M5a8+UMzhSIM3JlgIj67HxJNTfsnRUr6onOfNZRGLXol7UxEoTwM07PeyJ1+H1IRgLB2aYybIw==');
define('SECURE_AUTH_KEY',  '9hEHFCm5cXILjFQApyScfkKITY5zzoKoavs4vpGGJZcd48HSlyrmNs0Bnp6WjiQOKwQDVGP0H1ipJWEDkER4Ag==');
define('LOGGED_IN_KEY',    'bPnSW8tUXLZZ6fFB+5NoeUf7BkcNYDvv8qUMznpm1752itvmOGaLO95KXtSmolHsqjova80lVXidbY285LXFNA==');
define('NONCE_KEY',        'fGLM0B8p5GwJ5BrjLweUQ+U3ReIDRoFhR+KfgTdC4QmO5vDcbErEifMNU18AYRSWHlYb/+c2vEjvJp+kbauQxA==');
define('AUTH_SALT',        '0p09YO12LPYhWiggb8ekUFvJZnu0JyPx98KleA9kWqjj3Uc9k/ZH9QVH5Jon0aBqR0tBX8aIbRgyybXM3+jqAw==');
define('SECURE_AUTH_SALT', '6n270x4OA24QKB9jCGEzsQpxs7jqLF7BdDFrA4kdq+h3damXwB9imOftcrtEYuks1ZgkqhR2nvLBtD7nEwWYcQ==');
define('LOGGED_IN_SALT',   '8W3MsmcY5+RMBP8Z+UsLsVtbH5q6PITjsSE4ZWNvc2VJRPpkwO7fE5gwLtobOQohB7FkNHrYvqJ31WhVyk+hFg==');
define('NONCE_SALT',       'X8CMSBo4z+AAHwPqKrYFmAcpfELkNzEIcFwzvRUInmcxKFCcdx+JR5fJ6ONHmN04EXOodJPR0TSgD4r4rdfbuw==');

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

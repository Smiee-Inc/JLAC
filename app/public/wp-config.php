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
define('AUTH_KEY',         'DHx6PE5yzddCYOALmCDeZQzA5alaFXKMIjbnQQq2hCb1ZnMcWsqz7gBa7g4GgmhswRpwwATYcnVf+CeyV4EZ1g==');
define('SECURE_AUTH_KEY',  'QTCMnbhan01AWdHi4X8M5m/c/B2YcK8V+3ELEdLkOh7WjqcPQUXQ1kL9+Y5DLWiz8V/V4Radc1bgmS9aQqmtiw==');
define('LOGGED_IN_KEY',    'IaNAVW1EXEsGMVHLrPJCtVIcVj1gMyPW+SQPd7xdQBxvQR/rTB1Q7PZAstRncvg2lxsb64M/WNeaRSmLLzluBw==');
define('NONCE_KEY',        'FBQNSlMQFE4f0ZceV+6hKQTy6IvXEGRSmJclow5M68h5TBXgw5zgEzQsqDbFRFgvZl371JlSemhihmvqg5frMg==');
define('AUTH_SALT',        '+BkJo9QD2D4iof6516+3fbcLEIM328bwEHC4l6/N/J3O9z1Z6h3IOET4VzK26VAPesQFAW4hFiyYTDlKr1Nrxg==');
define('SECURE_AUTH_SALT', 'A18ZPTIWgiSr8n+0pukbzEXsydIgyCsTDnUO4p8W1Z78wzq0pnIxzbeidZ7PmND6DdJ1U4hInUPOqOAe9r4DTw==');
define('LOGGED_IN_SALT',   'qmoaHoOez/eYc5deg8O2L+dSc0iZ4KtRP8UWqA5kCzjMbP7Ai9Nh9VUOg4dWfynaOKjG26htgrpM+7Uno1ohxQ==');
define('NONCE_SALT',       'PU8mknn+UUavlxE41RCzmFFcZyky9kCx3EJOJfx2zoiuOLLCEiFXrocAD/A1hdbboDWzboSe5gOByGLWDwBf/Q==');

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

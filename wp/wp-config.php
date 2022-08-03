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
define( 'DB_NAME', 'jynxcujg_wp458' );

/** MySQL database username */
define( 'DB_USER', 'jynxcujg_wp458' );

/** MySQL database password */
define( 'DB_PASSWORD', '9pSy5.7-KV' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '1b1gm9p0ohyunkqqkkdy8iho7e7fyvic5nczdixqn22zpld6in5sa2anpgyaqzqf' );
define( 'SECURE_AUTH_KEY',  'imkcovzyafbpfuydshrkinmsow3trssvw9euoinsaye8brpcykxcp4jujyslowyh' );
define( 'LOGGED_IN_KEY',    'gt0unegh5pthjzzvvzxt8coblv2m7no2dgwafnu969s0ike1iblhtqwlzqj1fbcm' );
define( 'NONCE_KEY',        'bvz4voowkteedohy8449bdv2zvhhhoqy7vaw4iocmjk65n9m5ltptcu6lpxo2qfj' );
define( 'AUTH_SALT',        'nrfcotvqulci4jv1viadrbhi8gsrofsg1ek5zrvf7pj5qevoplgy0whr1q99ck0v' );
define( 'SECURE_AUTH_SALT', 'vbclk1uhoobvpftfuspqsukwh1qfvemtl242ybbp74l0bvrxebj49nn5hsbnovkc' );
define( 'LOGGED_IN_SALT',   'klyhqitrixhpqoqvgoqly1vemotv4zuf7hr8x2ivdvntpe6dxl1runoewjjqx0fl' );
define( 'NONCE_SALT',       '9vk0p9qrdq4jsn7wql5akd0njmwqhyrgekykbs795yj517xvhfw6onjvo2kuktd8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphf_';

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

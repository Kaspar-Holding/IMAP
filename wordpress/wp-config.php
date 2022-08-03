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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/jynxcujg/public_html/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'jynxcujg_wp_l6mrv' );

/** MySQL database username */
define( 'DB_USER', 'jynxcujg_jynxwebsite' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Asitjena@7010!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'FD20u6v3)Q:h9FRI*0H2)Bbo63sT*~(wN)Sm%2W6X4!%A33a6nk*p-h+3DZ0/bYW');
define('SECURE_AUTH_KEY', '07+[vO3@K*LzN1~0xRW~p9!4w5pvM#tCR-Mx0o96Kk|#d09((/dcV4US9XP6CdJ*');
define('LOGGED_IN_KEY', '*u4Wk#(56hTJ0zBF0Q|;5d-l]8|!scx9uI_7d10y~934&@F/hDN&O@g!7-_oScZ3');
define('NONCE_KEY', '+pPv4MaONu||#v-f@2YT9HfA9|0i)3&J/o0;tI!Bal6951894|K/!86cLFl|@UE4');
define('AUTH_SALT', '68)VM8669F7M4iJl4p_1l+u(4LVw-Z2vrgN2-39WmCQ4nW92NeX(vJnK3d0_a[c&');
define('SECURE_AUTH_SALT', 'MI]zpWnc-4tk942L9U|b|zpJ)15Cn*1k&]-[uVH+Y2adW)/c4dA09jlCb8rvy@9z');
define('LOGGED_IN_SALT', 'TbC-ih8xKw9A2VEc8[_W@[!@#J5z@E5:31m;0l7/RA4l1@(e#p&B52;*9i7w+8ss');
define('NONCE_SALT', '/6;fQIW7mr/!i;0k20eY0a[pSk4ku8+x28SgTjM4201T:/RLug@1N_2|Abd3X8f[');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Q0N0Qsu_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flux-digital' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'RNXl(v2-p,;4er^WRC[[L(-oF4-uJ9&S+]tA2][sgRm!sO-nXiV_gZcY=i8L<1tn' );
define( 'SECURE_AUTH_KEY',  '|Eql+r) 0d?j<0]sDO4+{ZN@0@vZbU$fw 6J+x*-XxPUjsk[4/32_VS-s*](BS/>' );
define( 'LOGGED_IN_KEY',    'nbBzm!E4 iq}%7:tuzwmrf]SH`xHK>.ph6<MQf:0wf8&B}cnQ4;]@sMe]G~4jkT?' );
define( 'NONCE_KEY',        'ui~__<3b!{ZDoS5hDR@`-@yK&RrPlu%q).2<ad3%HV1:;-PDL_56,;EqIDG=}}T ' );
define( 'AUTH_SALT',        'p}C^QKEI^;}65tO;Lo}39jokQp+5wRgsuq-{89P&q%gHa9HP{=6V8CVe`]q8aRgA' );
define( 'SECURE_AUTH_SALT', '#2l-I?y[N1_p _lmS5~SyYD,*7S9^k;a58}(c/DS?mBK8l>~07W,4<W<#5m;^ql/' );
define( 'LOGGED_IN_SALT',   'Bxz]R &)8O7R/-]jFW]fGB/OId9k}e-.`odm|)_%k5qknw6.RPxLb4Hnw)GzlJh=' );
define( 'NONCE_SALT',       'E2/Kf5}LgR2l 3<A~ji:vD}@qD-WE7*^Q[p&t}F_~7&aIY5`9wAdX7T9Fj=7#@&e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

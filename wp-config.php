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
define( 'DB_NAME', 'wordpress_testing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+dY<i_C~[JZ<}c8#x=4p3V?&CSTo$5)RbvL%s^6sX`@Ttdk;<Oi`y{|fyj)wL_-X' );
define( 'SECURE_AUTH_KEY',  '^eYdeG7} dVqkPP9wDEln4l-s>C`8o9l#s61M>(etr+K%mWWKdSB7W,;8n+2k^h=' );
define( 'LOGGED_IN_KEY',    'BVhn&%r.$D20cPfr,[:HJ2Nol<fJKdRWz vJFndu{Z~ s;FY(2IgcDb^whQc>Ou!' );
define( 'NONCE_KEY',        'y:Bbpyl.-t9||:>hfcJ/]wZrirt1xlL,7EJ-0Gu69.<`YfFb-K.m9oC8A9Eks,LU' );
define( 'AUTH_SALT',        'U%q+S,W_.;sHlS.,W}hZ-@-L}4d<]vRYD,m]&kA_!`j73`)]#VpL`aZJ|;f#FI*F' );
define( 'SECURE_AUTH_SALT', 'Lft}`?eLF~>z9LybJ7gQZPrhl4h/8H!HsDgK%:f_6YqU#NNk(Jyi|D~Oij^P+5oO' );
define( 'LOGGED_IN_SALT',   'o9*dK>4ez?s8}dLS2}v@$*JyIYvqX=f=Cm?iztluVyu-)U(Do? O*,KF{pU~YxO~' );
define( 'NONCE_SALT',       'U)%]Gyw>${fZ^~t@cQ%6!=F` gd}jN_]{C|HM)^2Xw|vF?:n89:SdT-go-WL;rBS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_website';

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

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
define( 'DB_NAME', 'tarea' );

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
define( 'AUTH_KEY',         'buG~|%)pvU*]HJfQ8MPQ?1KC!qUJ6b)r3#Il[ SlLb s5d##s3RTm}Qf=N~z0B`i' );
define( 'SECURE_AUTH_KEY',  'O$oqHmDxzj+D4Ag2iC!^/^>~2-cltkr2ytSn-Veb7=CvEiiY<Q@Y*3`]edK6&4-b' );
define( 'LOGGED_IN_KEY',    '33yr1sRI2Sk9#]$Pq=X+em*a3eJ&x@J0PrwO80}A*.IF@E(5b@WC19{S#04vW#3r' );
define( 'NONCE_KEY',        'xByG8<p}Lsq8iO5O=KRW%;}oySiaGN,-Lh^&v1|5W]Fqvg>0<,HOxcu`_/<|Dp2{' );
define( 'AUTH_SALT',        '}uut]hEAu1r/{A9%Y)1R?<TaF~Uy.)s#[b7J6nj7q+/>HR0-WLC-~t<$/%gT$59)' );
define( 'SECURE_AUTH_SALT', 'j_+d^Xn1Rd,v`*p9w:{S<6h4,P=K3syh}4?G,0ymIgroi#+/Vh>CH;~bv% }`3|!' );
define( 'LOGGED_IN_SALT',   'k2Kk{3!zvvVqw<g/c]mWW$cWz+Vl[zSQSP|]uR>2e1t&c#sO0rM^1+>?#,mHKNtj' );
define( 'NONCE_SALT',       'UeqS(2W<;>FIT$EQSYV9+<!QK=Urc$>!<,`V66AYP/q;PWe>cd?xaM6G05x3957P' );

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

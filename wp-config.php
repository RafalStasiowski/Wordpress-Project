<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'sample_page' );

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
define( 'AUTH_KEY',         ',IfD)RLx8BQyJG?XO~L/.Ww3<eYDO~i-p-E6EG4RM0SS-k~6Vj~cfhLql&rHf hO' );
define( 'SECURE_AUTH_KEY',  '<KD&W8Jmw50?M6i;k1ybAN6_fDxq2`&-ptx[Ub%Yb#G {{zYYTU$@*AbUQVxbijj' );
define( 'LOGGED_IN_KEY',    '6Ug*eFnQjZ} <-BwH?|_4[_Q:`-m<W~46{E[tLd>>Y|7?.U+.E0W/nF.d@eG`S8q' );
define( 'NONCE_KEY',        '{A_#mLd4T9FjZ0l9#SY(0Dv<yS;{i HD|Gr=;g8EsyNC2,)E%Q|YWBCXJl.eS-b0' );
define( 'AUTH_SALT',        'xM4~xup8Vc(=lJEU-s.A;UQ7]$.?-ZT3%4^zs#p@Vu]Vd0gb!kOm6?Io[gRLciAW' );
define( 'SECURE_AUTH_SALT', 'Q+ZjihdD^A_?#w$&cxr@sFI2,h</ Bn8V5V ;eP7h!xSh%Cz:qw8MCae`^kxHlL(' );
define( 'LOGGED_IN_SALT',   'w,sNy#|{9M_F376NB:q{r`TuWq|jsjt:_VGnW;L4l|Qdbys!MVbmOReo4Vd2=EFV' );
define( 'NONCE_SALT',       '9hPkNB-mJ(`*s0&)mQ deEE)`WbFsivVw+lNEQ=4vCVwh_^9.B~}xuTmP##qECry' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

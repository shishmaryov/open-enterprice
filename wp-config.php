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
define( 'DB_NAME', 'open-enterprice' );

/** Database username */
define( 'DB_USER', 'oe_admin' );

/** Database password */
define( 'DB_PASSWORD', 'M/DKddGOag(NPcoX' );

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
define( 'AUTH_KEY',         'T5_|,TUJnsf|v6T!HO4x%UF`QE8Mr}RbEXvTylx#9uA<8Y5u/0gL+&s.<SKrcDfb' );
define( 'SECURE_AUTH_KEY',  'E$f!E3Gg%>imPB+VCJjoetRydcrxB/o*yvCMIJBJ`2-/ukHL- ^-n+/3M<H>aeD^' );
define( 'LOGGED_IN_KEY',    '7-Zym/!DeXg#X ^B):jH({,]zR2&Zuxhni:5L90f}B_n9fHgcPEmI1Q]=N<XS1%H' );
define( 'NONCE_KEY',        '$,(y-ZxO1]06sD8Ky)l_fl`]M]ey@?_`<tGEyjoGjR+d^o6hLqdl|jx7&$3-KcI8' );
define( 'AUTH_SALT',        '^}eYrK`DlHPX5CF5/,VF}PXWudTJZ< 4uKT?k^(&r!_iW{`BPQ}u8l9uZZTr%emL' );
define( 'SECURE_AUTH_SALT', 'In`IOC-hOXz<;}&C%{YhMAw^NI1F-o1$gTMqi%Ql]VC79M+HGl} 10(? G}R`N5a' );
define( 'LOGGED_IN_SALT',   '`6IT$BRB ;1?N5##%X[y`$J5%Y[YY*hn#{hMl*ry.L[6f3hC/FUp[^|BZ1]kfsR:' );
define( 'NONCE_SALT',       'kbMM&j0UhG1_h`#ICr!]qs5VyextZ(^4DBFJ((]D.}jHG)8 C9HuhL?A:tpqn)8S' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U,1fE 7n-%!m,Jq>q_ZMxk}!WY. RJgmIcOh.+vLWu|KOs+n/sh;G|Rl5q;8E[f2' );
define( 'SECURE_AUTH_KEY',  'C#Ao^Z4~,;(qJ(BI;3RRbZ=mckE2].:(;4@$Tq`BG-4M[|DY{cU~2<4kS@f4[cf]' );
define( 'LOGGED_IN_KEY',    '6L`ivb.66o##lL_ Nth33T>QW`Eb|~&F!E[ep_x3W&/5nW9i%#a5B>DV$:1fOi}B' );
define( 'NONCE_KEY',        '{63kJ2_&zX_KzILtE$s9_#_/Gi:?I@+OR@wh:agqo]k^S)>0;BIO2M98@e6he3c6' );
define( 'AUTH_SALT',        'S)5;P?wP^rf3lAW[r_=;Xz|0z!ZCib$Ej~T+t1{kBnC~@XM#+D<QHaW:RC4tcGf ' );
define( 'SECURE_AUTH_SALT', 'd.hQ=pi(`>>d]cl{guH4g(b)+rbc,sjF:,$tJQ0o5wQf[}Tx_/iWmU6k***n>3ab' );
define( 'LOGGED_IN_SALT',   '}wY,CXCc-[t|8j?h<*j:nf#;6Hw5I(;(Lk|0,X{U^seu{zSb}X&i+&tbI3l(R7S-' );
define( 'NONCE_SALT',       'OL>QwjO`{!:LDFKS#4@iPb hswZM}~Nn(n&[cUI_^V,#S&1o7j*TD>)?4]D^e0G:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

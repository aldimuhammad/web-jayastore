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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*)Km&QcVWj8kQJ3@%STG,}V?uT`~%4i{1]K%Q=r#:C_QV$n_SRN_>t9(yZ#Rf_W0' );
define( 'SECURE_AUTH_KEY',  '`s?TINClA$YfgF|v{Nj+~m0wtuVw~NM!~x5!j^j5prJv=/<YNwwQK06R+.D{]pt$' );
define( 'LOGGED_IN_KEY',    'q:w<%pm/AQ=(0H!-=CY{wWexZw!/kPkMO-?HE>?&}K~g>KT7?_otLD )~6{j+AQi' );
define( 'NONCE_KEY',        'I>0|FA%EyxRd]IB/C$`5,+n=dUmJ&?;d)NZ1Yxx/a!L.eec&(t#Z;enA2naVF^J-' );
define( 'AUTH_SALT',        'n)/t^ks^fnZVv?{oIx>6)@^1Tn_(|7%3$bh?nGe4-#Lf;9<0Q&to?q642K}~S;.-' );
define( 'SECURE_AUTH_SALT', 'l~Xao0`-1hsmT%%A *Nif.(WVD!FT`t|Fc2|rhU2`1Bc;d~SP~z#z.?l+h%)bMXE' );
define( 'LOGGED_IN_SALT',   '[O+&xz-~MMsA.Z}7I$1=GU8x;s5CaS&^F)p OttXFu&D%0bG4dP#Uz]Lm56Q#Jvk' );
define( 'NONCE_SALT',       ']q0o/P}6p4il)K@|M[{v+X)W?9mO{<JuCNz`9.>@{ZFE/iN){U*NLXYW5X2W*c`_' );

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

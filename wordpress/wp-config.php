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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'aPwSFP7Fh}Fu*[P`)%eH=aL6?zH5_6)#U0OtY%AQCv*4yu`1hZ3F! rX?|do-3J^' );
define( 'SECURE_AUTH_KEY',  'OLpi#r%.>NoK+kjnI~Gqr2eC!c%2P|p(I3D_nAYBED[;OAp`MKZ|lDao`G]%IyY<' );
define( 'LOGGED_IN_KEY',    'qlu&UMN2FP:EGkPf/syqR}/QYaL-]w4Lncx%{MUnv</w%y h(~m1LC2z5ng,*9*b' );
define( 'NONCE_KEY',        'p=LE^[E1$Ne2v5Ik*!y`fg_&zkF.Y,mrd>52!X;<!9G(Kr,Ey[y }kz$iEoG%4Po' );
define( 'AUTH_SALT',        'CGB8qN!8,0+p,S}Gl900B3mw$4;>;=!&,[6z_oWNVPa3_W%*54+(ag~Cins|C@g(' );
define( 'SECURE_AUTH_SALT', ',DT` :^I&N/o#0znOJiX2nv]Nw>0j*wozYsNPr,FYJO cA~ U;ij8R_b!.<z>3r]' );
define( 'LOGGED_IN_SALT',   ')}ZWz->kfR(X4|BcH;ZO7LSSTh5N2-.1u%fe[,1I|re.,Ha],Hl{_) ~-jK9Oge>' );
define( 'NONCE_SALT',       'OyW[0$RUtnZDeujG((r:Z4(h1 ?&8*M[ozX3=>YufW!t>/]9[Ok:8Nt5}Mroqx`#' );

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

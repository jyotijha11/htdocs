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
define( 'DB_NAME', 'my_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3CW1KXCN5L-o#&X76)+?8CNZry/!g,~}!~, 6sKQ<n=@$`EE{)mk>3Eu V4e$Cis' );
define( 'SECURE_AUTH_KEY',  '`R$|jS6n{C$RJh}X2cVkgHk}tLI1NDNk@}w6=b6Z.w)5Wm~%{]X&.`O0QcLY_>W&' );
define( 'LOGGED_IN_KEY',    'W?r5f:-z~xx8;D=#<&B[ y=t]/ol!iI$bks:44yE:B<bkr@N8=CP|~JS,z,fGtqW' );
define( 'NONCE_KEY',        '!UfQG7Y+%K_}.M;f6w{]r^ZZqmCGPT:S_22>|3:*Z4k)4T-87Mtyio?+l3Y:m2*q' );
define( 'AUTH_SALT',        'PA6XuZEC@;6VY7,~462`qqBH}q{FL|3fT)mSGo[i2Wc4Kuja $?=W]PJL+eDC$sj' );
define( 'SECURE_AUTH_SALT', ',f_xCWoU+5f$O^(Y^Se0acf:o#C4-P{HzirAT*gp_5]xFkCT]acU@U>i~){%.IO[' );
define( 'LOGGED_IN_SALT',   '5ffCN;yg9Azs^Nq*{*=dU ]MC7?o1JNe$(eRZK.u-;mT|y^jG3O$0+2fx.k<5K9e' );
define( 'NONCE_SALT',       '6xkmZ <0xfA7nK10A?7)F#v8RoKMQu0_pH1@4rWs}pIAvBGxQ+<~N!$T7|WSn_@o' );

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

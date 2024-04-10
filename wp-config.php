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
define( 'DB_NAME', 'proyectoMV' );

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
define( 'AUTH_KEY',         'f<%&U*5*H%E=`//f:F- &DLFMUx,+w`Mj?W^]wg`g[H&qgvCY7HICU1hLpauRN<{' );
define( 'SECURE_AUTH_KEY',  '[j7ukb8Q42G]]RJkpvX(>vc(~B4$`c%eY&>Y=KK[ZIFO{Mk&=jvg*?SdZyB`-ome' );
define( 'LOGGED_IN_KEY',    'S8}uh~+T{@rP*uqNdU:9?9ZOXIc#)oQn/WszF2qs[PS (du:l{iSxa-kofn_n[}6' );
define( 'NONCE_KEY',        '#JI|#D[[Pm0$n^q1x2^ghsWkpXB>)VE#h,|u;^y}%v;::d 1>)c;wIeHzv{p|L^0' );
define( 'AUTH_SALT',        '50?@>}ImLYm2?Z:~^6M;-&m,gz}kD,sRK/,59~;A_CwX^ZXM6&_I6^c%Xr4@xQA0' );
define( 'SECURE_AUTH_SALT', '4Ymn[L,W5)>Xo]Vj ! ?)72w?WpQ,#:Zu2YZs#%1[$8c?We2ad4,;^L#AFXg&ft2' );
define( 'LOGGED_IN_SALT',   'DF%s,,c.[HV|-HRRfN-}wJhH<p2wW(5E_1NOPM<0g,-sU=-I?fM%O7/]G]+sFRfk' );
define( 'NONCE_SALT',       ')=k^s!s8!`-`sk}RAS`}+|cwd2?u>3dBUNd[BR+*{4,zFEMdow#rXMb.F1QD 1?B' );

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

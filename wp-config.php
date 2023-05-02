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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         ']-3ljrtKw.U$9uaXsoi$#AM{CelylJ]O-ey%@3=!5Sxo!Yxs;i%-cC)7kH Uf1^]' );
define( 'SECURE_AUTH_KEY',  '|D#$2ChY7))>V5_ziS)8)y2ZP=w:E`V*/C&EcRz|W{`7rUMS&>M7;F/ZJ+XvB9Hf' );
define( 'LOGGED_IN_KEY',    'SNUoZl7J5BhKa-uYEKhyx;::(<dZ)DFu7}G0|[73tH.D7g%Vz96[@ Y91c7cJim+' );
define( 'NONCE_KEY',        'CPEk.WZ9`}#sY}N Kn?>J4lue*}8R9clMwo|?`?o@=t BI+,okg U>ep)/}pv>/7' );
define( 'AUTH_SALT',        '}(v%0dE~Q_:)-Cd])9{&*yU_FQyr=ynEZ;z-A//F[RcvuM&[B-exD_{jN+TX)OB]' );
define( 'SECURE_AUTH_SALT', 'F|6Hnt<*$P{b)g1/{v5<b:n*NH%0;2>#8Jw1s:;vVlTcI>NeJ|IU([TN5&7yNstZ' );
define( 'LOGGED_IN_SALT',   'u-Zzl.x{ehAA@RDgp[N7JOElYeFP^%]0X^q!_!a9iQ)I>(~zWEO`ghucD+$,;]Z4' );
define( 'NONCE_SALT',       'AW ($a6#vjMy;hW[I%$`C(,y2 g?3G8;% _~(~:h<0?ODqQWQ}hWr|J@PAMs#X2f' );

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

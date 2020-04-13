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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'qq!t&:N;`K}mT[o)}O>3WHdsXRMqQANjy;kFIGNP0SN=-mMb}6F7P 0X`XHH,Z$[' );
define( 'SECURE_AUTH_KEY',  '#5;2|>PZv!+$l`:]5wlJ1X4<Otx)6(D^>yl.j1!->]B9zF63,+#7%f%-R1IU^SRW' );
define( 'LOGGED_IN_KEY',    '-z{NjE`vG=!GTXQp[ j-A(*SbFi^4R4ceX%,1JtJc]s+wAUHQPOW7L)8Ia/EB-dD' );
define( 'NONCE_KEY',        '3*C~r=1<x%FpF_[R93&X1GB4[MP V,KBUH*|4l|IMB<{-Rq^wi[4/==y[j=mO>Hw' );
define( 'AUTH_SALT',        'STfb 78u,q3 ZyVB6h5[dLBMF4mKX?B]m@hcXy|ef)cYI,7mDSlQRDOuNqhs%[[}' );
define( 'SECURE_AUTH_SALT', '(%LNrFE][BmtoA6Y$nzw,TE4^|rAPNBjhxpYn[JXc;WE$-g@jvt!hJ:98Z-`1iOl' );
define( 'LOGGED_IN_SALT',   'u0SzNSJ:]zIF>dSpJw?(Kpd,5Bxs&MLZj>G_;#GD8l|m :v$assBlW_+o|-H*&uO' );
define( 'NONCE_SALT',       ';s/?H%%/k:S]WCMQ&fGuU-8GH<[_1$tH3{0PWi1nR/w<Mjs37sTIB49*AEwpRtQx' );

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

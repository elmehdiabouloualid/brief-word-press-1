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
define( 'DB_NAME', 'codenddesgin' );

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
define( 'AUTH_KEY',         '.*^9GR|0cRG]M6fx?!A`/A-z8TFFaA?nHD34fZu!ufbekp{9bFZ}y[a+{}@ },N7' );
define( 'SECURE_AUTH_KEY',  '< mRyfge+9FqC WP0:Dgv[[<3iR]k^m`au5laRmUE},Q4Bbj!8~ii#g3J m.U~<J' );
define( 'LOGGED_IN_KEY',    '*xMJFT^RrOi&$4&bIq%h4}Cv,~%j~as2;?$ueK/g>#b;JFp9l2;#/zNu?^(E|j-1' );
define( 'NONCE_KEY',        'QSPj5 xmS,dC(W;#V2W2~9NeEl~.qS|ZP!%L,#%@v>e9N5~@Of+V|*=2(6[x`Jgr' );
define( 'AUTH_SALT',        'JAvjA^LKmnZ;J`1}`~7h&mWH,)A0$82t~YkP;sR2lrJer ,w#g2,6ZYh&M,>=WGy' );
define( 'SECURE_AUTH_SALT', '8bX)9Iq[-$0;-tpa4gKG<ze0,I:@akR*e?h`E5LLA9SQ^Uavo wd.<CQv9H&_7t5' );
define( 'LOGGED_IN_SALT',   'd=n2mdB0EXehQM.5wnys7A6YOne1fsxFy2(fh^#rp/``WlAT`OIs(OQ;2oHU1+Jw' );
define( 'NONCE_SALT',       'a=-HHRO};6*Ljj&bq#*f$ZQqi9UjlLfJD~<l5fo16%I#!&kV3K Ff-0oj%Xtu]^i' );

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

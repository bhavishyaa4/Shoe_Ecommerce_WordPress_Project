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
define( 'DB_NAME', 'shoe_ecommerce' );

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
define( 'AUTH_KEY',         'q3~ck~<9c_zQH+iqN@O-rMgvvWVmmk]U[zU~ODz7IiL9b}T(Rb:[^3skvwqs k?%' );
define( 'SECURE_AUTH_KEY',  'i:oNVs{U$4Q}72]!)$BLcPIM`EQF:<dIATvK@h@8F].]=*(|Gm0MMns1,Wnf<cn#' );
define( 'LOGGED_IN_KEY',    'APMqN&{lOaCYuXxCfpCQA0y-GeC/zKEDIhl@o/w)&76Jj{B=VDEJHN%gYVf^[&zz' );
define( 'NONCE_KEY',        '?hxw,ntrw%fUN*|d`6{jN98bICcS.q<0lOos^;:3n}nHp:v!ftj^C|RH*OicFwKe' );
define( 'AUTH_SALT',        '<H4izwpM6lw&4F<TF=eS2D&m{!8+Z|)LRwh4.[O83{89Vq!!6Z6}L75k<qp+d7BV' );
define( 'SECURE_AUTH_SALT', 'HX&gLZ2Nst*(% `tw51c2bPoM-KQL9gG^sEnlyiCehND5-fa~$>QeD@{s9?K3f%S' );
define( 'LOGGED_IN_SALT',   'Kw{z]l~Ckiq)SU29y>4Qd)eowSOuP$m==pMQgF!VR[2=8VBMS8HBG#<H6<4 g#o!' );
define( 'NONCE_SALT',       'KLC-aS~5C}Ikj WqT=*KRt%AQs{bhIQyqYQ)nWm}K^b[d2gb>^s@`k  hDs3k{P9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mis_';

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

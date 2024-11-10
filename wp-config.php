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
define( 'DB_NAME', 'blogdb' );

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
define( 'AUTH_KEY',         'QB(04-;WwY@LH1s.7Bzk;%myR@/4#rR-v`,8WPu>10h,I~E5 |fwDQ@)mAJ*=5zE' );
define( 'SECURE_AUTH_KEY',  'w)=Gi$s9}Pl`ngJ7$$5yk3$@7s!2*CAzhRw+sx8nh]utB[f?]7P}VeN/g7)`q$Z@' );
define( 'LOGGED_IN_KEY',    ',5+|#%Evrx[n9llxH7I*)jHKYXk.BCl;]h:M!g:SPgV1Im# ^eJ#^ImY.L-?QV~m' );
define( 'NONCE_KEY',        '`.{7x^L(1aTM]:U7W%0TD&uf;#N>8A0LmzdT%2!RIa)[h1eW0SrzWiaM6@<f]!P+' );
define( 'AUTH_SALT',        'V*b&Mkkm.iy]Kz+6Kcp{IFH{2ZGeoUHn_j}S^aK^|wUvfqSBSC1CCL5>vj-Q6B-@' );
define( 'SECURE_AUTH_SALT', 'ekjpT{bDk[1q6iHbi2YG2C?At)-rSr.do,cmEBEd:UA~&M`hF$?Kr@{`R-sJ-nt7' );
define( 'LOGGED_IN_SALT',   'X2rH]CfCIk6O|3?1Ua*eR>g@9dv8)=M3!!~c[HPrEfNC{!PEOdMKzo^^ajB?/]Hq' );
define( 'NONCE_SALT',       'eH)iCPhq7zBYYn<mae3L@a|y,,,P+DF0u.bCdGysa_pA=Ig0G}3{P6`wr,.A]/TZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rz_';

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

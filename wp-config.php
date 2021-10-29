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
define( 'DB_NAME', 'creetheme' );

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
define( 'AUTH_KEY',         'uA,qmC40U?i$3r{8lImGtbyNz5aG_$~?)jB^I,{(/*|EmB,}w&m.OY8AYN0ICQXu' );
define( 'SECURE_AUTH_KEY',  'mEyP2:o}B>ltWO>IU`Rytn`^_|GZ^{Us0uTYQFY#SBvxtVahbFP2~^ig]msKIQMt' );
define( 'LOGGED_IN_KEY',    ':D:{)K~oha6$o4G4.Uy7lCfzrfE;@Fb Xh>?e(qH,6Xcpca=hWK$>RBo%MLRWy1V' );
define( 'NONCE_KEY',        'P[4^>h4K|/FK|u4E:Tyh]&q y5#:reRS_9 0thJ4/,EK0IZZ~b<Il55Y$y[oUAuC' );
define( 'AUTH_SALT',        '}Ugt$X^h?R{vEXot}PqQn^W.kx{vl[Wg`v{9UT0s%k[.6kcWd*K6|P~P~|,(qhF%' );
define( 'SECURE_AUTH_SALT', 'RGoMxIpJ>(dbc45Oe*%e)Ugo[GFbduJ]3R=89_tpws.!|P/maN.9#No64{w8*Z=H' );
define( 'LOGGED_IN_SALT',   '|?[mSWt+oq:y*Z0<keqomgHMbv{sx:jBXkV[BgaM)8ga7B*iY)ergtO-dFbDiY:?' );
define( 'NONCE_SALT',       '!BZhq}CyS407LN[2%)&h_7SrTT,f@tno: Ab$38|rVQi` H~)J+{zPDM:x3^AGyY' );

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
define('FS_METHOD', 'direct');

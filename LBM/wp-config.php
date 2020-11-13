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
define( 'DB_NAME', 'lbmtest' );

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
define( 'AUTH_KEY',         'Cspn|VDdU2z}^.Zc8m4+0r178[o:Sob7LMD|3 qpnRLBB=+^6rjC4z$ )JT-#r?=' );
define( 'SECURE_AUTH_KEY',  'GH?AFwg{(2,PK5E>EVhih?Y5vVr@#QGGx?Z8SQk<&ciFIALxgq[ArEh0hDGQKc/0' );
define( 'LOGGED_IN_KEY',    'Xq?I(*+&%DMTYKJ`k,oF37FU4$?$#^&>B^TeSW]o~0?Scr!_>_(VtEmWk}G>q g1' );
define( 'NONCE_KEY',        'jB(Fr?[_FyvlC/3D1J Ij8Wu>,2;?,HlwKhP~07AR<Y0Ur;cRn1-:qgdEN 2b+[ ' );
define( 'AUTH_SALT',        'z:}?`7DZSJ$Ib_F7]V;B:%|w;q|t+z9~5<Qj@zwV0[3!B{rtoJa.K=*kn9<z^=L~' );
define( 'SECURE_AUTH_SALT', '%0APL6p_GNi56peU-<,_DEM7H<2jeuTFl;.} %9*Okj*)Iwt#@k6fb}@54]_?J;d' );
define( 'LOGGED_IN_SALT',   'rUJ4r]8Pt5uQnSstW%zL8$ OKUV684sTj2j_N.V&c3*d3y93w9}[G._&rCvP<?Vh' );
define( 'NONCE_SALT',       'qw[MaEX=H-=0qCy)}W;+^;A~3fY4g2|WZxhBYSPL%id,2jETp%OQjtp-W:t5hh!a' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

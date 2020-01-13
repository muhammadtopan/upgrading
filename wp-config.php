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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bekal' );

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
define( 'AUTH_KEY',         '}c,P:)4ShJJsc1~8q.xbXNs~1}WId/SG1(RgU33/nn|Zo+TaMQ&Nv}A@N?6]Y@}N' );
define( 'SECURE_AUTH_KEY',  '&G3+Faj|K)[e5%@HW1K2S_N2hY`AZt/zN)ZY~G4Z85nAGgI/5?FC 4Og}frfWx-v' );
define( 'LOGGED_IN_KEY',    ')x7/l/J+^L$(%9wNR~)XVJaQXSi*V{CfhS3Jz-a8$g<V!e_:ldbqdvW*(UF,Q j4' );
define( 'NONCE_KEY',        '>v++h6p84%d0A([b?90fqk!lP ItzY-sm);~,~mk|, jY_pc@v.V=J0,4>sI8hpB' );
define( 'AUTH_SALT',        'cD?=to$.z55N_.?`TC/()nuJAiBHDV{+cjAN]|9fHq|ML7ALMptkb)Va eEcAraE' );
define( 'SECURE_AUTH_SALT', 'qB.BybV1.MYy3]M1&bAG*@Ya^k]78V_dHSvf5%t}rQv*NLLKg8yXf>D47xNwkYJZ' );
define( 'LOGGED_IN_SALT',   'gs:(BD*Os#:5B/GS0c(!XlyRPZon1y1H,[~r7;.!JSekw?g.V?o0sKbc^,I% OLJ' );
define( 'NONCE_SALT',       '[?}{Jy^4{iJ4]GaBx.fFg$:k<]=Bk4;BlUyBbD|d{m.^biX7iUU(!H`AD)hXfXNu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp34_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

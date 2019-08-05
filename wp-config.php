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
define( 'DB_NAME', 'jwordpress' );

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
define( 'AUTH_KEY',         '@$b,?=/0:!#RPMA5MDre~=Vayb5,0O%&9;[-JnYY^yI6`~|,5kK~gBgPEHQRmn:#' );
define( 'SECURE_AUTH_KEY',  'Hl|S<8?ck-US]37B7S+qNB@|55m:V:{iV,94tLNbF9$46XH+{5bh52=tN1kPtC^[' );
define( 'LOGGED_IN_KEY',    '6@.#M85 qT#XN@DJ>ir$}<}gtYW3C4>Q)I{V64 Nyf1X?&yi.xM^9Ego1k1m;,<9' );
define( 'NONCE_KEY',        'P2KW1~v6[W~O24xRoi:<fVImRo1Px[b#eA$n^a^Xn%L~L?(Qz;4^}tRUE373Pl/r' );
define( 'AUTH_SALT',        '!cUM?[jIFv#YjR-2Xp)Oj9J/=jM)%b)1|%HVRVV#]~aj_`]r3;0JCrm]~QFO1S#F' );
define( 'SECURE_AUTH_SALT', 'c7v>FvN*wqHVR,SMC::7Hw;YdQ:[u?=GFooO2Yv.0:2zNU%Ki_<0_>mHDl{%`j&K' );
define( 'LOGGED_IN_SALT',   'b~MX^U@R</ciqx~m2.[cQ(xV0|Qp$])[iDRQdN1cqS_}(g-x,`@Cvtc5,{u3yf&U' );
define( 'NONCE_SALT',       ',Do$ukvb)T]OA,M?]aXIxyWbNWtC$Y7=jhqLk`tVL?q,ttKf*H<GAIhQd=Ey2,CN' );

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

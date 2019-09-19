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
define( 'DB_NAME', 'salesforce_db' );

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
define( 'AUTH_KEY',         'M9qa$dtPsH$/d7Hz~J:rgd*Q 2X|x!wrN 1b8{ue{QXCG`Ib7OkBz9p)-6k.pMXT' );
define( 'SECURE_AUTH_KEY',  '{C|sb.8b5Q,E+B8gaAAVZ]O(DnLqR48.o;MsITV~#_Xo#G7&![S4i9@}3!t`[6Zc' );
define( 'LOGGED_IN_KEY',    '?r85V7bCS4m_.CP.dGpZ}ZZ.sSt;~mP_*Na*eQloy` g{;G,Q_gZ7Ec~dI{xih)h' );
define( 'NONCE_KEY',        'Q?M1=v E1GK:^5QCXD^NUDE8KBY(Vg s61?a5Elqg]v},Deje$RqB:^Y)dE3KxBD' );
define( 'AUTH_SALT',        'u)lWwbrZM:!ARlKCf_)qiqnVT[L=5Cyjzo%[i:@a34=b.q5(93t)5Pk3e~^,aw8/' );
define( 'SECURE_AUTH_SALT', 'n{xi9+IHPp&=(8d#8ARs0^@AGC]Eg@]h*5aX,^!r8:RC?|BG-,e$$?TLM?{><b[;' );
define( 'LOGGED_IN_SALT',   'H 1HW)GQa6O& [B3zsCZW_-4T=t<npB*l{Rh![E}j;TR2}VY7fj3mBa>jSr2Js+U' );
define( 'NONCE_SALT',       'z29~eFiOXn+br@AmyuedlO`#x<Ecg``E5hd3iqejVksYShF:#ZL[{19P,+>sd/fP' );

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

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
define( 'DB_NAME', 'basejci' );

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
define( 'AUTH_KEY',         '?8i`-y4+2ULe{F(7m=/$c*h$H*A>VDvxCd]Iqzo8uRiS*mFemo+)+<qK7:911pC9' );
define( 'SECURE_AUTH_KEY',  'hJLWtb-)X=s?gzlQG0?OQCaO37eV!Y^pNw8-(R]TCwW|8kB|1u LBZ&u3<+)1wDd' );
define( 'LOGGED_IN_KEY',    'B#zX:uS)h%aWWck85t`3@9O2hx{qJjV,-CKRD)DWwTVQ$&9T(.o{9=>#-O66>!.R' );
define( 'NONCE_KEY',        '3rN-c&x%clWZ{lg@ZB,QKoTSP0q!Yb(tUdw}2U6,B9E~W+gZ5AY9t (U()bDs Ku' );
define( 'AUTH_SALT',        '9CCgkxr|+D`Xs>+X5(?B#{|xjzcx.;6LTgjn&neFX9e3ud)nS0LjyW~V#s5eK^GF' );
define( 'SECURE_AUTH_SALT', 'a/dow!@mRzp#BgE J]C{?{q~Nd+{pF5<borSjh7T%sj<==$UnAp-y)z~{N&RG627' );
define( 'LOGGED_IN_SALT',   '6nuf*V@iZp9Z998Vb!A &w5,i|k2QnaP:ca4DSEze;|Iz7%tkIH>r9KA3qigA;E/' );
define( 'NONCE_SALT',       'xG;J1!lF/ 0(gHniTxZ=ZVfEkhQ@n$t)QqQTQ]%C!Y=D}EQwp<lTp[8>+m?^U0tP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jci_';

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

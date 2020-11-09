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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'wm7Mj#sgG#YxAR9V}nL2o7BX5)csci~D 7yPT&3rj@S!>44)q<39azm{GV#,)^80' );
define( 'SECURE_AUTH_KEY',  '!`ac2WA5<:~-Ep}CnQEEWaCPgNi-y}qx_07uhQ-@exu^niiZCj.$wZoUj<mKSP4<' );
define( 'LOGGED_IN_KEY',    'ew^PtqA&0LUGYAV9i<wUtO]3<DY3trCF+|%^*e$w]^eWrU$7.@gq:$*H3|cJ #tr' );
define( 'NONCE_KEY',        'YB]-)HH9:X#xn8jhx<P{`:>x&&Zd?Mm~pmZi_`p^%pxW3|X T}Eb1W2v!gsXv]jA' );
define( 'AUTH_SALT',        'x*2bhQ)D.uiFyU30I@9a37,{5Dxij;PeFbsp%o,iBZTe@=MteS]reFswvGs]Q(qS' );
define( 'SECURE_AUTH_SALT', 'JlQu;n91!_`=V=}6A GbztK6H*DGjXgo/uUFh0HY&JD3XZ7xK$nkNbAm=70^cW1C' );
define( 'LOGGED_IN_SALT',   'my$!]m?_&J%Ip@2 lSVgm:L(W6r%O6CkM?a_ nf!yxV~4`0V;3&KalGtH,[^g]XN' );
define( 'NONCE_SALT',       'wnUph$JUieG,_.Ay`B6I4(GQBiP@^So9Z1+<c:Xj1EF`?e4uE~EU^8qo=G>.u[RV' );

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
define( 'FS_METHOD', 'direct' );

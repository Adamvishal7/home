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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'AA?F)XmJ= OcvRaKt:L:}[.@uhKT7.gv^z!S=AORbAbUs@xNuUz7E|;BM)^v{m}/' );
define( 'SECURE_AUTH_KEY',   'h87$A@QMz4CC6i!<`25:(#5S$DHeM1S%pfGY56Xqx u~^@kNZ}oFP$PoeSH$Ff!B' );
define( 'LOGGED_IN_KEY',     'n+f|.AK^B8sj8{FI{q}[8Ir}N>U*6v-%|U6({e~WyxO`NX86ru*PFI1QRTI90bvu' );
define( 'NONCE_KEY',         '9lh1$fe7$Xi[5uCLsP!Pxekv);+U;dD3D;b4vO$NjU_+L,EC8J^EC@Gj/q}..-=}' );
define( 'AUTH_SALT',         'I9J/mY6}~z6e2s8sOFP&j.4v$?6x9JmL%BeAAc77orH>< ]>DjoJBp%%pPpCJu?o' );
define( 'SECURE_AUTH_SALT',  'Xu&,gqwKNSb~bxuWT&m8nz88V!~?qPCdE3:&R_YygX7$BrHLL<bT>=mHhIk4oSTr' );
define( 'LOGGED_IN_SALT',    ';OFmJY[$(zpz`w#:2Qte!f[<+Krirsa)Z.)T.~O@`x,TtxXheyD9u^9^:Qxv:^4:' );
define( 'NONCE_SALT',        'v3Q=86C(9#c=k1lw)Lgz`Svxlo#hq)9{]J_Z?]OWPWrK/$zL $~]7zU4dv8Ed;YJ' );
define( 'WP_CACHE_KEY_SALT', '<{qx,.vO( j`I+x`j/v*J<XmI#K#!r^@H?;kEN$]69[M@pU[.tO43ScNcfxa9]B#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

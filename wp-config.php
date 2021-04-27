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
define( 'DB_NAME', 'jdmsakalam' );

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
define( 'AUTH_KEY',         'SRh_1nb#rqqygnk}4s4p&u@V()vg4 1}9d]o!uF#e{vyswUn;3_1t|BK6FKD:uaM' );
define( 'SECURE_AUTH_KEY',  ')`]KV[/)eJS!JEFJUUs=>%j_U7WM;M*n_ZXNGyWML>7?0P@6+>{``4IFol:RduK6' );
define( 'LOGGED_IN_KEY',    'z)w*)Lv|~9d%:R5w}}XL~VcDjSiq!RG?u-N-_T$CM!-0H^38W_B,D<3#Qh23wYOL' );
define( 'NONCE_KEY',        'VKw#2_{_[D>l&q#pbNon$7qallvw^&M;SO8<K6#3gshI}dd#qUrB_v6xa[$op-=;' );
define( 'AUTH_SALT',        'WbxXL{Q-D*_#(0XTIg-TmEctr*V4LrB&UM/xHS%y)J .xR8~}gW=5tkOf(Op.I*y' );
define( 'SECURE_AUTH_SALT', '4O]/oW`C (j391m}SU @?)u0>}Z K,+P<Mr,i0vOK9$4*f4kidV{HBy<Uq^sMQNV' );
define( 'LOGGED_IN_SALT',   'Y[aE|sar_2.e(*4i|hgO@Gh*o~`GvDc0!]pdgD2W5EN~i3JGnkzCM3]4l||6yq0f' );
define( 'NONCE_SALT',       'L7].UW.8XP[n> +qjAGHaAl@F/<tgmd5iIMO/sP{[he3+G{JY(;Bj2vd%XJ=WlZc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jd_';

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

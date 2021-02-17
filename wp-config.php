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
define( 'DB_NAME', 'mjvttdev' );

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
define( 'AUTH_KEY',         '6g,sVwQ11`tD?Ta3|-1SJt`6JhE/<Fre6`+s@6p>aFQ8~fb4]!>ATFeBKqW8<g>~' );
define( 'SECURE_AUTH_KEY',  '|&Dy|`:ad&~tfJL9LUJYX-Me.3+&9d9A{4wPJU{caU|Q=5k]LP9RTAB7WnQGz0uJ' );
define( 'LOGGED_IN_KEY',    '^(#:YQ0 6+X9v92Q~TIDew>kO50e;KJ9{I?9##tyhy:ju-W|2=f,y12xj(#Rlq5h' );
define( 'NONCE_KEY',        '<>oPt#jbFWMI9)i;c|3.4d+o#i[y?;{kZx  Ms-]3c:SWxZ:b3S.eMw@y0(pAM;:' );
define( 'AUTH_SALT',        '%>[^>I+|>/=nv0[[LN,fSI:9HfZL1nzG|v/Ahi1NT{mwp@3I7<w]!4|xZ5IGt^kw' );
define( 'SECURE_AUTH_SALT', '269^6}<,[ lxm|7vePC0 .efb9W _ ;(8Ixa-UKM^~d1`>q:pvrnj}UXS`+DKF7{' );
define( 'LOGGED_IN_SALT',   '/Kb$.ee,{|P+9{(Q4rPY8X(R[W8oGb0r=3*-orV5-i}KpIuQ6@V_g2-v1s;!:Xu5' );
define( 'NONCE_SALT',       'x~qZIgV7p]][EoAOQ2_S/&3~9nNzyhJ,hZ?xP{DJ^+&aZQ6E,u+D^#l@sCvQ/{3D' );

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

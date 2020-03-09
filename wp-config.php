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
define( 'DB_NAME', 'trieu' );

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
define( 'AUTH_KEY',         '@Z9!>LD8B1orQ4*Z$&-E5?zXbUQjso]|u`]-#9yVhY0gaz4s@)ckbQmbl8g2.H#P' );
define( 'SECURE_AUTH_KEY',  '`imxB;A@&@ bfUN(MzwVa)lm=3%wuXrxBZt~2j4}iZ4`M:sXTW3O:gy#|L.pa7~)' );
define( 'LOGGED_IN_KEY',    'Fqxs{,qLVujqG-kpQA,&~md,GQ`n-eY>T(aq%lI%$J!gHC1SjTV,?JB%V7J,Lj+#' );
define( 'NONCE_KEY',        'N/=;{8dc_&Maxzd(K:?:!vTqe4]9Yj^x JdrUtnd,LK?XFj|G..U8P8-4]i|[>Yt' );
define( 'AUTH_SALT',        '<7Bbuf0hDeHm;9Y})QUOoTE 60cf9ol>1.C>_(<$8uAb!#5#Fl(q:V O%w59x]!G' );
define( 'SECURE_AUTH_SALT', '}miUrd?rUy]DMTr|B{ov~JdSHP)fH~$#G&$]:+=+%#6].BnnV3+-]nuDE#-u1&Kx' );
define( 'LOGGED_IN_SALT',   '2eS5}L#)#<~oNvG }bi48$z:AgSf$!3d+_UdJF9G)(je{m7M->L!(r2tgODKV|ps' );
define( 'NONCE_SALT',       'S/?rI/bw){f|A/;5bXND@N8-wy;5YyQJVPv[K>D|YvH!j^*JpQc2>o3@K>cuDf)J' );

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

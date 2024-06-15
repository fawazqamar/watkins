<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'watkins' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'app' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dM?2rOL77|V2!J^wEk$a@{3FO+Vf(QMTp-fxtIujX!#{TO85Z:+1)4!|J8i}+%ug' );
define( 'SECURE_AUTH_KEY',  '%|1VQQJ_xKMkBL5|dbQvH8!#)JL[stWgo.sNDWB>MC@B@{6yqlP2lrhSj-)S&|nf' );
define( 'LOGGED_IN_KEY',    '?r#|+-L[NF(Lb?.768AU,Oq.n)|,p&d!6):m,@`E0kW4)^Ui!!}>!33^E;BfXwk-' );
define( 'NONCE_KEY',        'r1:vk3Z/eIAt|x>W@<SPCelT$Ug*$T6XTk%QzZcS*<n4_ymv,j}k{^&#?|-SF*%w' );
define( 'AUTH_SALT',        '%5~ucA_dz?S9]IaM+N;kB$L%(SNVW0c0d!4^a?~_@ZwWE{3oC6lAr,%-dba:n4c4' );
define( 'SECURE_AUTH_SALT', 'MkS[5HZ8oICpB95|F#*_3cvX<A21YDFGm+Z!=tD~jYs$3ipAEXeL$:&Fo6A*p<o>' );
define( 'LOGGED_IN_SALT',   '0scxo?y7}GmT Y:mBrih|/P** 3p9.skDsLQS5(/p$+,E=2yUw4Ry*<=;c5!bQ[q' );
define( 'NONCE_SALT',       'n-MpD9DP qvL5E^4|zTb^B 4(}.Y~yl__?8e9E4X!|8y~u`Kak*:Eg 2)yL9b-u(' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

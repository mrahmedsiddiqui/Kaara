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
define( 'DB_NAME', 'kaara' );

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
define( 'AUTH_KEY',         'Wy*#~=tl0!i85qB2-,jO4cnnLi-E%.?d/;tPeucR$`H!DU.nVS]H%$FpFy1{L<Uz' );
define( 'SECURE_AUTH_KEY',  'jnv-d=DKW:uC3=65R||`L$d y8*&3g438Sbx/etRt[kt,A{r3+;yqWEu*addYtXP' );
define( 'LOGGED_IN_KEY',    ';03Ze: osn31YJBW]~P0N~jHa4l~D`edd}jV=Sb)w<RF@AfW/rdg(AB/s`wuVNpb' );
define( 'NONCE_KEY',        'iM#J1O{Q09qRiwg>sQHu` ?L<^}Bp6$DW5;=$zJX/7fSBvmWXl.Y?^lZsuzgvMJ,' );
define( 'AUTH_SALT',        '{gPZK]F~8:^nyJY}zqefr__N$u8n5L9RKAvfyo]Ru%ZJw^7jCIcS3XE>Pmh8K<bC' );
define( 'SECURE_AUTH_SALT', 'HI`5^G<U>:rM*QVZQ@4Ksa>?U.F0mgOzV6v7P^?dx12FBU KOi(CQ;f3jEKE%W:[' );
define( 'LOGGED_IN_SALT',   'Y~(2{ZbyK;`nf,BcWY~.69uM4uW@?M@3-eJ:st(~.dcQ(#,?[x,+QgvJDSI<Gk!R' );
define( 'NONCE_SALT',       'FlD)INf$1ig+OwX]ku~8NvcISi>E`)3=OZ,ao|nf= E$xQb@Wmb|d3v/|w0qi:B[' );

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

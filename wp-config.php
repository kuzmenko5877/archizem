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
define( 'DB_NAME', 'wordpress3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Roy.WYZE~gMABL3MAQ(v52/ilO)hnkEq3siM1/>4S00q2v``qK4%|[&K6d].A[#T' );
define( 'SECURE_AUTH_KEY',  'M;c;*1W!/OPDL_1If+!^9&>>dOc[(/;UI!3hZ5$u(!B1u*UBr(@fS2oJsV=#Hj|Q' );
define( 'LOGGED_IN_KEY',    'idt,7!+/h`{(A{t#!%~B?B{u!q]Hog@l~D#aSBHus+L`0MS1ub?Pr0^b<G%,y8}M' );
define( 'NONCE_KEY',        '8b,SWD5NDIGp$lPa2s(Eg$vFVt*5aJ^zpYa)w2VfQ0,T dEFb5(wVZv+.Y=CD6c/' );
define( 'AUTH_SALT',        '@_((fx2T3e>d1*!z&[9DQ`d9FT!bI(|7 G~})QDL{srV{?)|B3:#]G0W$:/dMOb%' );
define( 'SECURE_AUTH_SALT', '#B}mLeHN_S3:Z,wA2xu2jw^]U~xoe.fA/Z6!^h)u)pr/Ner*j9]pJ`W]ySkSoH~z' );
define( 'LOGGED_IN_SALT',   'uwqX/#>f.yI]Y1k}Tv,vIE>wGl=8hz=JYa>[Zx(7RLo{f+VbQ&8vk;yundQ~u_)k' );
define( 'NONCE_SALT',       'l3==ad(JkDukx_98uc{*jD&X294GNV<*.gV]H@Q%X%=7!kU|.i2hg_W>!RsOgVdv' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

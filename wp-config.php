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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\xampp_82\htdocs\wordpress-company-profile-technova\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpress-company-profile-technova' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'z_Ylq>*1%#o<K77Nitx*GdD{b|jn/-y$cg;e1@6;X(_Hffe{PzmYK}JISv1623^s' );
define( 'SECURE_AUTH_KEY',  'XWOw&Jg=l*Wm[T:~_^pQP.hFp8Lt/uO(6+uDzR5x;)|&LXl:j.`6 pT0GFu?=+PY' );
define( 'LOGGED_IN_KEY',    ';>ANEM[ja5c0q9e-D/ DyXvy9Pn`YTABJ)NWo?<=sfCX%{Xk?xkmz#T#e7s@nG1L' );
define( 'NONCE_KEY',        'vr5.E(-kW]Rj$*b1S#/D@<,pRlUHvfbfR4@f1FqB/cM_G+D&&[{<2U{sGkwxm.N*' );
define( 'AUTH_SALT',        'WeiguuJxpOJ_vVB4?zu,Ff6^sOLl;6I<mh*vp<T*O,W#c7U i{ke[g>*t%KIM7=1' );
define( 'SECURE_AUTH_SALT', 'BoLT!#A`0c{P^B=XXQJ{Kh^Neq{L%BDojZx^ GQ{^4VmvEN#ljpEkNEJMC[P37F2' );
define( 'LOGGED_IN_SALT',   'z,:N!K(OCKv2/pB]Ru!si>g&jpDkVq,wr~q-ss.-qTra~n3%j?BDW]2m~QMt)ZLN' );
define( 'NONCE_SALT',       '0O@h.52$cd7N&2Ex&39sn3*6d$Hqwh#SWvsWfxsdD$JS27feTaeT7~/+?%b:0*^K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

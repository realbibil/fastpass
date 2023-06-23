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
define( 'DB_NAME', 'wp_gfami' );

/** MySQL database username */
define( 'DB_USER', 'wp_w1se9' );

/** MySQL database password */
define( 'DB_PASSWORD', 'n3S6Rl!cU97*Td2H' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Fu-BO/yDH8t(([hG4|#M78oe*H0Ds6|1HB@&jFub7Au+34cS]lRm4K2T3!-K4SD2');
define('SECURE_AUTH_KEY', 'jp6[Kf]yihTu~DQE0u4-7lI(_g6t~~XZm8DfQ;*wi)t!UGSrY0]-*MS!%GV4/5te');
define('LOGGED_IN_KEY', 'FIe[1|J8v3#[Nz71~u#E|2w2-mG+YgaP87/mc2Qf#%4o[y02DS/R_5589n6qrJt2');
define('NONCE_KEY', ']TJ@|2*![cbs]:P9Y9:0bFbZd7|0x)#&h19:#010d_|@YeMyax0c6:0087C_Yn2[');
define('AUTH_SALT', 'EL(L#%/A8j2559m8Q/XMF83Ej;ONxcMVAc0W1%Bmm30D55x3QX10*3eg06rSih!3');
define('SECURE_AUTH_SALT', 'UG7X~Z-65B)72OcM5XNw4@;2!G#V&ljnq[se%Uqrwod1()VlgW||1|AY05FK~X4L');
define('LOGGED_IN_SALT', 'pGzAw(rjnwg;#b9Fsr@G+IOP1fm-@Q8P!*G#319Ct-j9JNM;hF5-_fEv~PH:-LYC');
define('NONCE_SALT', ';kc%!11~[c4zm464|UM02M-O8HY9!9BJb+4m_*ON5v4ODex~[r39~]|6Wpw_H07C');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'XtTmcD_';


define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', false);

//define( 'CODE_SNIPPETS_SAFE_MODE', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

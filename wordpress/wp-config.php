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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'm~9;hD&|-ISB=26%+HzjwJl3&|>)Ja)eIidW`a{d{yEK`g%h%p+}X5+gD|fI{711' );
define( 'SECURE_AUTH_KEY',  'J;i4`d^#@x[{[Hd^RI|SR|}&xTk`%R%{<w]luV8-_P[c1<6%X^WoU[]5Fb=h}>0e' );
define( 'LOGGED_IN_KEY',    '&jg<m:.Q;19hUR[4fo9{RGz(Q;W`UwST.QcZDVoN?p&s.udzEt&_e2vq,$4PDe4g' );
define( 'NONCE_KEY',        '?.@5T>Yu!))14$LR8DmfcSmzMDZhcqU6-!4~,41}+GS[cKTsdgY9px-=tOPe#j_{' );
define( 'AUTH_SALT',        '*C2L|_Alw_+f7GuR 9`KfImQ~NGNp0&s%(fr:~j6B?S8Y$M@=,Z&7k#>zU7c.ol~' );
define( 'SECURE_AUTH_SALT', '|Gy)n U(^Kaf/$;NUXSK}!<<wDx<@wc[,v_tqRm%~Kz&6P$wg{,F~RNa2I]XFBHG' );
define( 'LOGGED_IN_SALT',   '=$dWOgu4[OnYHy`/+c5xayNr!PhgAPVCrAd!j-OP[PL({-qZLh^v`=/w)gN 5cs|' );
define( 'NONCE_SALT',       'ttHKqcj/Vasp)NF SO4*Sx^8N`p,HP5]B}{~GR2ZNsB=TY<53qrt=9xcT>rUU2Uy' );

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

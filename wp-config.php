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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'n/xC*Qi3cTyM])H,Zz;$nUd+fIq(oVd5S|?jBtqxqJ[0sL8Pe/fY-ZP;cBlqPI:A' );
define( 'SECURE_AUTH_KEY',  'z{@4aq=<k+M7.X4rT5dTWC!$|xd5bTl@=te<G#KdK:pmnC=/yvO7=(h1YxfQ!>^l' );
define( 'LOGGED_IN_KEY',    'h7m.1f/ZTj;3qsCVFklX)X-Sc0taG@`=NvqK*;QL%A$QR2r/NA;&/Djs?NDK0/%t' );
define( 'NONCE_KEY',        'iW~]Pi^-QkWVe>W=)TuFel-oE+h#dEAjGGTw2Vc%=PQ99eO)EbY&++e2[:,F_!F;' );
define( 'AUTH_SALT',        'Hx*+KRj4Cw;EG=/_uq*2!|vJ._Q`eW7jRr|&Ja?MPb;%xRX+`)O~t9qPw!blKy+K' );
define( 'SECURE_AUTH_SALT', '2ODzQ&,^nHIt&{=Lir:`ueQ$JwE(:dnBrBuABH`VSZlgUdeYmtq7jj1Pl^izHFZ0' );
define( 'LOGGED_IN_SALT',   '^e:eUkG[^3o{TB|C#j/@266{husOg%4%1N.^FOex|-,_AulGx{?3b1J^x<9FDXNH' );
define( 'NONCE_SALT',       'qaObW[&[@M7o@tE[*i3?SFTf<zL:71U!DeKcC.mn]G12_mTTvv~B99V46}~Q_.be' );

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

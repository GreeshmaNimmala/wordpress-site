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
define( 'DB_NAME', 'insurance_db' );

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
define( 'AUTH_KEY',         'ZO.h!1:0iv#[R:sZ:qR=p^_fDSJ>N>Tmm7Igl5UtRFK$Q%=:o-A5`!g8Ly|jT)|u' );
define( 'SECURE_AUTH_KEY',  'Km_jh*FBHURxF^KfUb0t!v&1R3>3VP!tNf&z~pUV/.bu1Fy-snl-YD/a()#cNPSt' );
define( 'LOGGED_IN_KEY',    's0NetH*eEgUjai%/F7bh7e]WpOuhP^Al>bVb_~3kxR8*}M!,yVU*hCn3bEr[Ant^' );
define( 'NONCE_KEY',        '>wBi[;NHziZCX-ltuIF*K&6k)%dPtw=dF&-)=Ck{yNgZLAr:Le;d=V&T5*Xd]6RV' );
define( 'AUTH_SALT',        'KXzAB6^=jbpg+%ZW{H<N*bA};IXx;$QrgRZfz5qMT3C4C&p(i&|2ct6*m+!``TZ)' );
define( 'SECURE_AUTH_SALT', 'imF3]XmlM:.6Fd^9z66DvYo?jXwIH]ltKu`SA(>NxuA0XUFiaK2ul+q`;hPwqe>D' );
define( 'LOGGED_IN_SALT',   '(`!T&wVI%e)C#} oM&Iy1gP]frvvnN55{^I8;pT[t*Iy/9W*bUqtaEz0@TwAgSt|' );
define( 'NONCE_SALT',       '!fOA <QzWyU+j,L{Id&]V?zTi_:1M)>m7J*A]E.MX;y(:w7c{Bi>ct(}8XU+dB5@' );

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

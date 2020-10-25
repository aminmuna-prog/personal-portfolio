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
define( 'DB_NAME', 'personal-portfolio' );

/** MySQL database username */
define( 'DB_USER', 'rowshon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'munaamin@10' );

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
define( 'AUTH_KEY',         '4zhMX,;:6&S>KkMU;1p=G4J Ho[qs+];eC+<C8NvB{s:*Sg<^o;yWCyCzCGllI,.' );
define( 'SECURE_AUTH_KEY',  '-fqc@kj~dp.xrZuZ/K1&;0b!}Yb<sP#`KJOl%9V2xclFB$,PPj%;6cb5jMX):q5C' );
define( 'LOGGED_IN_KEY',    '@p37|9AtCx6r(98>c3W}YXlAW@ibiv.KHoeUt1C+ClVf/wdRas^xMy}3cEEY/W(>' );
define( 'NONCE_KEY',        ' =; tBLG)*W!B0&#[06}IeQYQ@k`iSdX1XPZ3#Ji!gXX^^GV*}Ewhz8Sx:eSw~z{' );
define( 'AUTH_SALT',        'efQn`2I8&UWM<Y=>K*#&*F$a/QcARCv>m$[g5.G:R-nSt8j&l$:f^4|mp_~y<1KP' );
define( 'SECURE_AUTH_SALT', 'VnoJZYX_F!A*y3K]m#b_T94Lc%&XX:#m?L,#Uge0hb>i7<H#R3yH>+_i~4_ ~e-d' );
define( 'LOGGED_IN_SALT',   '&50ia;oyX_D{&_j8FJu#kvxFP&lts3tM jC|Q~EFu^K`aN9$nui!:h<.9B&7EBO2' );
define( 'NONCE_SALT',       'Uc66Vk]IDH7MJxozu|whQ$Pt SHAw23NZH!BG&7R{0ebLa|=a*U^l=D;Z^.!Ki&X' );

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

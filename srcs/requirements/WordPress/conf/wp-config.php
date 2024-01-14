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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mortega' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ngnl' );

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
define( 'AUTH_KEY',         'Eegi**Eove25vVN`wR;f*EtpEawA1B(_j@Qb>p[nY(FhB-`G9q~IXY[iBIVccb:l' );
define( 'SECURE_AUTH_KEY',  '6l|jCgl)~b7c!+ b%PZzH@99=yD`7qvV?=54!fgA3og?QV@++Hc2a3-5&:rH7@,8' );
define( 'LOGGED_IN_KEY',    ';7~iPqQ(3Wop!jj&h|1,l.l4AKy2o.C5waO97:`TGd+r9CiD1_PIc]]y?ILA]Zk^' );
define( 'NONCE_KEY',        '9+P38,YR$$L^QYp/B,1!Z{LPBQCQ!)}b?^+-6>w-[-1&pQ`~Elcw?pm&.CZ`YAON' );
define( 'AUTH_SALT',        'VgN$gG4nfPycP;.aE}pFOl$nU]YR}giyP.f5`&13G/1zMZH>J,UmTh<Eia0k-y~?' );
define( 'SECURE_AUTH_SALT', 'd,P^Q&f!Q%.A8G[~vKBuIOz_(5Na!}_R)_v$| BK2>%lzfyE^(KIEP0**M])&=)X' );
define( 'LOGGED_IN_SALT',   'afBqe}nfdTr!T]5WH~0lr/P@ M$(&a=Y9Du~gNpr=PY}0EhGQ.KS AvM]Req>*h]' );
define( 'NONCE_SALT',       '@zxQJTr0Dcy%BG_~n1$;vG^K?tuZ^|InOyw28DCyrDhGX1Y+ak3v_?<@Wbt8dNXu' );

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

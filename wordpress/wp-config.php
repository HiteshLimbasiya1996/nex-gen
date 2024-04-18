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
define( 'DB_NAME', 'nex-gen' );

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
define( 'AUTH_KEY',         '&OAy]AF%9OALtN3vqVMxu*KH.[:D9u;?LFHXU&:jS&nxP4BV5d<60?q&c{_GRvr{' );
define( 'SECURE_AUTH_KEY',  '&_t^djBKLFH:_2IVo@Ml>q14Hn>Sf<4sRt?6yz|x} ^}wnt#!hUqh:NNmlMk[i9a' );
define( 'LOGGED_IN_KEY',    ')?*5i-u=)AahAs&dO-1*QUtk{+|]fx>TsE%<K`D2h7Hw1<xt}fU>2Zob.=8`F,;y' );
define( 'NONCE_KEY',        ']13/;52/.0`mL6An!+nq1 .9FESi/B}@C6dJUmPow?CSn.+H5e/zmsJ]G<IRM`40' );
define( 'AUTH_SALT',        '5eLW:X%,QzX]e@!0`PE?<7d!ebnZ/G^/7Jj<~_^^J;~fJvR6<9o1PtxH}r,SMY6[' );
define( 'SECURE_AUTH_SALT', 'M$@~+Cu3v_3_%4bI21?h~}Na[MwpaZt#U8s/K%6ytt|{9g7oV8W;]M1v]Ot$::OK' );
define( 'LOGGED_IN_SALT',   'Ks<<: ba1UvTQd%z_cth_X=V[1>T,3B=GE8fS8R1zweyWdsz!aF*Aqf780IJa&DB' );
define( 'NONCE_SALT',       '}Il7Wx8&AAYoAX_Z%b8>D()MR?E8I&nk0F.#i[(#H)oCt01KaAnqQt[$3UaMHnoa' );

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

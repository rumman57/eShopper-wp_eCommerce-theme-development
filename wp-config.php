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
define('DB_NAME', 'wptestsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WUXpXR8e4,VmE/gi^Z_>3vN4Tl]f5p13|{zYf37SBeZH-P53TEL f82j(8;+%@.#');
define('SECURE_AUTH_KEY',  '&+p8p4-VPTYc8Oky7GE29VdCSts;15*z0r~);~b#W__@U@u]3/1a3o-[AH,!$LWi');
define('LOGGED_IN_KEY',    'Nw5m9eML%&]n^t<&~<$234*&>syU6(ypyS`Kk6Q:7c!$Iy=&if1xb>+9&YM~Q6Vq');
define('NONCE_KEY',        'K76$}5YHA5p]gK&h2wdeO$mDi=f@Z{xh_5/15wVj4JI30@]iTaT?-T2VK 2i2};Z');
define('AUTH_SALT',        '^/h^FyXn@b4LGav[[B~QxFp:gJ$bS;5|Z|8rmnr4]6:6z?vt Zl>+o+*KU|c~p@x');
define('SECURE_AUTH_SALT', '}F71YK_zjU)70w6ZJ!ym`#nwd-Ssx!:c$OfBm}=l]=[4n!FXUbOeN_ct=5>{3k=c');
define('LOGGED_IN_SALT',   'FS*xpFU4Bbv_:?!pyn7wM|Eh$V[+oZ1Q~q~Gp Y9b)^NC}lgi$.[=UMs7Y#y-&;,');
define('NONCE_SALT',       '`Bxa..tNdUQ>zu!OQ0X4xkP/)w3th5=Vp()#3]NN22.lQmG*G90u?qfrbe4}qW)%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eshop';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

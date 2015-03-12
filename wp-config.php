<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'clenera');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '6pl,uwfjqjb/6XXI+lzaqFWB$6$wa|lg:${4t1Q;>LPOEQsK2^.aJpTuYjjDb%Rv');
define('SECURE_AUTH_KEY',  '}QjU;%NbfRs);9[UI(P)4.1qV+z%1ear6x#I@-3_$,T-kbM4-Hh?>x5cXPK-|d+g');
define('LOGGED_IN_KEY',    'x%hW@kXe,hpdQo[G^>-_a#BX;> sYx(.:DSWas0?G5+|U]J)$Cj,Tt`|Do?oelUW');
define('NONCE_KEY',        'w-S>op`Cbmh::VdFT)JWqx3!!p4~g/CD0Oqr$SmJqu-pm6VwUpTx-Qq.t/PAh-oL');
define('AUTH_SALT',        '@4*]4wFN|KV%rGURp8{Lxy6tw(fkrcA-#)Rl[v~{J>%)*: I<XufJl*LsFXo Fls');
define('SECURE_AUTH_SALT', 'j>h)b{YEx|47q-qD4SrSu8zBw6D`e|ARY}_x6CH> x%G|0( e^J!j)!fjj6c{uuS');
define('LOGGED_IN_SALT',   'Nvtd([Gew<_3?j+c^x85;&-?:A9b{|-^gC]0br!BaV<;2+G?`#W$@P.fkQUzT)EZ');
define('NONCE_SALT',       '6FL7nKJ^Wv#R(rbN0iL]KRmO~bo,YhGJ4PqHZu9$zKbZk1w{W+]S7-WC@)mRTk13');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

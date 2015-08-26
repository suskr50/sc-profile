<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', 'root');


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
define('AUTH_KEY',         'LJ|Sq[_.1?rUB[!.1G^:Xd7L4MPhJzMb2H|%W%+ZwvKAV+w5c4zm_*I)~Z5.>Cq~');

define('SECURE_AUTH_KEY',  'eW,az[^; 2m;#~>Q0Mww,6{G8bZ}JlxLp /OvAkCK@/i4 d/fDa!vDmb+4D;B/QO');

define('LOGGED_IN_KEY',    'dO[oT5+ F@$rK~yj~4_D5C_Mo$nWkb[tKUyaV5:[|o-esqAj{;-!5@e/_.i@9kGf');

define('NONCE_KEY',        'HWzNM[&-RK2r/`6[x8el,_d#vg-G~6+.1fnUli?qc:{Y;[d/-44:#ls:nxj2VK)W');

define('AUTH_SALT',        'b[AIE5-BB?vH7@YUwRu5-k]NF|6-z@$t}jR/i<aoiL>UYNo6CQ|]+6F3xImO[!YJ');

define('SECURE_AUTH_SALT', 'bmZi_W!sbcX$[s_X6=Y|r$)HIZJr8*5L:(q-^.+#YseyMs6r>Os5H7qA],9lw fM');

define('LOGGED_IN_SALT',   '@wcs&jB%,+aO)K7tzq5Gd?N$l/OI:|(yl$3DxuBuCd[UAMU3!>!:Obw]~v@E,|$N');

define('NONCE_SALT',       'Br3lIKZYaTpHyr08A|PM)Fl3 6%P3:&k|}F#ENm#H{<JP~]2Y8`M&h+]Naaov@qN');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

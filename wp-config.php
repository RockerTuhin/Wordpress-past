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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'g40~,F&,QUkXrE-tex.==:>ZvVY^6TN/Wq#3..b;HFA6|8=TDv)jZig+,+$gG~#B');
define('SECURE_AUTH_KEY',  't#3Bh})az3V<QN?PL?JuX~Cj=]-o~&jnlk&I.j)>1?ASQWD!W9G^9$&}lMIQ(/lE');
define('LOGGED_IN_KEY',    'R[d/zS4&q veRWsNunApnR!0>$gi:(|BwsYAaLt#Furn&_D~oHUymL6]+i0{pB1^');
define('NONCE_KEY',        'Xh7@AGz9LY:GiTfdmjI(N`GLmPjs,^$p_6jfat|,lrs4G+2q_ELMJds5eS+y92z]');
define('AUTH_SALT',        ')HEsv%lp 8[(V@c}kX!?ne9`%/cj,Mns#M=mS-GXBw_w,,0L.Bo2CCn =j2_YZNa');
define('SECURE_AUTH_SALT', 'L;_0$zq(Zrb7eLtD~_v5~gw9QW/9bc-xx0EIWZX<eXr9AaJt#xP)kJ|4SdZU>dP3');
define('LOGGED_IN_SALT',   'Y_wrZUpJ(~tIB#gUv&^)%7tC-~Uk|nv_,%w}.a%g{t]Bo#`qQYy`_iVStm&-`E[o');
define('NONCE_SALT',       '7 /2cH,MsnzGI7&c2n I_&2l1,.?-oGvT;/;=e77k&>S*b|t( ~GDS%AKQ#,H>1k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

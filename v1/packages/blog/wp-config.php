<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdata');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', '75b23cyf');

/** MySQL hostname */
define('DB_HOST', 'sheekssoftwaresoluti.fatcowmysql.com');

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
define('AUTH_KEY',         '+<x<Q!.g}iauj#%-/,@t)J%?A[@y_4(mJ%vE`8Uu)wY r8h``8.C9zV&BiJ)LH>c');
define('SECURE_AUTH_KEY',  '6w+wy(3^g4wB5^dpF C<2riPj]-0H|.`WsCxwvo{G51vO)|4G-t|s|f#Bs`s1faK');
define('LOGGED_IN_KEY',    '+7(1Psz/O8n |CD1Qn4$cA5Aj*-E.Y3@~.fAsoE^B%#RMiZ#&j|oE7*QzB[S2};+');
define('NONCE_KEY',        '%%).g4TpZAY2mN~N;1CTzx}b sCNHuW;pdFN4=6flp#kv)&(h_E]C*-Hqe;d%U.$');
define('AUTH_SALT',        'ym|SstVRQ+fbN`mSAaWhT3A`>Rl1lakt##RI!YvE.SWGQ=tQez%JVO}9~BQ1VA%y');
define('SECURE_AUTH_SALT', '|ZY]CpE!OpYSUY2+.z@mik< 2cicl8o^1a|VSm:L-H8E%NmRm^OEeBK&rTi$i}Ub');
define('LOGGED_IN_SALT',   'VW~p:$S.I~=N{5+Z3DU0|1$e^!Jxkd_J%0Jc(*){)eZ#FNa8sH/|_Xm>O&IkUDj{');
define('NONCE_SALT',       '8%AjqQ1y+[H+r}(,dw`%aCrNKxC$O u?O bt*5||j_Co;Pj-[.^]Un#v@YI4rG.Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

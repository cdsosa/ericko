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
define('DB_NAME', 'erick');

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
define('AUTH_KEY',         'B+-Oa.@j;_iotSeyDXM21jSwuop1xK~^Trp}Nl3xr-Q,$P-Vj+E4/9+*h@$gy`vi');
define('SECURE_AUTH_KEY',  '!R3)-3K2m^dj,F0kT}|tomOzK]&yLDebO?%H:&vgggzOO;mh[[RL~B!$LEeZ&Ju8');
define('LOGGED_IN_KEY',    'F)*=_yjzYa+-{QIehdFvQ7nR|BhH;PcDst3]ES+*GT/e6z^4u(yrRoPrw<%vV&c?');
define('NONCE_KEY',        '^>s99e.c<|sR{s0@kQ#aurtAii[}JL@SW>^{+^7o|RD H_v)?wY$@0#lHgvXZS?9');
define('AUTH_SALT',        'pnT C{>&YT&siJ+?vx45K{=NpdR5k951++vC^:-UxMpq0!/SF~iiuvw`x)3Sx;g+');
define('SECURE_AUTH_SALT', 'SO0pLI)QTJjxj15>A-3N5D@d_8p$k2[:+Tfp$]G-[R!~-q|hJ7,.puR& Q>w=u0K');
define('LOGGED_IN_SALT',   'R+W#44M/y$$,)0P=.Cgvk~Cf%`&3MlG&f@!hP`4K:5{!g23@8usw})KRr]|jn=EL');
define('NONCE_SALT',       '||I=TEXg]H.Ie%UjGwQH{H+C^!j{UOBmVWsrvO,YN&M/,+cr|:]:$(c|qk&c;{jd');

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

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
define('DB_NAME', 'celinedoshop');

/** MySQL database username */
define('DB_USER', 'celinedoshop');

/** MySQL database password */
define('DB_PASSWORD', 'ufmjvkn7');

/** MySQL hostname */
define('DB_HOST', 'mysql51-41.perso');

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
define('AUTH_KEY',         'w&z*fc3A}<BaH0%LWq?)iFOgc4h@ JP|N|~+y6B.V]V=i]1eW5.SVv8uwN>l>2M_');
define('SECURE_AUTH_KEY',  '#k+:-V%c@4Ayry7rKc-!qV7+w#M(`Fr]pL:0uF|T=Mk+&l!H t>;lHD(RuC,HBrl');
define('LOGGED_IN_KEY',    '<M=OF8HuB2mz]UPL6(;LxD{]D^ad$|hka%t=OY@oB;rY:NqHzKzCQ-cRkM_@Sh.u');
define('NONCE_KEY',        '96=9o0-!kO*88VSv5+N4a#sgIPtMOUIA4[Wm`.IKTm*7Za/)Rrr?N6p=UG/V;KP9');
define('AUTH_SALT',        '(k(4!~}M4RE~u_o ?COMvH<O=l8!d >*j6t%QDRjnr&KROfx5%q3<LUE&}slASU8');
define('SECURE_AUTH_SALT', 'ul0sh@;9S;]*9 k~4{GY9[&DOh:/j#.F*qOZ&Kp[zlz=a+i}o6 y>Vc&5!;QfnRf');
define('LOGGED_IN_SALT',   '-MM93/QBEM.6O!CveLHS_$h5bX[H|FgyZ.Pk`Ru4ldK.;~j)by=m> =H@7o-^^`t');
define('NONCE_SALT',       '_Akb3WOHsM|ggY[XS5-b8Wo}-[*3m yrCp0V}ByyoFwB(qOVU1R_P~Q_S12#FfK>');

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

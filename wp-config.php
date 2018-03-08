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
define('DB_NAME', 'armentum');

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
define('AUTH_KEY',         'D[4`I2~wg5/wY;p4oLU?FgtpkvaNjMeM!)~ E>nF5C3CK*TdF<YDA|Ffan(s/k0-');
define('SECURE_AUTH_KEY',  '0.u~m=4o]L?x.MK8t^Nb|o5/ci:hYqE9>8=I~HU:1x|/s/r(mL%~a+$8#f9`[Kne');
define('LOGGED_IN_KEY',    'x;3aq>9/:[u1^]=.a~4$|lIa<TmX:f]qc^t{SspbP7TA@5M|mGX{}6N3uP%mlM0?');
define('NONCE_KEY',        'm5Y*;}29rRANgGM,OY m-M<GDO^CE@~9Cm#0N7M~%V^g:(1;6epd=oi47$&k<Z=i');
define('AUTH_SALT',        'tq2In#kTYKUKT85I&DVc(96:TRkoQre6<Mox]4 _}s}JM4 <j7y?oMnS~in$N<31');
define('SECURE_AUTH_SALT', 'U;MR8fF<ti`5QU3IdGB5@M9vi8*tl.[g.K#`g2e#V0UuXg5;*$R-kP7,@Z-if!{<');
define('LOGGED_IN_SALT',   '+B[w?u8sGLY%qt}X,yp5VY#JVI;pKHeMOO6yQ$+C`1D:= |}N@nS%{$NqgXH=T;+');
define('NONCE_SALT',       'Yd^,@tRs?I8yKj13>,pT9`iNQohodj 3mW-z}f1YIKk|;AmrM:B/l2a,7[+!bSF+');

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

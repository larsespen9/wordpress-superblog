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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'd89bef2b8767b9d84bc83dd512e83d9bbabd1fb389f2a1fa');

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
define('AUTH_KEY',         'NG$FB5x(GDOLMDk[IFu[co6]-b7#.>ITW_tbA2t()-C3tz5P%lf8cciAp <)b(XB');
define('SECURE_AUTH_KEY',  'hg=HlfdhH>`9i>mB.$]#v(II=2(VAb{I7gEK8?Oq0wS xA`1tW~CR[@Kp:7?:J1-');
define('LOGGED_IN_KEY',    'Li?O1W}<sNZa8qUjgp_$G7gWGJt(W^kEB5rRs%q#S+8$*yZ 47{}OqrE2 t+I4%4');
define('NONCE_KEY',        'V:%z]X|+.>QCOINypOxG%I,jh:?r8KN M:@+Rbm=:=tQtH&s7lcVf :j<YQz&TKg');
define('AUTH_SALT',        'PdpR@]Z5(bgOaXF6@Jm0Vyz[aPI9R3uVGDsb At`>(Hb=k!hX]I+M.I,~2mdW19,');
define('SECURE_AUTH_SALT', 'uR#vMfTMFKoWTr{SMnFJp386Kbd3Uivpe]E3a|tk0E%`HM;G4HTi2-}Vr8H(23$d');
define('LOGGED_IN_SALT',   '>-nF{K`SyGLPU`}bz%%8VLp~*s1:VN9svL{f)|( D,0(=;.S0g_|$P}P=PDg6{.m');
define('NONCE_SALT',       'qTU,1L<BzSRCx,Fu(ww%Cm/gbErLc9R58c$OX5rITf}gBDkz$%g}K`hc3W5vhEe+');

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

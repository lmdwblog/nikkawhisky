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
define('DB_NAME', 'nikkawhisky_eu_prod');

/** MySQL database username */
define('DB_USER', 'nikkawhisky_eu');

/** MySQL database password */
define('DB_PASSWORD', 'DucOpzitVewt');

/** MySQL hostname */
define('DB_HOST', '10.1.144.1');

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
define('AUTH_KEY',         '88a#*2>!nUt>d;$6XWPVhCt~&QhOph13V4~-(kl6^pDk$o9sRF|Eh?v+ov$-T5DE');
define('SECURE_AUTH_KEY',  'uS|DAWn6H+5ogbk))|ll<Tr#XpI%WQOZ(s%-)2w2F%V!7q|9I48L8Z::W9xNyK[X');
define('LOGGED_IN_KEY',    '=LR5@:rx_@n%r3ts,rENE=3hs>CbVP?MH<{i_L<j(,,@r).m,oWJ%i5r1V.N%Qk4');
define('NONCE_KEY',        '^k20$Arnp(=oeo.h&Dn-~=NOXlggvl2.j_P/h)RSkm;;;%!(%&7vY9fD{EYvDh!W');
define('AUTH_SALT',        '-Mx^vor`+5R7SmW+~?>vBg j+Fct.p.7w&rvnJWWU@3}[|-RWE>]83D]JnH&hvZl');
define('SECURE_AUTH_SALT', 'YGO=,0_I@hSmnz.?9bR6]=7DT]^@W]TE<TT[M=p*t+K:^ HKC+@Nn&(j`CiX^&L<');
define('LOGGED_IN_SALT',   'hq[:(RT `#Pq1&X::Lz3;vTQqK^mAxAg|SZ-21{GJd*Gw<h5I,|Z8hGS+]XndajU');
define('NONCE_SALT',       '9l!0 APb!-`&[gQWm6EA9IJ.zu@>YOqJVz+NVTv;}8oc=B8P}j#8?7dcf6~9JM^C');

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

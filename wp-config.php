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
define('DB_NAME', 'projekt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'coderslab');

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
define('AUTH_KEY',         '8h-5(!^MephTd3-cKMoj61(Q]/r|JD[iGY7c?ZD%<pN*O$_Xg=N>KWTsjC} B#< ');
define('SECURE_AUTH_KEY',  '|>V9 4#c=%v_Q@<Airg!O1Zro0;{+#(a~b`5QHZpZgct5v$BLrf<-nJ+[IPNWwg[');
define('LOGGED_IN_KEY',    'evJL8hE4d=CnG4D0f.F..R+();cDuIm+Q%Z*(0g|Hv=P9+[&Mu~3rQon$?/^3?mS');
define('NONCE_KEY',        'WST DsC8V<3k*-6|Mh#9o)P{$8w+d$BJKTHD|`#aWEg;3@w%5m6l]!KEN]iGP]3H');
define('AUTH_SALT',        '*c?0:HQWrn|g}%*cCJVpr<~8f&c^>:5^aABpe.*nBa_f_jKOHiW!N_Bj^(j_XXBP');
define('SECURE_AUTH_SALT', 'Gp^NI-8%n/pt3^W=KqT#/?0YC~Wej}wC[l|6Yo%?^O8):+t5F]d:nm7Dg-qs2peh');
define('LOGGED_IN_SALT',   'N^sAlN(/Vqf*w=1FwWjGr{J$w#*S8pMGX`#f@v[Eq|d`PGMy]Bn&SdKZ+ro)PH&m');
define('NONCE_SALT',       'T|~sdk56ewELoGB9V [/<1XOJ}H?;dg!s6Lq&O9jh5#8<W!nJu}5kA1!B&$o_-/6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'proj_';

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

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
define('DB_NAME', 'thep');

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
define('AUTH_KEY',         'Uv_2}9s+[,k UfatEqeKUY^S4yBTaL>(fho>P+a),oMv=UJ/l&(aqA0{PgR.]59X');
define('SECURE_AUTH_KEY',  ')v}-CPR<XSTw{+ZnwD,63G:za%CCOkYX_#rgf$*2gtd81,bK38nkALA=<bodk*R@');
define('LOGGED_IN_KEY',    '4+pbXP(.lj3Xm>tLTNmbi)(VzVTZ91XvJj;&WjYA|iA]#D{)MFZO&TIae$iW^aag');
define('NONCE_KEY',        'Y!;p<hapJ#giNoX-d|EcFmx5s|UA_Z2._0EsKI+D{W8|v.2=1<csM1h9#E=B2ze/');
define('AUTH_SALT',        '#qLhMJuU1Ws7M49)*8::gfKu.]GKb_w@K7Ryha},JET5}R6zxS<bSC[ B~Mml_k7');
define('SECURE_AUTH_SALT', 'Oh}b(t[`e/$~zvte}>bcaCE]U{ %CPGCuPUxN+8Si8(_47jgE.u6g^S58,L0t(!k');
define('LOGGED_IN_SALT',   '`xkYTq)mO`l8w)wIv~I2g%ei_)M!nO/G;fI#M`QAluE:<CL]qeBi9A24sNfjGd.s');
define('NONCE_SALT',       '4rnjWLI.M1>6TUr^Bery8^FCf7|x{}oWaO*ZHtnr?LBl[7] taN%0Ak753TrfC?R');

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

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
define('DB_NAME', 'project3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'Tj(zG-PEm8#s.h IYc4tFN,Ea7O]sce]!w_!A$[+Ol@GFuzOE6F|4Z]H%WS$H%7(');
define('SECURE_AUTH_KEY',  'pu7&}Gda<2%3-^e<0.zCWe`TUm?GFs+PPPMGLk:RZwv_>bm:^hhZs#gIdo!Eumn}');
define('LOGGED_IN_KEY',    'P)Q+?#dO545_qOtxlHGq5`}r4~K)?Jb^z$|CXz*&5},E!nb9>|5FWdiz2m.AGe3-');
define('NONCE_KEY',        '`7aZ57 {:o.jy^72W}}83b<ufT :H*rif{G+kdVNmLHX5OqP7H)]x-04!Q|EuYC/');
define('AUTH_SALT',        'VU_+PRjE|(C2><c2{-FI|ZrykrI+qZ9V~g)2N/-[.&:TSCSltN@(ihGFZ-UxYgHm');
define('SECURE_AUTH_SALT', 'Lv~OS[w;X*24T5Y-oX_[v>}$V|2ZG?7Dg, 1U< Hdkfh|`7Etj/7foD9OXJH,~+#');
define('LOGGED_IN_SALT',   'jhU4zIKt3:DfK_<E/FP)U;2+C912Uh9}hcw%@rO%m`+Gyb=tHf[N.>1GvZlng^nk');
define('NONCE_SALT',       'qYo-v]maKYRl. (^Nn}Nhf=SmV_;rTFnq.1zN{|Sz]&y42dm-nMFzAqwM,Ffg:b+');

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

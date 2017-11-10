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
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         '+>OOV/cJAv@ h*I{)97P)tqM&w&H+38|0T-BO@.QIp:y1MKtmH1N4u3JBW&0=hr,');
define('SECURE_AUTH_KEY',  'lRO{0lyhX_=:D!8H_ADyF.~~b*6*FPWQ4I8(GVzEe:(2]cER4{V]<m$[p!Z:>$)*');
define('LOGGED_IN_KEY',    '3o#ZpZv_4Dg/6CB7pW!JXe)]zrm;Ju:qg+E4{H?#f11!hYJFh>h8XR4*Ob9)[G^g');
define('NONCE_KEY',        'BYz2tHSZzhuHk|YEOedvl/*,8{_.uZ.qM3Jx1:V dlw,=s!O37s4]jtk1FhPJZL7');
define('AUTH_SALT',        '[4d?zrP=84u4x_[} r>Q|X4C.}W8=XPgW;9E%|FK#QdY!xe`Er5^~/E:N#7,}`7h');
define('SECURE_AUTH_SALT', 'yC.$k:kvcL/-]Nnq?IHB7erA^JFh*%/55q&&IM+?ff4k!2;tfOQP,cEvX{+}fQ}a');
define('LOGGED_IN_SALT',   '%|q{GRd>hKz! )=tNu-W}USu+(]fzCKz@9:3r9NuIwh2*>c)j)|uMI+hn<ijp(qG');
define('NONCE_SALT',       'u ~h1wJvQF~Dt8P,cHId`MeHkkyBmJx;V7qDC4e/d2MiLmgGZCwGAzGvXz840yqz');

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

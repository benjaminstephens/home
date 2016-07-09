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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Snehpets21');

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
define('AUTH_KEY',         '6#RUZ KlKg&/?*yb^_kUWyigC|Czp2U^ty9NHYidtuFOL;Re:+9*3UF^HX$(_,uB');
define('SECURE_AUTH_KEY',  ',+o|2o`bT6[KsNr(Q]ln?[YC IT)s^#/!-8r+VY!f9h|]RYemI|p[ Qj53wr`xCi');
define('LOGGED_IN_KEY',    '-V#2c((Ysd]UR^p^aBZg1;;HfeJL2.et^L$~_9^Y4:,X/Yf$F)|cJ3@s4OAX_U#?');
define('NONCE_KEY',        '66eNwH~/f&=t^T*dnd)Z;pt#z,D0^~V]|5_b75g;~AAMy%9?3`>ZDn)?5<EWKFu.');
define('AUTH_SALT',        'r*JtEznnt&BZ@ZW~MYrW43y.vi5YImq6[e0^3[Z(LNn~g;^W@1l|^>EKG$5KYiA,');
define('SECURE_AUTH_SALT', 'f YTx6,%X~_ur3w[]tn^7duV1s0C;7H~vdjs#Tui_?b(pSGo%K;(_M(O#}-r/7{R');
define('LOGGED_IN_SALT',   'A1Rhz6NY[17OT+D+e!1;KDzgg*3ZJ?F(V5|vsy?DiA_-Pfw )8X7}c-6Y2wqA^g^');
define('NONCE_SALT',       'e7;nGeE&^N=tVQ-r0E(!yz6yW^1<}4p7[R)=Io6qwIvt+wy:k%ggh^vZsCb5C?]v');

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

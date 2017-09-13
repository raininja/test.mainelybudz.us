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
define('DB_NAME', 'testmebudz');

/** MySQL database username */
define('DB_USER', 'devadmin');

/** MySQL database password */
define('DB_PASSWORD', 'cl0sur3##1');

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
define('AUTH_KEY',         '1Yrow$Y9PI]nUw`MCQYt>,SFQ4qvke W14{6&/CW$lU3<9L&9n>K/T!=XK*D8>Nj');
define('SECURE_AUTH_KEY',  'JsUF[]y!3FZ<dO~Z.uLb-6`&-1wOWTyOr8?={HLlDyT?wWW<gB9>?qs{>V5 E`].');
define('LOGGED_IN_KEY',    'r@UAL%GLsY67IL!h<ND43?/I^AzMW`&(+zZs,utif5]kvYKf9{Z9hzG/7JH-9;t3');
define('NONCE_KEY',        'Ja.9T<SW]7nF-Z*NiYgV7JBmHE.1[F4 n8nn9*%3cZiFB*<O9/B-5nb{i7/f%1X7');
define('AUTH_SALT',        'Q&]]0sL[8gk(b@zy!6XU_c}7B/;z$|+zO17;vG(5DiPipH {7Y[JS?f@ ^N50eRk');
define('SECURE_AUTH_SALT', 'VfcTX!zbl.^H2%Qg&!C$Op_P>!(4!-strVATsoqckbT{.~@onmEbr1YX=K]ugx/N');
define('LOGGED_IN_SALT',   'I$.h<b;[k>b:V[.r:i,KtBpYBzac(0kMeL3.[LM}::9ZB=m G15dQ5u/W#b2Ui9O');
define('NONCE_SALT',       '4*xGb X>+H*2/F.P3+40j$`~Oz,jOoE<E? #xO|$f vPZYghR-ds|.j(5I]ZeMOE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wXp_';

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
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/~raijin/test.mainelybudz.us/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/wp');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

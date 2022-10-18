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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rgusslco_up');

/** MySQL database username */
define('DB_USER', 'rgusslco_up');

/** MySQL database password */
define('DB_PASSWORD', '1dm7Cv8arkdQH1uU');
define('WP_MEMORY_LIMIT', '128M');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mWO#a[W{~MgrJYYW=!@K Uj3Zhp!B@|9n/Eyk+*h0w~Q3570CdCrRUc/81z1[YH[');
define('SECURE_AUTH_KEY',  '?/$JMqaZ]hec2zxeVGNT-GWxechC0Pzd_Q.{@PWlm|Nf&<ywfgVg+zkE}xv&RZOh');
define('LOGGED_IN_KEY',    'I}hDMHDWoLZdY#3,R1<6)~X|Ls#[3(+-sgiL|<d~t})ayw(l271Qz_mr7A5EMrYu');
define('NONCE_KEY',        '<)aMGKnZR{8M`9bLD:+n!%<dlIWqVq3f/Q(}Z`7sVKVGCoU+auAG@!{b,*5ZD<G~');
define('AUTH_SALT',        'p+1gX-4r+ Ya rZHK;Y%BMznA=5IeXvj8P`a=[UQ+5lW8KRS<w9rknD4vcTGVFve');
define('SECURE_AUTH_SALT', 'W_NT{O9K]tb F>h&N|I-)mo;MKMualst0c0u>(/(;e[aRY:xilpcH~-n%M%1f[.0');
define('LOGGED_IN_SALT',   'Wdz2PHyv)SEE-mP33H{3rS@7Ok+|T#|oTW4rfh-[!C;J=~2%VsVC^SzKx[E.N(@#');
define('NONCE_SALT',       ' r_|9(vzV%fBsXTRTJ^]8D+%Kr=]yQ ^Jr0m_nAk&p#Z:-a~}6>=K4+`C|&k2vs4');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rlu_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

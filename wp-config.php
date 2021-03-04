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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ceming' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Yz^-dQMEw;g)C~%Rx10OWF*?rT:fQ y5>`s+(zz!h2FsK]{q+gq 1[^EGqd0j6uH' );
define( 'SECURE_AUTH_KEY',  'SeZuHH5A5^SU!4Y;;(a_4Q)zz;Fl+.#`8S*OP00St4O-Tu6>Y%bv.W&SX,r`uo5i' );
define( 'LOGGED_IN_KEY',    'I>Td$]?Fgu-4+JLr?0L:|G^V(:!`AauM SBL+n`4bRL*+_k?,H8fIao%-]S&~z^e' );
define( 'NONCE_KEY',        'HebQlW1ajh9onsYoJdq?0/P6sE=FO=1kSM=%*I8YMAl6,Jetldd#)w1rGLZrX/8Q' );
define( 'AUTH_SALT',        'JlDc1@x_SGzgt*;N%MDi,Nqt 4aVwzp^k$)i0q/0zlp^JO6NjT|)U-V{ZbKK+!;/' );
define( 'SECURE_AUTH_SALT', 'gv%33W--U&EBwcit3/%+3m%Dw$SJYAbzc=`E;K!AAjv(/c`p]#dw~nk#CW9A&{(_' );
define( 'LOGGED_IN_SALT',   '4db>/pMFvuX<JfM|&+d+bk4xS;r.aDTz[R|w=mDV?}^}1i5Zry#D03H^JqCe4tAT' );
define( 'NONCE_SALT',       '63%,6};@1mFSI*[tYa8(e@n%FtlLkQ#3fi2LmL^d+ld&B; HS[VPM@F-.<Q}h9&[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

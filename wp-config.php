<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'domaci3a' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-baza-c:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':^}uS3K-Sg$*cu|`?Ag.i@3Lw]Yjf8<RQ4{<tn{}%qIZrN1 Q}4P7MglMOf(n+EW' );
define( 'SECURE_AUTH_KEY',  'OFPw6AMi:!{CM<]7|{]9M`1w*R.!-{)QeyphW(y-`cG|m~[zht/eop(%vrbim2:7' );
define( 'LOGGED_IN_KEY',    '@hsj%}UuY_(S;2jX?~F-;%oz&|I0/.[0K!9YZ94a!4UFqj:C7yzjR@Emmo<$N( X' );
define( 'NONCE_KEY',        'KJd.[2O9jX>h9s2FK2c]a*d@bmujdnF<;:ePw&auVg6&h#9c0c49SU(nFI]w&f>+' );
define( 'AUTH_SALT',        '(*Vg*l|RHWK& =hCenO/w%&9GH,!=9JKTo8APJE?Z!Opls$y&4I`dm]~Y-[h+9I9' );
define( 'SECURE_AUTH_SALT', 'ok0*Agd*Ok|SOD)(q}MiQkbYu.$]83N#;RrF|tRJZF^Lqf0edpF4vy8Bmsy&{)B;' );
define( 'LOGGED_IN_SALT',   'u!I@ZJOW#TW%-N6&h#e,,+h=C,Rp|Hx.JvA*(%T]de.1h|]<ic(c&pqEP`p6TZU&' );
define( 'NONCE_SALT',       'L2oD( 2L3=oQ7,m7yV$5H&h3aiS1#_5!#=N<3Iu#i/dhw`XDzWyJ,*5GecZ`/XZ,' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

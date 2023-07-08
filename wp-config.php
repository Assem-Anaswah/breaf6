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
define( 'DB_NAME', 'breaf6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '[gx8xjtHMSP/*%y]937W+{(7PypHl?=~`Dw-z{}WWag>lM;g>w$$Q:M}[<c}6kbC' );
define( 'SECURE_AUTH_KEY',  'm$wtT&I-#Y$^evJV*wp.Nj=o^c1?ER0!:[Lo>,N!FgAT@x(&(E7)_F7`;:C@_Jz0' );
define( 'LOGGED_IN_KEY',    'K,iX2KkQ/qwObd/KiEnUW=Kvqnn4V~l>o;NhtOQXEK>;7QUB~KrN9rPygXtVwrr#' );
define( 'NONCE_KEY',        'H2R=KR=d<kY`6wX]:YDpfY&E@z;}|+tNS9 ^vAZEAj{r:U63]l/NJ+lL C74Zhu(' );
define( 'AUTH_SALT',        '^KSAU<Yy6v_%Wk?k{jmF?R14@6p}zd~7G!_[X`J7:uw6oDCSVPhDhs`jr`Z3Td%R' );
define( 'SECURE_AUTH_SALT', 'lH)+cGa%U+M+VCnL%8+wsRs4^J{p$hv5Ui}>kezXYDtrkcPJJ:y)Oax=.xAjGnDJ' );
define( 'LOGGED_IN_SALT',   'GJ-(bg(P~iV5)D8[Sw}A+<Jvk#XzG,XWhrz7~#NG5Eb#d[%~D^S1_a`pi{A+45cx' );
define( 'NONCE_SALT',       '53?_UN}078/@2?db=X@n7]xMBCH.N0wJl&fKfB32!5$5yL2GrC_2u^@vGwa5JjQ{' );

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

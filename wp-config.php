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
define( 'DB_NAME', 'prueba-b' );

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
define( 'AUTH_KEY',         'J4n[R|OpV/Yds`=Z<%PtfMBMXMQb:j>GJKD(UHY=OFb;<DB$d!k45#ReCNVl)pT,' );
define( 'SECURE_AUTH_KEY',  '|o[d@RaL4a;hP,^|a?x;H+ZVn4KnGk13/47[6HE}[H7m6gY}P0TRk<eTJTrB D5T' );
define( 'LOGGED_IN_KEY',    'C4KGF;;>T5/VM4xOnTm9dYx1F]o3J@YCK~FWKka@54UHQcPm@ecwf]xX8lCY^2P5' );
define( 'NONCE_KEY',        'CRNv`@%ynZWGVrwbw.Ebta]6*C/zqF!Hm3f.(owmT#[6RY{iO#*~Yjy}yYYr>i#]' );
define( 'AUTH_SALT',        'hEGB#uYx|7!^S5pAudS>jl*6se!&G8H~%DVNUo>!]Z957Z1R+v~b*OlK[4}]W1XB' );
define( 'SECURE_AUTH_SALT', '4)](Zb )1L*0]8{?<U#1=js1_KNz  )_uoG:9N|^ucDent{r1}.Q8_dbdyrBu}R5' );
define( 'LOGGED_IN_SALT',   'd`,]r=hDx/fgY~t5;o`GJ{m5<L*e{fP1n&Tg(Sc7DnM*TCIF<+u?yt,w3-W_OsB!' );
define( 'NONCE_SALT',       'Dg9Y3a,.I#9OLWMok&hTGVz+sN~#7PrFG4zTc,5,ok_$ O/:TLD@lZsk9I]?k>M2' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'PoonamMaurya' );

/** Database password */
define( 'DB_PASSWORD', 'Apcm@2024' );

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
define( 'AUTH_KEY',         '*Y9VQ3:Og&$fZZ=jI?CrR&gJTtE.aivddk}S%AyO7w*Cux4$~9$<OoQBS-.kF1.L' );
define( 'SECURE_AUTH_KEY',  'u_k#N=)XV$FQy24k[u{Pwx=sBkI{D%!pIf[CiFFwnYvPq>x{+d)e*x,7H8!vM2~A' );
define( 'LOGGED_IN_KEY',    'ZdLuv;%~Bm<@OLnU8jh7%|SAn+1ek(d|G]aAJkw5MxxHUG&v){N!ikr%wi.Hw8o3' );
define( 'NONCE_KEY',        'E:A<Twg+K(Ta.toPv0Il??mzc*;/ebcPLFYYfRBKf1x w3ZU6RdS?/79{DRz;%l-' );
define( 'AUTH_SALT',        '0%@@FYeka f)_a %B$* u&24eVHPF@Ui=d<-~xBXd{4K|SRUXIx&D%ZS&MbU_1m(' );
define( 'SECURE_AUTH_SALT', 'R}QebfUlIW*,g!3J{>9Af<J?PU!Pskf8LGYpwNG_QUFN-$jYLw)`%LW$.$D[id:n' );
define( 'LOGGED_IN_SALT',   'yO6o=R3F1L*jBIf2Ax/1|scS[c fWCe42Nj(qfx~9&dZD` FYZpeDJYK0{zNy`E!' );
define( 'NONCE_SALT',       'YX}8.=IIhn%pT}=h:(a..w_I9?]&a3GD!9aD(0cn[:2!|!7 @_%T62}NOQB+9%3&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

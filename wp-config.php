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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'radhey@55' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
    define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aVw l7u#+0U_:j1l,|;QTm5lHo-jnmlaV<JpD?jUHl{z6_aaXg8o9A-)pQVp}BS3' );
define( 'SECURE_AUTH_KEY',  'mE,Oua:q1m6{yh2DAxFxG(peIOzIIHrexcn?<YO;E43<SdMVi;N0K301`kh CrF&' );
define( 'LOGGED_IN_KEY',    '+<+K!67Q^bpsv<$XQjpt2^}Lc]lneTh~A_yOvqV>}yla9)ys1YVw>_[N7L,Wz~wj' );
define( 'NONCE_KEY',        'cq68h71c!,L%W)<awe<l[X~UT!J2O~_}v[xt)PK*gN32[hWx}izm[$ISlGhvT,2`' );
define( 'AUTH_SALT',        'P$n3,yx2Lzcq0;I,5h7Nq<HADy;C`Ck&g[0.)7T,>h43CRK8?C073b*Ffh!qm=id' );
define( 'SECURE_AUTH_SALT', 'VI>[Z~E^|g+o&2=+h~+w?~&Mgm,a/Uy|c;SZiU(s*Z!{4a*Yc8K]$3^6F[+F``yC' );
define( 'LOGGED_IN_SALT',   'SigRGM2<0C,>>Hu9nHw0p>`bo70_p?>v.P{>P 4,ft7ZpWRH5Mo6gB_aU@n7~T.4' );
define( 'NONCE_SALT',       'bb>8OlQE:sWQ*-oO*sc`n`QNGAF$U[]e<Ift;!!j.m-Fwrl/$WaI}lNl=+~(}W(3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_newproject';

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

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
define( 'DB_NAME', 'anhvy' );

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
define( 'AUTH_KEY',         'JvS1Zvy Ap1k6WY>0tCI(G*HwLES~^;M3ul^29yL_b|un?qBHd?3kp5^1(>!|WR$' );
define( 'SECURE_AUTH_KEY',  '),g#bD@UT&/4`DZi^i#E9u8JM.}(<G/{Gzb)DOMeONzKzhIN}3k(+]px(=,*VSvi' );
define( 'LOGGED_IN_KEY',    'I!rxUXor<!0~XVC+o t=Bk|:z|,e<TXz:=F^1L*2I]X}&}W=;rObq}*8J,1J|>fU' );
define( 'NONCE_KEY',        '~U;.SG:5%[8gK$tU(:sGjO2.P{+|oISKdkE8k}uvtP6WNol([(|bp|Xu,NTN(G9o' );
define( 'AUTH_SALT',        '<I)X7 :;M?Q941&%zw[c4O#)}#A;lDt(-yJ-(V%UlECcyi]XdPl:s:Vp!}Iq${6*' );
define( 'SECURE_AUTH_SALT', ']B7~%lmBRJ4ijeyFWqOAnt=T Mh3^tNI-S)(})MKEYln+|FC#njx![X(VFp/>X0;' );
define( 'LOGGED_IN_SALT',   '@&+$2lPlxuIY4smx8;>GM)(3Zh>hq|XA9Au,-hKPuJ3;CTJu#IQ%v.^3wMC25<oY' );
define( 'NONCE_SALT',       '$+F?|yE6O$uvfCSPd7Y{}!j@!1Za@3GT![)448-TP1<{R1M)J1fD9Ey38<q0<m]B' );

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

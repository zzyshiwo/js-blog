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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql116_62_239_7' );

/** Database username */
define( 'DB_USER', 'sql116_62_239_7' );

/** Database password */
define( 'DB_PASSWORD', 'GpnXfdDY4F' );

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
define( 'AUTH_KEY',         'gemJi#bfw3upcM~~pYgttQ_Glb#=_: uj/! [0u~UxkJj~zqm0cqo-`O2>z |ajF' );
define( 'SECURE_AUTH_KEY',  '4bQ4f&#u`!pjU!jF1KVYU{Y&fa)<P$AcA}=zw(>Ft xmC#iv}7xE(6~bO~Heb-c>' );
define( 'LOGGED_IN_KEY',    '$NPQcgf!a[^xmi@H_,+/E<IJ0B#=o[/94LeH_AHA0xkaAr:<EuX{LMe7kq$qR|*{' );
define( 'NONCE_KEY',        'KXI{_x~V|hesRDZ|jwqeJj5,9PoiKuBFNy3K:4N@kGYf>*(xtzr(`FBs*{wvF)JA' );
define( 'AUTH_SALT',        '<sNN=JQv1WNb~SsCRYca1!`%TY5iGIxLXMjbczv!N`m w#20`]wIawNwyg6e#Omy' );
define( 'SECURE_AUTH_SALT', 'np+BwEl^Dt=Ji%kF-70X9fEhIF)-@5DoKI0rod}#4qk!oCscpWB(yUf!x>MpNibb' );
define( 'LOGGED_IN_SALT',   '2RUtw=NfS16t&O15!A#|c{t+Y.)W!c<$J;j&$1;WQ}>~9wJ#1k$z@zH`16h(@>~(' );
define( 'NONCE_SALT',       'Ucy)pF!s+b>ahU7nz4&75wr/v>S<s=Y:F#e;a]c>A.irYC[~HMMQx`Jm&D_#VUI<' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

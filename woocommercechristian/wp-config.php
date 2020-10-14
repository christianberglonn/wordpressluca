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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'T<j3fO5]zh|>7;$(ItJS&S*HHuz+8T`2d,!5^bq=4g#D%$%cGQ(XxnUnJ(nMs+X1' );
define( 'SECURE_AUTH_KEY',  'oo)qL7%.99iDr{(k#vnj<Kn$v:koM#NyJ$U=sO{HeA%0+i;Smw4i#eW&/TW+~)eU' );
define( 'LOGGED_IN_KEY',    '>Mi u(67$WjERayDgw`+Yo-$R^)Eh(L#hXYnb7_K5?7 nI,D*S|Y7([%p-85#4@:' );
define( 'NONCE_KEY',        '[Ul&Srt(3y$E]CrU3zdTDc!giY[YsC85Kk).fOY$Z1}Zz9J#xIeitn<>CuWyXL@?' );
define( 'AUTH_SALT',        '.Sm?1Vtd8&EnmTQ&GRQl_[MZlUu/d.}[za36yG_2`[-J!o|spQc>2l>K|H[ZE+`I' );
define( 'SECURE_AUTH_SALT', '[,g%JO(2Ou63Z|_jxpl.[+@WVbZq<2f-gw^>1N!D+$nDpS1Dd0qw+L?E W-W>6vb' );
define( 'LOGGED_IN_SALT',   '2c|WG9<@^n&,I{}d>Hc7,=_GV]*T_GOTtJ;0dPImG3YrSj3h#]0U?e3F#XAG)h/,' );
define( 'NONCE_SALT',       '#~!/!SV![iO7+`c!{Q?JV}?/`PtgI5ru6h;]e3RMip[}1zu@ S<1I.9fy^i40>*R' );

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

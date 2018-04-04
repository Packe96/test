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
define('DB_NAME', 'cajevi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nr0oe7;hFdcPH&/1d:`(iS^|jtwvkHO0[`p{I/XWUV8Ia>$_+bVP(!`4UGo6b#;v');
define('SECURE_AUTH_KEY',  '3[% G,Gv&RwmW<gw-;kAlro.jfS[NOmsph[db/raIb}h,l.rW]Kev{XQf>s=kSyr');
define('LOGGED_IN_KEY',    '5{WD[OuDpRUo>PW?r.^Sb3@L/x7NsFVU&h=l[mBj$,ginm-*^:5iz7imv_9e pqA');
define('NONCE_KEY',        '%]xYL=)s># @Z]UWK T+9wSxwF:5se9dYUDgCD)#i3Fub8T{tS;n@r&[Y:t{ lUX');
define('AUTH_SALT',        'Cac)7~$?En%seg=U=.vB^Z{2#or6m<^VPr+U4`pT?i(24ZO(PA=nTyPn1u]B;?Em');
define('SECURE_AUTH_SALT', 'V[q;u~!5Q9kv^=gs/;1ug1ZnDCj;F{?UE_U;6La1XW&iZo}v+S>OcdIlMG20NReH');
define('LOGGED_IN_SALT',   '}2c4hh^ j+56U5Vl+L_yDf!-*;~h78daoDNeS{~@V$7(B|#!MyF-LEz-(iO)a=d_');
define('NONCE_SALT',       '.h_VVaYet2?39s_(u6Dki/{}d%% 1%bSXhqt/% U0qxFz}rh[Lo.~MG&h3/^:T.L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

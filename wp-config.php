<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sparkmasterflex_development');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Db 4$<nu65>OwdLW;DKX/HWh|8Pxm-P43D.xU~-fkHFRsa*%:6:c,2oOXzLM=dzH');
define('SECURE_AUTH_KEY',  ' h*xoJ{z~-Iu_l5BPKf8*#&f=5IY|_573DN+wMrw?lGh|M-#%+6tv=*VtHb@orx-');
define('LOGGED_IN_KEY',    'W;`I#8_@/*b|qs]hs!AQt$Gzm<xG&VrJ%m7vzv+,AOiAlSg>0]=YQ6N;V6kK;`ep');
define('NONCE_KEY',        'Nz>|gUf3`-n=WpgpxK2g8Wt|=V>iFw#3>2rsd]dovVXfFbQA%!zwf[;SIzha8n6O');
define('AUTH_SALT',        'VLgJeR/s$hdKNg-wW$:*%$JCP>A*K90l.f5#~d|T[kY(z$4za8by.$Mum4:aYHa;');
define('SECURE_AUTH_SALT', 'VS7Izpn5#33E!L|@3uqz~3o+k K;I(]`VS/=c-3wE?.2+9FM/O}|+LW8-t6k)io?');
define('LOGGED_IN_SALT',   'QLHA[#aeeE>RAXof(a)u-VW5XNz[yECNw?6jrSC0p{(fC+!rg-RY()* EoI?vXD-');
define('NONCE_SALT',       '{++m{x_38S-,mzLY/#ql)ZYAlHR3?lc5|fddH*C,?>~p2d|bx.BtFXoWPZ+E}C-t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

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
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
}
define('DB_NAME', 'ebdb');

/** MySQL database username */
define('DB_USER', 'thoradminsql');

/** MySQL database password */
define('DB_PASSWORD', 'D4thorserver123sql');

/** MySQL hostname */
define('DB_HOST', 'aa1uqg20yxswmww.cdmc6snwnfng.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '_5/bb4omD} Zq6-gj Ky?<ytw+.{W43*_?xUYiwNypZI2A/+&Z%>u8]p=^ZL<bH_');
define('SECURE_AUTH_KEY',  '?%i{2U=C./>gXVA)/)XImgC+8]eKWGhr^E]{UH)LlLg`,Wf-z?,CZk)BG;Rbn`]P');
define('LOGGED_IN_KEY',    '.>#=|VnpN#5}7fY7QvyU;a=#|lj/-v}21-eBNic*Htx`<c/Q,V/>rNeK7NKSP+{?');
define('NONCE_KEY',        '7i}(+tRBMRkUp$+u&0M!:r3G*P?OXC-(t|A{u:al 78P_|lI J>t-U6~[W}x|Y*R');
define('AUTH_SALT',        '-~J-DV*J^w*?+2Pp=_2>-XV46)w_#*F5+tSR${aT0ZkH#6H2]@5Zx.5!t>.We8qf');
define('SECURE_AUTH_SALT', 'jEi+Ze&dbC:[apN=obWU0.76T~HWx ?@4`-#YjY)DA&jFECOTGDAF~jZee^3G-|g');
define('LOGGED_IN_SALT',   'pUU%ZQ=~t~2|%:m?Tp`[6LN#lw%(3d:Q|a|RMG)/f&0R?u`+SY@1|tP+er*`V)*A');
define('NONCE_SALT',       '<-/nOH%l$jQ<.9*oc2{:Tnkp.YE-;4 s?@*VO|RBq9UTIa@uj3Ko&)+kqr@oiRjF');

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


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
define('DB_NAME', 'wpdb');

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
define('AUTH_KEY',         '2~kkG`mX).;$#C HgUFm;=8+6YzB^NDam#=w{:QHz{%.dmM<e32?>mPsZ`)n(_m9');
define('SECURE_AUTH_KEY',  'M|v#}fql<+x,B@,(7+U2v;1VYL[gM7=ZR/Hcz=*vE/Cf8+GdWB?:c_b.6@$|3U$s');
define('LOGGED_IN_KEY',    '(N5$N<yK~,p1Kv7;wa#n`5W@gG6m]PUxmB#i<R_DLy2AR7<3-Urbf77?3igU+MNk');
define('NONCE_KEY',        'Rx+M]95L00c:U-IO{L6}7aPU#/VNi CB%/6FN{Ix/Y<~9=73I|G.PhC*B?)plL)v');
define('AUTH_SALT',        'r}BVOdFg{gS`h).3po|Tvi);pU%xj?w~-OY5[hOiI0%V}IF+fg2M9p9+`GmZbavN');
define('SECURE_AUTH_SALT', 'rBE6~%alnxwJB=3?fam#Pj-[JaCZV!B9,~s/iA{:+_Iv3UrM>[*W(Q,q/JVN$1:*');
define('LOGGED_IN_SALT',   'sF-YHpRh ZK}UYg]MaFP71LA7lN:^3hiJX-YoV#JR,pvo[gZX?3MG]OuH]V_HdVE');
define('NONCE_SALT',       ';I4oK#7%9Jn1]YCOBi4uEp/gt+5w:VR[xp!~7T5[SPrt4>DBU?dn1N~O-p+{l%_h');

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

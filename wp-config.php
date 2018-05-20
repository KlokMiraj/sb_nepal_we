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
define('DB_NAME', 'sb_nepal');

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
define('AUTH_KEY',         '}JMFO=-yj`fH`Vz+`rix;p=5mTA%h{Hgr+63qrrC7Aad!4d-(WIn_;bdv=_n-B?,');
define('SECURE_AUTH_KEY',  '6:8i;n/p((iUgw$ht01$ti<s5%-O.K~lPXh+I_>npo5y[28Y)8f+MQG:Q^<JN/l)');
define('LOGGED_IN_KEY',    'fc LtH,/$Z#bZ2~yR@|_i^=/:6P`^7lgq]H_r/vq`#7,jnF?88Lq$Qx`$[x}|9+=');
define('NONCE_KEY',        '^pZ|0U{8=sf0a,uP*z0B#B82!AeVpCh7E32u)eLv|ichpSpei+lOINLEtk$V&!hp');
define('AUTH_SALT',        '+^~5]?Q=V1W;i&hpd7oyF-DP%6wM1{K&>A~0M~q?BudU5{BjL/5r]7bo9|Oz(^:O');
define('SECURE_AUTH_SALT', '$Rsr[Ix!AW>0&I(QOiJTaein@r!4Pi(WRKPd|e1||#z,s?^~-*G6trAhF^R=7ir=');
define('LOGGED_IN_SALT',   't6g7M&J[8vg}{1+Eo}7.^Ph5l:qp*Cb%{^<[a_;G-d]d>w?#e-jJ#Zh`<RP&4v2V');
define('NONCE_SALT',       'V)a|.(H`[#].`k.F5XkA|q0.j4_R]c}I[?IIEi*G|jj,#qmhi{E,kYu;LFo<5jtJ');

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

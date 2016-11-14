<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'brewers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'V?9=-U|@zexu+GT$TDidrbjrF}W/v}k3:_4bVhj;OCB_09wfq#Q`<9@/px/:]O(%');
define('SECURE_AUTH_KEY',  'F8wC&zBD4Uzz7 tx5[&Si.x|^pF$d%pR-7;iD39Y }0/IRJS]rctY,Ixm`/4}2Oa');
define('LOGGED_IN_KEY',    'l<y:Ht`AN[<QN<(T<f/@.lH%+Ghdh(*:^Hl+@j>zoH.g&Lgeczo5GDyjFg?`{{-+');
define('NONCE_KEY',        'q2-f[om06Re*3ctj!JtrigJW3ljELFKjAP=vEJZwfa]`hA?nSGonq*LCM4s+S0+=');
define('AUTH_SALT',        '8>,BE|ttg`}U2d@I.TfBr12/6G* %~%~cZZP(2@J+ViJuRu|9:`!v</(V&+#Z-E{');
define('SECURE_AUTH_SALT', '&v_p>>8->q>P9jo[Jckwcs|@i:z!uO;RR2+tn Iu<_ $bu:UByj`!N6oDUN|_ ME');
define('LOGGED_IN_SALT',   'vAT)h<.|Q~)/VS5|1]azzrj+1Ntfma3MCY~nE%o3e=q;`MdIk1JIrY}W}9}t+ZEP');
define('NONCE_SALT',       '!5t4j0Q-|N&yAuCyg1Xx3,b.nGmy+)~yLjZE0bH8Q`8,.9>f$_BYYUz{9nerZC}:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

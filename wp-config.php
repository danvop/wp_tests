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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'Fg[d+d%xWy9)ZCd2EUCcesWY^X[1(N)vxnB[;iG&mQ`E<OEy?gQ$dF=wmM>dFrd*');
define('SECURE_AUTH_KEY',  'F{3Wc/^$g=g8%Il||%-&;}KRhgo)y)Xm;IgYj,HU]6*2-G9dp^C$O5hyZCt}ev@1');
define('LOGGED_IN_KEY',    'RayJIQmC VJG,i2.@v3@VRLL#,)w7#)hXWY8lpV*-PKgYvw)K:Xlgimb(?V/Ay;3');
define('NONCE_KEY',        '/lJ*|&Le;?HIN5CD$!TKjfA,f ?*mmlwJMXEmMt>;0u6<~_sw(Q-=I%&d9x dumR');
define('AUTH_SALT',        'B[smZD)c5sOEO3rG>U_$WQpSUd~LA-o74f2,@wiABe|Nj<#i@F/|-tK?]&cQqVW]');
define('SECURE_AUTH_SALT', '(aqj7!%a^4,,:*I3m|D67k[hwW{)Kn(quVFP+GIl-*b{~4H6Q$a?f5[(Zi@pWWMi');
define('LOGGED_IN_SALT',   'yLs|W(~Qp^GO&O;hDN~@@C.<s}E<qjWtI?E-[>0uo{w(27rd;8}w)O y]FXPy+I_');
define('NONCE_SALT',       '[9-{}A+0];a1<Hn?_a`Nd8usV!Rb.tdb)<mc45&0Qpsrk#bocV_t<IL_K;w3<pV)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'default_';

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

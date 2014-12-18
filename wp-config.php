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
define('DB_NAME', 'biorepo');

/** MySQL database username */
define('DB_USER', 'biorepo');

/** MySQL database password */
define('DB_PASSWORD', 'Mofds92HNZq!00fou');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6IAmYF`ao^V~8V>Jl7NjpXcow>RZP0.d<:.D,DWgH9-IfdjRkPx)!FBe*E3=+S m');
define('SECURE_AUTH_KEY',  ',yJ~UJZJLtm~Q<n| K=wx$&uJ3[E4 1b5@2%wU@i&QxI.Ea6Ni_h47YPIR#jEVvT');
define('LOGGED_IN_KEY',    'AM;&2#*yBPN`&~rn4eF8naM@-;!t$ieZyfqoYF$H^Nd|Q+UK|f7J%-+tgZ1#4FQ=');
define('NONCE_KEY',        'eznWPkT}~ LrNc`v*YV`w*_:shLTg,x-Nt@yBGtUBiR=w+Edq_Tme=&frfE/4tVw');
define('AUTH_SALT',        '.;} Mmy]NE!!$75+Mu}WLTCJGC|;eg+qt3QRulF0y8*[q|?K}#ugAJM7J5}q[q)x');
define('SECURE_AUTH_SALT', '(ic+Mtm.`9s0F$<R|%GWlWIm$?-#Dv1Is Y5$S;b** $+IW(`xRoR[1#DskV)S+n');
define('LOGGED_IN_SALT',   '4,V`t|;S+DOIc[+I@cT|d_E]3x/wbrq1sq9_*((I6N{(l<-|@jc+xm2-(q-3A(Dx');
define('NONCE_SALT',       '{-[t{#WEE#z1x8xYDW~(*A+[V@b!5}F5c=TL%<%n4?d*f$[O%!0_}Z2]V=8`_1c6');

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

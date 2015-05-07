<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'Beauty-Website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '2Y6dcTs+[4C^.u2^-C%)J)k*(-+k8BO|3>MCyNZ[aS*q$6.5DYubm0](!yLLfux?');
define('SECURE_AUTH_KEY',  'R2$7*yV-%xHh7k-sx5E_mtU2O^Oz[ h+W,w~@iU#J_&}JV|?B)w*a]/i-z?H2K^M');
define('LOGGED_IN_KEY',    '2{?{GD42-C1D=v-RGo#fvpH8]1}xg5;WcL.}~@VI+C%rCs7ow%0{ME{fr8=SUz&#');
define('NONCE_KEY',        'F|/,}:I<;0je0,.F2L=|6+09l0@7w!p)EO,Rq~xR6I,>=Vrk_IAG>ry87Ceq[a8e');
define('AUTH_SALT',        'Gwu#d@4vGXPsUi-6jnwuF^e/}U7;TAhDtS9 7%)PX-#u!RPA/8:*XWGSIx2x(p7[');
define('SECURE_AUTH_SALT', 'F|9!H/1ZSfjC-1A_Ey)v[p3BRL~N5czFF2-]:2@LswAu#$&(|R9XHJ<dqP=Ec7%K');
define('LOGGED_IN_SALT',   'rn~L%#yfCbSBaqma<X|f}7<K*gmA{|aD==[$BK(Rs,US;!1o:kictnk<QpxIKqUs');
define('NONCE_SALT',       'N3YEZ=cGqz}xEe5UAV}?x-7Ol2B,ArOKq|xdZpZ@%qySR ]Ml^8<oL+7}J#gm9|%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'beautywebsite_';

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

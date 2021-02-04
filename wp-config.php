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
define('DB_NAME', 'pierre-malardier_wordpress_e');

/** MySQL database username */
define('DB_USER', 'wordpress_3');

/** MySQL database password */
define('DB_PASSWORD', 'Sv9wp7F!0C');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'mkr%KvB)Z&@oAe@am@m#ZMopa3WjxynDT(PbzXVDxi&V0bAzSZ%SIr^icFujJ6SS');
define('SECURE_AUTH_KEY',  '3rL&QEmJpOWS(TpP(hDlRTXNyKg*BNnpi6%OfR9W7RjLEl@j(Z!zi01xDh5Cztht');
define('LOGGED_IN_KEY',    'nUnlGA4IpeoNwhUURK*gXAW78Sh%nft5XK1MV%h8guQlU8OEap!l7Zy4hc97)m7V');
define('NONCE_KEY',        'Tv@Wy3vKHVy7Pr7HPjTTm&pMqMSpeWMWRLCKRe(JCcWg!YycKabjznDiXhZlll6d');
define('AUTH_SALT',        '0stQhUY0RX)Kj&@mTDPclDjBbnL63y9!5bB7(tgTGgzNAgQKhWmnqk9vnooiglQa');
define('SECURE_AUTH_SALT', 'tMElEwbMMDA1#tVywTZvo*@7ARnzr6GYB1cW7r!gwdthSGmGZ%JCr5@Efuf2GTK)');
define('LOGGED_IN_SALT',   '&cY*@F6qOrTl!e0wxU2GW(h^As0dNso!bYGrDXg!W)CCWz)iCmwmNK9b5WP644&v');
define('NONCE_SALT',       '%hSUY@q5XvxuLSabbrcpNo8kcbh4Z*L(1IhisocM5FuGqx4wPlw1!7ZgxSufHtaV');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

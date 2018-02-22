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

/*
 * cPanel & WHM® Site Software
 *
 * Core updates should be disabled entirely by the cPanel & WHM® Site Software
 * plugin, as Site Software will provide the updates.  The following line acts
 * as a safeguard, to avoid automatically updating if that plugin is disabled.
 *
 * Allowing updates outside of the Site Software interface in cPanel & WHM®
 * could lead to DATA LOSS.
 *
 * Re-enable automatic background updates at your own risk.
 */
define( 'WP_AUTO_UPDATE_CORE', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'think_wp');

/** MySQL database username */
define('DB_USER', 'think_wp');

/** MySQL database password */
define('DB_PASSWORD', 'XI1pmkC5U1vn');

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
define('AUTH_KEY',         'yfnSmB4kpqE6Bx6aA3VJ0lV9GQq8QXtlvIjP7q3pCxCHGjqdj0aAR6CXW93kzdsw');
define('SECURE_AUTH_KEY',  '8AMzvXoU8bX7xCZsclJQXctZaw2Zbi8W76oBzRgGOvlAYVWnsLfSnFOsi_g1A8Ta');
define('LOGGED_IN_KEY',    'IvoeSvRUV8zeULbFdfPU8qSf1mXoPGRSDjzUQfH_HsvCzf1AGbFop3RG7EatkpMY');
define('NONCE_KEY',        'OffJpncy6UFImeKpKblf0Twjnnlv2fZ6hr7GC60JmxT_UOl3cE6QE0iksOJjhQgd');
define('AUTH_SALT',        '35AqqMiEaUzu9JhJhscMDbxe2rYBRdkInk0_oAbaGExlFfKqFtNtBu1yKwV_XGqd');
define('SECURE_AUTH_SALT', 'n5vzjRgQgAjH17gq3u3qACAguSNkoztLkijP3BIj_gd59b2fg6aDCn3MZ4iHKLPa');
define('LOGGED_IN_SALT',   'LpIvLFPz9eEX4XddLmN4Uj8dalw6jyWedyUFUEc7pxg4N6J9p8FUhWDX5TaZEcYs');
define('NONCE_SALT',       'WF58RRivEHpwOghcqUrrRcvlUY0K7boV1UowSZR0IPFw2br3CPoHel3HnhO6x2eW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpyoud_';

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

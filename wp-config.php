<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':lH,k1h0zE(}G8E gwjq&517$9QMw@K!Z,~L*7fcE<vx*;?Y#r$xMC N::+#~Kc*' );
define( 'SECURE_AUTH_KEY',  '3XR3Wxsce<} CH1v5)~.xG6h+8)Kfwuvb}}223k}2Q{AoV[HuQ)wyt2c^SAm/{I,' );
define( 'LOGGED_IN_KEY',    'jUeBd0V)%EW,rE`8iD[7-#;e/Ca^}[:=C@?6f`oP16,_|Zfep%e[O`QGGC{@XF,E' );
define( 'NONCE_KEY',        'M5pMHn2])~QV=|Xn(Ktf 8Wq5HAWa@=bL@Q04{-BNDaq0#gVa5`;J)%f`r:k+GPN' );
define( 'AUTH_SALT',        'og6rs7ekb DoK.`VK}K]N>|bSr|yj%7X>sQH]>A]4-oA.qsWU0^tdNLm5>Xs#LV;' );
define( 'SECURE_AUTH_SALT', '98d9igx+k~jBN}f[]7.eUn<wn%gxeK$So$0zFWfWEoM-MwN@by@3}6#$fVHUYWoe' );
define( 'LOGGED_IN_SALT',   '?5$~e$vDw^%sD^hF 8$RD@VZ2;5}znjg;sgbfJ6|r0?Y055<KsBM}Nv=_1i#YG3h' );
define( 'NONCE_SALT',       'msiM=RvV[&3(jA),|u2KT,Bf^6i>F%+;&jE`{Kl>WJcc4Bsi3%8hrwE-XpPq:bUJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

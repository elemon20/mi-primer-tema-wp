<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bd-primer-tema');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '%zc9_Q_v. /[pGa0Po %jruGCyK4V|SsQX[sDe9i5lVQm+@y_dS%IylyNO8frkHY');
define('SECURE_AUTH_KEY', 'iJrqEFAY#Sb{)/6I4hrY6hEvEr01A@X<1S)jbI?An,zU>PBKL5#1P.xAlEFR+}D(');
define('LOGGED_IN_KEY', '!{D#x.&nW)T:0>/16LA+[;b&{~EJf1A:4Cw$1liF;oboG0X3=Iv2/W!YILzDe$F|');
define('NONCE_KEY', '23XDCrUg0~<8K&$gPTxksu3O;9H4NjlO.vW7onhI VWBk)+`6IS|MWpVa-TqY3gx');
define('AUTH_SALT', '+,6p*?tpKDbYB^yNVzwKpIE?w#_~x${$,-|L.pWY7XW$KKvqz1e4C-CJx%uH,V]k');
define('SECURE_AUTH_SALT', '`Vj]I_O3Adr;ATrh}tE!6`)FALh~.TYUwR*x;C@,P6x|4p|U>cX^6~vZ!hMey?OT');
define('LOGGED_IN_SALT', '(Cg?Q6^uL<{%/Yf%rKsj+xn^_$!!.|5I0tL7NaHqV^V!LL4%]I9b2MC$N/z&[^L,');
define('NONCE_SALT', 'P$9^4 tC:.uUvu&&`(<Vg./F F8p]!M]RFL2S!!0R#wn{_L_+]|D!~30?SFHZN-c');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dl_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


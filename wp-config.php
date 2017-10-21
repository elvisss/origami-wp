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
define('DB_NAME', 'origami-wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Admin123/');

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
define('AUTH_KEY', '!L[WY%:LF)gt#pp!et${c*Ld-wx/B{N3QJz]?aL&KDZM}O[QH{Otdz[$8b):Hd!D');
define('SECURE_AUTH_KEY', ',*0&dAAS8EVKJ i~ANG?arA.vdo=^7CkFV(H]`*)$0Z5X/05yesIWo%ewmHwD`=q');
define('LOGGED_IN_KEY', 'R0!e(aW`$U)v&v/Ls!LO>}i+o[}v7QJ{(@ xmQ7J#dVLrY)tyfbi[3v~)W:!((0k');
define('NONCE_KEY', 'N+R1.J)LLKjD~XaL>awRM&GW2nhdg][qZ1Sy7wgT3U<y#.F}?^-=5=L9#,q(3zJQ');
define('AUTH_SALT', 'AGm:}TGGMHn63g<[itN;17E<6%1^s{@5T.aH$=9++Ru^4z=![OH?<,d=)]ZmePFn');
define('SECURE_AUTH_SALT', 'X-$tZ0W[PDS.U}. TeO^9L*F9nonGz4[o&J]_no`-COAJ`&7?F$vCS !(tJN[|!n');
define('LOGGED_IN_SALT', '-gq}5/i)2g{YP_t#|!CXOAG9[U1@aKof+<%Je<vF&-?l^uc1xIKL-?kCJez,< n%');
define('NONCE_SALT', ']`PE Z_`cJ9?p!SNb}=lJ(.ODGcKTc#,={T;=@vz7C*:G)!(w2y%PMMDs5mp8._3');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


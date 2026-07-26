<?php
/**
 * Cotizalo - Aviso de Privacidad
 *
 * Archivo físico que bootstrapea WordPress y carga el template de aviso de privacidad
 * sin depender del sistema de routing o la base de datos de WP.
 */

// Cargar WordPress desde el directorio raíz (un nivel arriba)
require_once dirname( __DIR__ ) . '/wp-load.php';

// Cargar el template de aviso de privacidad del tema activo
$privacy_template = get_template_directory() . '/page-aviso-de-privacidad.php';

if ( file_exists( $privacy_template ) ) {
    include $privacy_template;
} else {
    wp_die( 'Template de aviso de privacidad no encontrado.', 'Error', array( 'response' => 404 ) );
}

<?php
/**
 * Cotizalo - Términos y Condiciones
 *
 * Archivo físico que bootstrapea WordPress y carga el template de términos y condiciones
 * sin depender del sistema de routing o la base de datos de WP.
 */

// Cargar WordPress desde el directorio raíz (un nivel arriba)
require_once dirname( __DIR__ ) . '/wp-load.php';

// Cargar el template de términos y condiciones del tema activo
$terms_template = get_template_directory() . '/page-terminos-y-condiciones.php';

if ( file_exists( $terms_template ) ) {
    include $terms_template;
} else {
    wp_die( 'Template de términos y condiciones no encontrado.', 'Error', array( 'response' => 404 ) );
}

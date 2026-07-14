<?php
/**
 * Cotizalo - Página de Soporte
 *
 * Archivo físico que bootstrapea WordPress y carga el template de soporte
 * sin depender del sistema de routing o la base de datos de WP.
 */

// Cargar WordPress desde el directorio raíz (un nivel arriba)
require_once dirname( __DIR__ ) . '/wp-load.php';

// Cargar el template de soporte del tema activo
$support_template = get_template_directory() . '/page-soporte.php';

if ( file_exists( $support_template ) ) {
    include $support_template;
} else {
    wp_die( 'Template de soporte no encontrado.', 'Error', array( 'response' => 404 ) );
}

<?php
/**
 * Cotizalo - Página de Precios
 *
 * Archivo físico que bootstrapea WordPress y carga el template de precios
 * sin depender del sistema de routing o la base de datos de WP.
 */

// Cargar WordPress desde el directorio raíz (un nivel arriba)
require_once dirname( __DIR__ ) . '/wp-load.php';

// Cargar el template de precios del tema activo
$pricing_template = get_template_directory() . '/page-precios.php';

if ( file_exists( $pricing_template ) ) {
    include $pricing_template;
} else {
    wp_die( 'Template de precios no encontrado.', 'Error', array( 'response' => 404 ) );
}

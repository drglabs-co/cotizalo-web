<?php
/**
 * Cotizalo - Página Qué es Cotizalo
 *
 * Archivo físico que bootstrapea WordPress y carga el template de que-es-cotizalo
 * sin depender del sistema de routing o la base de datos de WP.
 */

// Cargar WordPress desde el directorio raíz (un nivel arriba)
require_once dirname( __DIR__ ) . '/wp-load.php';

// Cargar el template del tema activo
$que_es_template = get_template_directory() . '/page-que-es-cotizalo.php';

if ( file_exists( $que_es_template ) ) {
    include $que_es_template;
} else {
    wp_die( 'Template de que es cotizalo no encontrado.', 'Error', array( 'response' => 404 ) );
}

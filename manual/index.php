<?php
/**
 * Cotizalo - Manual de Usuario
 *
 * Archivo físico que bootstrapea WordPress y carga el template de manual
 * sin depender del sistema de routing o la base de datos de WP.
 */

// Cargar WordPress desde el directorio raíz (un nivel arriba)
require_once dirname( __DIR__ ) . '/wp-load.php';

// Cargar el template del manual de usuario del tema activo
$manual_template = get_template_directory() . '/page-manual.php';

if ( file_exists( $manual_template ) ) {
    include $manual_template;
} else {
    wp_die( 'Template de manual no encontrado.', 'Error', array( 'response' => 404 ) );
}

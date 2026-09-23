<?php
/**
 * Dynamic llms.txt Generator for Cotízalo Theme
 */
if (!headers_sent()) {
    header('Content-Type: text/plain; charset=utf-8');
}

echo "# Cotízalo\n\n";
echo "> Sistema de cotizaciones en línea y presupuestos para PyMEs y profesionistas en México.\n\n";

echo "## Páginas Principales\n\n";
echo "- [" . esc_url(home_url('/')) . "]: Software de cotizaciones para pequeños negocios en México.\n";
echo "- [" . esc_url(home_url('/precios/')) . "]: Planes y precios transparentes de suscripción.\n";
echo "- [" . esc_url(home_url('/cotizador/')) . "]: Cotizador en línea ágil para crear cotizaciones en segundos.\n";
echo "- [" . esc_url(home_url('/cotizaciones-por-whatsapp/')) . "]: Envío de cotizaciones directas por WhatsApp con enlace y PDF.\n";
echo "- [" . esc_url(home_url('/software-para-cotizaciones/')) . "]: Software para hacer cotizaciones para pequeñas empresas en México.\n";
echo "- [" . esc_url(home_url('/seguimiento-de-cotizaciones/')) . "]: Sistema de seguimiento de cotizaciones para pequeñas empresas.\n";
echo "- [" . esc_url(home_url('/programa-para-hacer-presupuestos/')) . "]: Programa para hacer presupuestos para empresas de servicios.\n";
echo "- [" . esc_url(home_url('/software-de-cotizaciones-para-constructoras/')) . "]: Software de cotizaciones diseñado para constructoras y contratistas.\n";
echo "- [" . esc_url(home_url('/software-de-cotizaciones-para-servicios/')) . "]: Software de cotizaciones ideal para empresas de servicios.\n";
echo "- [" . esc_url(home_url('/que-es-cotizalo/')) . "]: Información sobre cómo funciona y beneficia a tu negocio.\n";
echo "- [" . esc_url(home_url('/soporte/')) . "]: Centro de ayuda y contacto de soporte técnico.\n";

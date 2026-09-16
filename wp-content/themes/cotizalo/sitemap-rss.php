<?php
/**
 * Dynamic RSS 2.0 Sitemap Generator for Cotízalo Theme
 */

if ( ! headers_sent() ) {
    header( 'Content-Type: application/rss+xml; charset=UTF-8' );
    header( 'X-Robots-Tag: noindex, follow', true );
}

echo '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>Cotízalo - Sistema de Cotizaciones para Empresas</title>
    <link><?php echo esc_url( home_url( '/' ) ); ?></link>
    <description>Simplifica tus ventas con el mejor sistema de cotizaciones online en México.</description>
    <language>es-MX</language>
    <lastBuildDate><?php echo date( DATE_RFC822 ); ?></lastBuildDate>
    <atom:link href="<?php echo esc_url( home_url( '/sitemap.rss' ) ); ?>" rel="self" type="application/rss+xml" />

    <item>
      <title>Cotízalo | Sistema de Cotizaciones para Empresas en México</title>
      <link><?php echo esc_url( home_url( '/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822, strtotime( '2026-07-27' ) ); ?></pubDate>
      <description>Simplifica tus ventas con el mejor sistema de cotizaciones online en México. Crea, envía y da seguimiento a propuestas profesionales en PDF.</description>
    </item>
    <item>
      <title>¿Qué es Cotízalo?</title>
      <link><?php echo esc_url( home_url( '/que-es-cotizalo/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/que-es-cotizalo/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822, strtotime( '2026-07-27' ) ); ?></pubDate>
      <description>Descubre cómo Cotízalo ayuda a microempresas y emprendedores a digitalizar su proceso de cotización y ventas.</description>
    </item>
    <item>
      <title>Planes y Precios | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/precios/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/precios/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822, strtotime( '2026-07-27' ) ); ?></pubDate>
      <description>Conoce nuestros planes y precios transparentes. Elige el plan ideal para hacer crecer tu negocio.</description>
    </item>
    <item>
      <title>Centro de Soporte y Ayuda | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/soporte/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/soporte/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822, strtotime( '2026-07-27' ) ); ?></pubDate>
      <description>Obtén ayuda, resuelve tus dudas y contacta a nuestro equipo de soporte técnico.</description>
    </item>
    <item>
      <title>Aviso de Privacidad | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/aviso-de-privacidad/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/aviso-de-privacidad/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822, strtotime( '2026-07-27' ) ); ?></pubDate>
      <description>Consulta nuestro aviso de privacidad y cómo protegemos tus datos personales.</description>
    </item>
    <item>
      <title>Términos y Condiciones | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/terminos-y-condiciones/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/terminos-y-condiciones/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822, strtotime( '2026-07-27' ) ); ?></pubDate>
      <description>Revisa los términos y condiciones de uso del servicio Cotízalo.</description>
    </item>
    <item>
      <title>Envía Cotizaciones por WhatsApp en Segundos | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/cotizaciones-por-whatsapp/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/cotizaciones-por-whatsapp/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822 ); ?></pubDate>
      <description>Crea una cotización profesional y compártela por WhatsApp en un clic. Tu cliente la ve desde su celular y puede firmarla.</description>
    </item>
    <item>
      <title>Plantilla de Cotización en PDF y Online Gratis | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/plantilla-de-cotizacion/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/plantilla-de-cotizacion/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822 ); ?></pubDate>
      <description>Descarga o genera plantillas de cotización profesionales en PDF listas para enviar a tus clientes.</description>
    </item>
    <item>
      <title>Programa para Hacer Presupuestos Comerciales Online | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/programa-para-hacer-presupuestos/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/programa-para-hacer-presupuestos/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822 ); ?></pubDate>
      <description>El mejor programa para hacer presupuestos y propuestas comerciales rápidas y profesionales en línea.</description>
    </item>
    <item>
      <title>Software para Cotizaciones en México | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/software-para-cotizaciones/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/software-para-cotizaciones/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822 ); ?></pubDate>
      <description>Software de cotizaciones número uno para microempresas y pymes en México. Rápido, claro y efectivo.</description>
    </item>
    <item>
      <title>Software de Cotizaciones para Constructoras y Contratistas | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/software-de-cotizaciones-para-constructoras/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/software-de-cotizaciones-para-constructoras/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822 ); ?></pubDate>
      <description>Cotiza proyectos de obra, acabados y construcción con desglose de partidas y control de costos.</description>
    </item>
    <item>
      <title>Software de Cotizaciones para Empresas de Servicios | Cotízalo</title>
      <link><?php echo esc_url( home_url( '/software-de-cotizaciones-para-servicios/' ) ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( home_url( '/software-de-cotizaciones-para-servicios/' ) ); ?></guid>
      <pubDate><?php echo date( DATE_RFC822 ); ?></pubDate>
      <description>Genera propuestas y presupuestos de servicios profesionales con firmas digitales y cobro de anticipos.</description>
    </item>

    <?php
    if ( function_exists( 'get_posts' ) ) {
        $extra_posts = get_posts( array(
            'post_type'      => array( 'post', 'page' ),
            'post_status'    => 'publish',
            'posts_per_page' => 50,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );
        if ( ! empty( $extra_posts ) ) {
            foreach ( $extra_posts as $p ) {
                $permalink = get_permalink( $p->ID );
                $path      = trim( parse_url( $permalink, PHP_URL_PATH ), '/' );
                if ( in_array( $path, array( '', 'que-es-cotizalo', 'precios', 'soporte', 'aviso-de-privacidad', 'terminos-y-condiciones', 'software-para-cotizaciones', 'programa-para-hacer-presupuestos', 'cotizaciones-por-whatsapp', 'plantilla-de-cotizacion', 'software-de-cotizaciones-para-constructoras', 'software-cotizaciones-constructoras', 'software-de-cotizaciones-para-servicios', 'software-cotizaciones-servicios' ), true ) ) {
                    continue;
                }
                $excerpt = has_excerpt( $p->ID ) ? get_the_excerpt( $p->ID ) : wp_trim_words( $p->post_content, 30 );
                ?>
    <item>
      <title><?php echo esc_html( get_the_title( $p->ID ) ); ?></title>
      <link><?php echo esc_url( $permalink ); ?></link>
      <guid isPermaLink="true"><?php echo esc_url( $permalink ); ?></guid>
      <pubDate><?php echo get_the_date( DATE_RFC822, $p->ID ); ?></pubDate>
      <description><?php echo esc_html( $excerpt ); ?></description>
    </item>
                <?php
            }
        }
    }
    ?>
  </channel>
</rss>

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
                if ( in_array( $path, array( '', 'que-es-cotizalo', 'precios', 'soporte', 'aviso-de-privacidad', 'terminos-y-condiciones' ), true ) ) {
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

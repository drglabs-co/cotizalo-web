<?php
/**
 * Dynamic XML Sitemap Generator for Cotízalo Theme
 */

if ( ! headers_sent() ) {
    header( 'Content-Type: application/xml; charset=UTF-8' );
    header( 'X-Robots-Tag: noindex, follow', true );
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo esc_url( home_url( '/' ) ); ?></loc>
    <lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
  </url>
  <url>
    <loc><?php echo esc_url( home_url( '/que-es-cotizalo/' ) ); ?></loc>
    <lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc><?php echo esc_url( home_url( '/precios/' ) ); ?></loc>
    <lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.9</priority>
  </url>
  <url>
    <loc><?php echo esc_url( home_url( '/soporte/' ) ); ?></loc>
    <lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
  </url>
  <url>
    <loc><?php echo esc_url( home_url( '/aviso-de-privacidad/' ) ); ?></loc>
    <lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>
  <url>
    <loc><?php echo esc_url( home_url( '/terminos-y-condiciones/' ) ); ?></loc>
    <lastmod><?php echo date( 'Y-m-d' ); ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>
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
              ?>
  <url>
    <loc><?php echo esc_url( $permalink ); ?></loc>
    <lastmod><?php echo get_the_modified_date( 'Y-m-d', $p->ID ); ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.7</priority>
  </url>
              <?php
          }
      }
  }
  ?>
</urlset>

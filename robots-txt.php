<?php
/**
 * Dynamic robots.txt Generator for Cotízalo Theme
 */
if (!headers_sent()) {
    header('Content-Type: text/plain; charset=utf-8');
    header('X-Robots-Tag: noindex, follow', true);
}

echo "User-agent: *\n";
echo "Allow: /\n\n";

echo "# Sitemaps\n";
echo "Sitemap: " . esc_url(home_url('/sitemap.xml')) . "\n";
echo "Sitemap: " . esc_url(home_url('/sitemap.rss')) . "\n\n";

echo "# Disallow admin and internal WP paths\n";
echo "Disallow: /wp-admin/\n";
echo "Disallow: /wp-includes/\n";
echo "Disallow: /wp-login.php\n";
echo "Disallow: /wp-signup.php\n";
echo "Disallow: /wp-cron.php\n";
echo "Disallow: /xmlrpc.php\n";

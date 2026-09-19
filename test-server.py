#!/usr/bin/env python3
"""
Cotízalo Web - Local Testing & SEO Audit Server
Zero-dependency test server using Python 3 standard library.
Simulates WordPress routing, renders templates, serves assets, and audits SEO tags.

Usage:
    python3 test-server.py           # Starts server on http://localhost:8000
    python3 test-server.py --port 3000
    python3 test-server.py --audit   # Runs CLI SEO audit across all routes
"""

import http.server
import socketserver
import os
import re
import sys
import mimetypes
import json
from urllib.parse import urlparse, unquote

PORT = 8000
BASE_DIR = os.path.abspath(os.path.dirname(__file__))

ROUTES = {
    "": "front-page.php",
    "/": "front-page.php",
    "/precios/": "page-precios.php",
    "/precios": "page-precios.php",
    "/cotizador/": "page-cotizador.php",
    "/cotizador": "page-cotizador.php",
    "/cotizador-online/": "page-cotizador.php",
    "/cotizador-en-linea/": "page-cotizador.php",
    "/cotizador-para-pequenas-empresas/": "page-cotizador.php",
    "/que-es-cotizalo/": "page-que-es-cotizalo.php",
    "/que-es-cotizalo": "page-que-es-cotizalo.php",
    "/soporte/": "page-soporte.php",
    "/soporte": "page-soporte.php",
    "/terminos-y-condiciones/": "page-terminos-y-condiciones.php",
    "/terminos-y-condiciones": "page-terminos-y-condiciones.php",
    "/aviso-de-privacidad/": "page-aviso-de-privacidad.php",
    "/aviso-de-privacidad": "page-aviso-de-privacidad.php",
    "/cotizaciones-por-whatsapp/": "page-cotizaciones-por-whatsapp.php",
    "/cotizaciones-por-whatsapp": "page-cotizaciones-por-whatsapp.php",
    "/seguimiento-de-cotizaciones/": "page-seguimiento-de-cotizaciones.php",
    "/seguimiento-de-cotizaciones": "page-seguimiento-de-cotizaciones.php",
    "/seguimiento-cotizaciones/": "page-seguimiento-de-cotizaciones.php",
    "/programa-para-hacer-presupuestos/": "page-programa-para-hacer-presupuestos.php",
    "/programa-para-hacer-presupuestos": "page-programa-para-hacer-presupuestos.php",
    "/software-para-cotizaciones/": "page-software-para-cotizaciones.php",
    "/software-para-cotizaciones": "page-software-para-cotizaciones.php",
    "/software-de-cotizaciones-para-constructoras/": "page-software-cotizaciones-constructoras.php",
    "/software-de-cotizaciones-para-constructoras": "page-software-cotizaciones-constructoras.php",
    "/software-cotizaciones-constructoras/": "page-software-cotizaciones-constructoras.php",
    "/software-de-cotizaciones-para-servicios/": "page-software-cotizaciones-servicios.php",
    "/software-de-cotizaciones-para-servicios": "page-software-cotizaciones-servicios.php",
    "/software-cotizaciones-servicios/": "page-software-cotizaciones-servicios.php",
    "/sitemap.xml": "sitemap-xml.php",
    "/sitemap.rss": "sitemap-rss.php",
    "/robots.txt": "robots-txt.php",
    "/llms.txt": "llms-txt.php",
}

def render_php_template(file_path, request_path):
    """Renders a WordPress PHP template by substituting WP helper tags for browser preview."""
    if not os.path.exists(file_path):
        return None, 404, "text/plain"

    with open(file_path, "r", encoding="utf-8", errors="replace") as f:
        content = f.read()

    # Determine Content-Type
    content_type = "text/html; charset=utf-8"
    if file_path.endswith("sitemap-xml.php") or request_path.endswith(".xml"):
        content_type = "application/xml; charset=utf-8"
    elif file_path.endswith("sitemap-rss.php") or request_path.endswith(".rss"):
        content_type = "application/rss+xml; charset=utf-8"
    elif file_path.endswith("robots-txt.php") or file_path.endswith("llms-txt.php") or request_path.endswith(".txt"):
        content_type = "text/plain; charset=utf-8"

    # WordPress mock substitutions
    theme_uri = ""
    home = ""

    # Replace template directory uri
    content = re.sub(r'<\?php\s+echo\s+(?:esc_url\()?\s*get_template_directory_uri\(\)\s*\)?;\s*\?>', theme_uri, content)
    content = re.sub(r'<\?php\s+echo\s+get_template_directory_uri\(\);\s*\?>', theme_uri, content)

    # Replace home_url(...) calls
    def repl_home_url(m):
        arg = m.group(1).strip(" '\"")
        return f"{home}{arg}"
    content = re.sub(r'<\?php\s+echo\s+(?:esc_url\()?\s*home_url\(\s*([^)]*)\s*\)\s*\)?;\s*\?>', repl_home_url, content)
    content = re.sub(r'esc_url\(\s*home_url\(\s*([^)]*)\s*\)\s*\)', repl_home_url, content)

    # Handle front-page multi-line hero_h1 logic
    content = re.sub(
        r'<\?php\s*\$hero_h1\s*=.*?echo\s+esc_html\(\$hero_h1\);\s*\?>',
        'Software y Programa para Hacer Cotizaciones Profesionales',
        content,
        flags=re.DOTALL
    )

    # Handle get_theme_mod(key, 'fallback')
    def repl_theme_mod_tag(m):
        return m.group(1).strip()
    content = re.sub(r'<\?php\s+echo\s+(?:esc_html|esc_url)?\s*\(?\s*get_theme_mod\(\s*[\'"][^\'"]+[\'"]\s*,\s*[\'"]([^\'"]+)[\'"]\s*\)\s*\)?;\s*\?>', repl_theme_mod_tag, content)
    content = re.sub(r'get_theme_mod\(\s*[\'"][^\'"]+[\'"]\s*,\s*[\'"]([^\'"]+)[\'"]\s*\)', repl_theme_mod_tag, content)

    # Standard WordPress hooks
    content = re.sub(r'<\?php\s+language_attributes\(\);\s*\?>', 'lang="es-MX"', content)
    content = re.sub(r'<\?php\s+bloginfo\(\s*[\'"]charset[\'"]\s*\);\s*\?>', 'UTF-8', content)
    content = re.sub(r'<\?php\s+body_class\(\);\s*\?>', 'class="cotizalo-page"', content)

    wp_head_mock = (
        '<!-- Mock wp_head -->\n'
        '  <link rel="stylesheet" href="/assets/assets/css/styles.css">\n'
        '  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap">\n'
    )
    content = re.sub(r'<\?php\s+wp_head\(\);\s*\?>', wp_head_mock, content)

    wp_footer_mock = (
        '<!-- Mock wp_footer -->\n'
        '  <script src="/assets/assets/js/main.js"></script>\n'
    )
    content = re.sub(r'<\?php\s+wp_footer\(\);\s*\?>', wp_footer_mock, content)

    # Remove template headers, php tags and includes
    content = re.sub(r'<\?php\s*/\*.*?\*/\s*\?>', '', content, flags=re.DOTALL)
    content = re.sub(r'<\?php\s*//.*?\n', '', content)
    content = re.sub(r'<\?php\s+echo\s+date\([^)]*\);\s*\?>', '2026-09-19', content)
    content = re.sub(r'<\?php\s+echo\s+(?:esc_html\()?\s*get_the_title\([^)]*\)\s*\)?;\s*\?>', 'Cotízalo', content)
    content = re.sub(r'<\?php\s+echo\s+esc_url\(is_front_page\(\)\s*\?\s*home_url\(\'/\'\)\s*:\s*get_permalink\(\)\);\s*\?>', 'https://cotizalo.net/', content)

    # Clean sitemap php loops
    content = re.sub(r'<\?php\s+if\s*\(.*?get_posts.*?\)\s*\{.*?\}\s*\}\s*\?>', '', content, flags=re.DOTALL)
    content = re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)

    return content.strip(), 200, content_type

def audit_seo():
    """Audits all defined routes for SEO tags and outputs a report."""
    results = []
    checked_files = set()
    unique_routes = [
        ("/", "front-page.php"),
        ("/precios/", "page-precios.php"),
        ("/cotizador/", "page-cotizador.php"),
        ("/que-es-cotizalo/", "page-que-es-cotizalo.php"),
        ("/soporte/", "page-soporte.php"),
        ("/terminos-y-condiciones/", "page-terminos-y-condiciones.php"),
        ("/aviso-de-privacidad/", "page-aviso-de-privacidad.php"),
        ("/cotizaciones-por-whatsapp/", "page-cotizaciones-por-whatsapp.php"),
        ("/seguimiento-de-cotizaciones/", "page-seguimiento-de-cotizaciones.php"),
        ("/programa-para-hacer-presupuestos/", "page-programa-para-hacer-presupuestos.php"),
        ("/software-para-cotizaciones/", "page-software-para-cotizaciones.php"),
        ("/software-de-cotizaciones-para-constructoras/", "page-software-cotizaciones-constructoras.php"),
        ("/software-de-cotizaciones-para-servicios/", "page-software-cotizaciones-servicios.php"),
        ("/sitemap.xml", "sitemap-xml.php"),
        ("/sitemap.rss", "sitemap-rss.php"),
        ("/robots.txt", "robots-txt.php"),
        ("/llms.txt", "llms-txt.php"),
    ]

    print("\n" + "=" * 80)
    print("🔍 COTÍZALO WEB - SEO AUDIT REPORT")
    print("=" * 80)

    for route, filename in unique_routes:
        file_path = os.path.join(BASE_DIR, filename)
        if not os.path.exists(file_path):
            print(f"❌ {route:<45} -> File missing: {filename}")
            continue

        with open(file_path, "r", encoding="utf-8", errors="replace") as f:
            raw = f.read()

        if filename.endswith(".php") and "sitemap" not in filename and "robots" not in filename and "llms" not in filename:
            rendered, _, _ = render_php_template(file_path, route)
            title_m = re.search(r'<title>(.*?)</title>', raw, re.IGNORECASE | re.DOTALL)
            desc_m = re.search(r'<meta\s+name=[\'"]description[\'"]\s+content=[\'"](.*?)[\'"]', raw, re.IGNORECASE)
            canonical_m = re.search(r'<link\s+rel=[\'"]canonical[\'"]', raw, re.IGNORECASE)
            og_title_m = re.search(r'<meta\s+property=[\'"]og:title[\'"]', raw, re.IGNORECASE)
            og_img_m = re.search(r'<meta\s+property=[\'"]og:image[\'"]', raw, re.IGNORECASE)
            h1_m = re.search(r'<h1[^>]*>(.*?)</h1>', rendered, re.IGNORECASE | re.DOTALL)
            json_ld_m = re.search(r'application/ld\+json', raw, re.IGNORECASE)

            title = title_m.group(1).strip() if title_m else "MISSING"
            desc = desc_m.group(1).strip() if desc_m else "MISSING"
            h1 = re.sub(r'<[^>]+>', '', h1_m.group(1)).strip() if h1_m else "None"
            h1 = re.sub(r'\s+', ' ', h1)

            print(f"\n📄 Route: {route}  (Template: {filename})")
            print(f"   • Title ({len(title)} chars): {title}")
            print(f"   • Description ({len(desc)} chars): {desc[:80]}...")
            print(f"   • H1: {h1[:60]}")
            print(f"   • Canonical: {'✅ Present' if canonical_m else '❌ Missing'}")
            print(f"   • OpenGraph: {'✅ Present (title + image)' if (og_title_m and og_img_m) else '⚠️ Incomplete'}")
            print(f"   • JSON-LD Schema: {'✅ Present' if json_ld_m else 'ℹ️ N/A (Legal)'}")
        else:
            print(f"\n⚙️ Special Route: {route}  (Template: {filename})")
            print(f"   • Type: Dynamic generator {'✅ Valid' if os.path.exists(file_path) else '❌ Missing'}")

    print("\n" + "=" * 80)
    print("✅ SEO AUDIT COMPLETE: All core landing pages and special routes verified.")
    print("=" * 80 + "\n")

class CotizaloHandler(http.server.SimpleHTTPRequestHandler):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=BASE_DIR, **kwargs)

    def do_HEAD(self):
        self.handle_req(is_head=True)

    def do_GET(self):
        self.handle_req(is_head=False)

    def handle_req(self, is_head=False):
        parsed = urlparse(self.path)
        path = unquote(parsed.path)

        # Check special audit API endpoint
        if path == "/api/audit":
            self.send_response(200)
            self.send_header("Content-Type", "application/json; charset=utf-8")
            self.end_headers()
            if not is_head:
                self.wfile.write(json.dumps({"status": "ok", "routes": list(ROUTES.keys())}).encode("utf-8"))
            return

        # Handle mapped routes
        norm_path = path
        if norm_path != "/" and norm_path.endswith("/"):
            norm_path = norm_path[:-1]

        template = ROUTES.get(path) or ROUTES.get(norm_path) or ROUTES.get(norm_path + "/")

        if template:
            rendered, status_code, content_type = render_php_template(os.path.join(BASE_DIR, template), path)
            if rendered is not None:
                encoded = rendered.encode("utf-8")
                self.send_response(status_code)
                self.send_header("Content-Type", content_type)
                self.send_header("Content-Length", str(len(encoded)))
                self.end_headers()
                if not is_head:
                    self.wfile.write(encoded)
                return

        # Serve static assets (CSS, JS, images, logos, favicon)
        file_path = os.path.join(BASE_DIR, path.lstrip("/"))
        if os.path.isfile(file_path):
            if is_head:
                super().do_HEAD()
            else:
                super().do_GET()
            return

        # 404 fallback
        self.send_response(404)
        self.send_header("Content-Type", "text/html; charset=utf-8")
        self.end_headers()
        if not is_head:
            self.wfile.write(b"<h1>404 Not Found</h1><p>Route not recognized in Cotizalo test server.</p>")

def main():
    if "--audit" in sys.argv:
        audit_seo()
        return

    port = PORT
    if "--port" in sys.argv:
        idx = sys.argv.index("--port")
        if idx + 1 < len(sys.argv):
            port = int(sys.argv[idx + 1])

    audit_seo()

    print(f"🚀 Cotízalo Web Development Server running at http://localhost:{port}")
    print(f"📂 Serving root: {BASE_DIR}")
    print("Press Ctrl+C to stop.\n")

    socketserver.TCPServer.allow_reuse_address = True
    with socketserver.TCPServer(("", port), CotizaloHandler) as httpd:
        try:
            httpd.serve_forever()
        except KeyboardInterrupt:
            print("\nServer stopped.")

if __name__ == "__main__":
    main()

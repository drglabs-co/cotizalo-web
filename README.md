# cotizalo-web 🌐

Sitio de marketing y landing page de **[Cotizalo](https://cotizalo.net)** — la plataforma SaaS de cotizaciones para microempresas y profesionistas en México.

Este repositorio contiene exclusivamente el **Tema Personalizado de WordPress (`cotizalo`)**, estructurado en la raíz (`/`) del repositorio para desplegarse directamente en la carpeta:
```
public_html/wp-content/themes/cotizalo
```
mediante la integración Git de **Hostinger**.

---

## 🚀 ¿Por qué se aisló el tema de WordPress Core?

Anteriormente, el repositorio rastreaba toda la instalación de WordPress (`wp-admin/`, `wp-includes/`, `wp-*.php`, `wp-config.php`, `wp-content/plugins/`, etc.) en `public_html`. Esto generaba los siguientes problemas:

1. **Conflictos con actualizaciones automáticas de WordPress**: Cada vez que WordPress o Hostinger actualizaba el core (ej. WP 6.6 → 6.7) o plugins, los archivos del servidor cambiaban localmente, bloqueando `git pull` con errores de merge.
2. **Riesgo de seguridad con credenciales**: `wp-config.php` contenía contraseñas de base de datos y llaves salt rastreadas por Git.
3. **Despliegues lentos y pesados**: Git debía sincronizar miles de archivos del core de WordPress en cada cambio.

### ✅ Nueva Arquitectura (Tema Aislado e Independiente)
- El repositorio **solo contiene los archivos del tema `cotizalo`** en su raíz (`/`).
- En Hostinger, WordPress core y sus plugins se mantienen administrados independientemente en `public_html/`.
- Git únicamente actualiza y despliega la carpeta `wp-content/themes/cotizalo`.
- **Cero conflictos con actualizaciones de WordPress** en el servidor.

---

## 🗂️ Estructura del Repositorio

Todos los archivos del tema residen en la raíz del repositorio:

```
cotizalo-web/ (raíz del repositorio Git)
│
├── 🎨 Metadatos y Configuración del Tema
│   ├── style.css                            # Metadatos del tema requeridos por WordPress (v1.0.1)
│   ├── functions.php                        # Configuración, encolado de estilos/JS, Customizer,
│   │                                        # enrutamiento virtual sin DB, sitemaps y robots.txt
│   ├── index.php                            # Template fallback del tema
│   ├── screenshot.png / screenshot.jpg      # Capturas de preview del tema en WP Admin
│   └── favicon.ico                          # Favicon ICO raíz del tema
│
├── 📄 Templates de Páginas (Landing Pages & Legales)
│   ├── front-page.php                       # ✅ Home / Landing principal (cotizalo.net/)
│   ├── page-precios.php                     # ✅ Planes y precios con toggle (cotizalo.net/precios/)
│   ├── page-cotizador.php                   # ✅ Landing cotizador online (cotizalo.net/cotizador/)
│   ├── page-cotizaciones-por-whatsapp.php   # ✅ Cotizaciones WhatsApp (cotizalo.net/cotizaciones-por-whatsapp/)
│   ├── page-que-es-cotizalo.php             # ✅ Qué es Cotízalo (cotizalo.net/que-es-cotizalo/)
│   ├── page-soporte.php                     # ✅ Soporte técnico y contacto (cotizalo.net/soporte/)
│   ├── page-programa-para-hacer-presupuestos.php # ✅ Landing presupuestos
│   ├── page-software-para-cotizaciones.php  # ✅ Landing software para cotizaciones
│   ├── page-software-cotizaciones-constructoras.php # ✅ Landing para constructoras
│   ├── page-software-cotizaciones-servicios.php # ✅ Landing para empresas de servicios
│   ├── page-seguimiento-de-cotizaciones.php # ✅ Landing seguimiento de propuestas
│   ├── page-aviso-de-privacidad.php         # ✅ Aviso de Privacidad
│   └── page-terminos-y-condiciones.php      # ✅ Términos y Condiciones
│
├── 🤖 Generadores Dinámicos de SEO y Crawlers
│   ├── sitemap-xml.php                      # Generador dinámico de /sitemap.xml (XML Sitemap)
│   ├── sitemap-rss.php                      # Generador dinámico de /sitemap.rss (RSS Sitemap)
│   ├── robots-txt.php                       # Generador dinámico de /robots.txt
│   └── llms-txt.php                         # Generador dinámico de /llms.txt (para agentes IA)
│
├── 🖼️ Assets (Imágenes, Logos, Estilos y Scripts)
│   └── assets/
│       └── assets/                          # ⚠️ Doble nivel 'assets/assets/' preservado intencionalmente
│           ├── css/
│           │   └── styles.css               # Sistema de diseño completo (CSS modular y responsivo)
│           ├── js/
│           │   └── main.js                  # Lógica JS: header sticky, observer de animaciones
│           ├── logos/
│           │   ├── ISOTIPO/
│           │   │   ├── Cotizalo-5.png       # ⭐ Isotipo oficial (usado en favicon, apple-touch-icon, JSON-LD)
│           │   │   └── Cotizalo - ISOTIPO-8.png
│           │   └── LOGOTIPO3/
│           │       ├── Cotizalo-8.png       # ⭐ Logotipo horizontal oficial (Navbar y Footer)
│           │       └── Cotizalo-8-original.png
│           └── og-social.jpg                # Imagen OpenGraph para previsualizaciones sociales (1200x630)
│
├── 🧪 Herramientas de Desarrollo y Testing Local
│   ├── test-server.py                       # Servidor local sin dependencias (Python 3) con auditoría SEO
│   └── .gitignore                           # Exclusiones de Git limpias para tema
└── 📖 Documentación
    └── README.md                            # Guía completa del proyecto y despliegue
```

---

## 🖼️ Gestión de Imágenes y Logos

Todos los archivos gráficos y logotipos de la marca se encuentran completamente **preservados y optimizados** en el repositorio:

| Asset | Ruta en el repositorio | Uso en el sitio |
|---|---|---|
| **Logotipo Horizontal** | `assets/assets/logos/LOGOTIPO3/Cotizalo-8.png` | Barra de navegación (`header`) y pie de página (`footer`) en todos los templates. |
| **Isotipo / Favicon PNG** | `assets/assets/logos/ISOTIPO/Cotizalo-5.png` | Icono oficial del navegador, `apple-touch-icon`, `shortcut icon` y logo en Schema JSON-LD. |
| **Isotipo Alternativo** | `assets/assets/logos/ISOTIPO/Cotizalo - ISOTIPO-8.png` | Variante de isotipo para insignias y detalles de diseño. |
| **OpenGraph Social** | `assets/assets/og-social.jpg` | Imagen compartida en redes sociales, Facebook, LinkedIn y WhatsApp (`og:image`, 1200x630 px). |
| **Favicon ICO** | `favicon.ico` | Favicon en formato binario ICO servido para peticiones directas de navegadores antiguos a `/favicon.ico`. |
| **Screenshots de Tema** | `screenshot.png` y `screenshot.jpg` | Previsualización visual del tema en el panel de control de WordPress (`wp-admin/themes.php`). |

> ⚠️ **Nota sobre la carpeta de assets:** Se mantiene la estructura `assets/assets/` para garantizar compatibilidad total con todas las referencias relativas y funciones `get_template_directory_uri()` en el código.

---

## ⚙️ Implementación en Hostinger con Git Integration

Para desplegar esta nueva versión del sitio en Hostinger mediante Git:

### Paso 1: Acceder al panel de Hostinger
1. Inicia sesión en **[Hostinger hPanel](https://hpanel.hostinger.com)**.
2. Selecciona el dominio `cotizalo.net`.
3. En el menú lateral, ve a **Avanzado** → **Git**.

### Paso 2: Configurar el despliegue del repositorio
Si ya tenías un repositorio configurado en la raíz (`public_html`), elimínalo del gestor Git de Hostinger. Luego, crea un nuevo despliegue con los siguientes parámetros:

| Campo | Valor a ingresar |
|---|---|
| **Repository** | `git@github.com:drg339orig/cotizalo-web.git` *(o URL HTTPS si usas token)* |
| **Branch** | `updt-scafolding` *(o `main` cuando se fusione)* |
| **Install Path** | `public_html/wp-content/themes/cotizalo` |

> ⚠️ **CRÍTICO:** Asegúrate de escribir exactamente `public_html/wp-content/themes/cotizalo` en **Install Path**. De esta manera, el tema se instalará dentro del directorio de temas de WordPress sin sobreescribir los archivos del core ni la configuración `wp-config.php`.

### Paso 3: Activar el tema en WordPress (si es necesario)
1. Ingresa a `https://cotizalo.net/wp-admin/`.
2. Ve a **Apariencia** → **Temas**.
3. Verifica que el tema **Cotízalo Custom Theme** esté activo.

### Paso 4: Despliegue automático (Webhook opcional)
Hostinger te proporcionará una URL de Webhook en la sección de Git. Puedes añadirla en tu repositorio de GitHub:
- En GitHub: **Settings** → **Webhooks** → **Add webhook**.
- Pega la URL de Hostinger y selecciona el evento `push`.
- A partir de ese momento, cada `git push` a la rama configurada desplegará automáticamente los cambios en el sitio en vivo.

### Paso 5: Purgar la caché tras el despliegue
Para asegurar que los cambios se reflejen de inmediato sin esperar la expiración de la caché LiteSpeed:
- Visita en tu navegador: `https://cotizalo.net/?cotizalo_purge_cache=1`

---

## 🧪 Cómo Probar el Sitio Localmente

El proyecto incluye un entorno de pruebas local de **cero dependencias externas** que funciona de inmediato en macOS con Python 3.

### Método 1: Servidor Local con `test-server.py` (Recomendado)

En tu terminal, colócate en la raíz del proyecto y ejecuta:

```bash
# Iniciar el servidor local en el puerto 8000 (o el puerto predeterminado)
python3 test-server.py

# O especificar un puerto personalizado (ej. 8085):
python3 test-server.py --port 8085
```

Abre tu navegador en:
- **Home**: [http://localhost:8000/](http://localhost:8000/)
- **Precios**: [http://localhost:8000/precios/](http://localhost:8000/precios/)
- **Cotizador**: [http://localhost:8000/cotizador/](http://localhost:8000/cotizador/)
- **Cotizaciones WhatsApp**: [http://localhost:8000/cotizaciones-por-whatsapp/](http://localhost:8000/cotizaciones-por-whatsapp/)
- **Soporte**: [http://localhost:8000/soporte/](http://localhost:8000/soporte/)
- **Sitemap XML**: [http://localhost:8000/sitemap.xml](http://localhost:8000/sitemap.xml)
- **Robots TXT**: [http://localhost:8000/robots.txt](http://localhost:8000/robots.txt)
- **LLMs TXT**: [http://localhost:8000/llms.txt](http://localhost:8000/llms.txt)

### Método 2: Auditoría Automática de SEO vía CLI

Puedes auditar instantáneamente todas las URLs, títulos, descripciones, etiquetas canónicas, OpenGraph y marcado de datos estructurados:

```bash
python3 test-server.py --audit
```

Salida esperada:
```
================================================================================
🔍 COTÍZALO WEB - SEO AUDIT REPORT
================================================================================
📄 Route: /  (Template: front-page.php)
   • Title (52 chars): Programa para Hacer Cotizaciones en Línea | Cotízalo
   • Description (166 chars): Cotízalo es el programa para hacer cotizaciones y presupuestos profesionales...
   • H1: Software y Programa para Hacer Cotizaciones Profesionales
   • Canonical: ✅ Present
   • OpenGraph: ✅ Present (title + image)
   • JSON-LD Schema: ✅ Present
...
================================================================================
✅ SEO AUDIT COMPLETE: All core landing pages and special routes verified.
================================================================================
```

### Método 3: En un entorno WordPress local completo (LocalWP / Docker / XAMPP)

Si deseas probar dentro de una instalación real de WordPress con base de datos:
1. Clona o crea un symlink de este repositorio en la carpeta de temas de tu WordPress local:
   ```bash
   ln -s "/ruta/a/cotizalo-web" "/ruta/a/wordpress/wp-content/themes/cotizalo"
   ```
2. Activa el tema desde el administrador de WordPress (`Apariencia` → `Temas`).
3. Todas las URLs (`/precios/`, `/cotizador/`, etc.) funcionarán automáticamente gracias a la interceptación en `functions.php`, sin necesidad de crear páginas en la base de datos.

---

## 🎯 Inventario de Rutas y Configuración SEO

Todas las páginas han sido verificadas y cuentan con su configuración SEO completa:

| Ruta | Template PHP | Título SEO | H1 Semántico | Meta Descripción | Canonical & OG | Schema JSON-LD |
|---|---|---|---|---|:---:|:---:|
| `/` | `front-page.php` | Programa para Hacer Cotizaciones en Línea \| Cotízalo | Software y Programa para Hacer Cotizaciones Profesionales | ✅ 166 caracteres | ✅ | ✅ WebSite, Org, SoftwareApp |
| `/precios/` | `page-precios.php` | Planes y Precios del Sistema de Cotizaciones \| Cotízalo | Precios simples y transparentes | ✅ 158 caracteres | ✅ | ✅ SoftwareApplication |
| `/cotizador/` | `page-cotizador.php` | Cotizador en Línea — Crea y Envía Cotizaciones Profesionales \| Cotízalo | Cotizador en Línea Ágil para Negocios y Profesionales | ✅ 176 caracteres | ✅ | ✅ Product & App |
| `/que-es-cotizalo/` | `page-que-es-cotizalo.php` | ¿Qué es Cotízalo? \| Digitaliza tus Cotizaciones y Presupuestos | ¿Qué es Cotízalo? | ✅ 163 caracteres | ✅ | ✅ About & FAQ |
| `/soporte/` | `page-soporte.php` | Soporte Técnico y Contacto \| Cotízalo México | Soporte Técnico y Contacto | ✅ 167 caracteres | ✅ | ✅ ContactPoint |
| `/cotizaciones-por-whatsapp/` | `page-cotizaciones-por-whatsapp.php` | Cotizaciones por WhatsApp en PDF y Enlace \| Cotízalo | Envía y Cierra Cotizaciones por WhatsApp en Minutos | ✅ 183 caracteres | ✅ | ✅ SoftwareApplication |
| `/seguimiento-de-cotizaciones/` | `page-seguimiento-de-cotizaciones.php` | Sistema de Seguimiento de Cotizaciones para Empresas \| Cotízalo | Sistema de seguimiento de cotizaciones para pequeñas empresas | ✅ 178 caracteres | ✅ | ✅ SoftwareApplication |
| `/programa-para-hacer-presupuestos/` | `page-programa-para-hacer-presupuestos.php` | Programa para Hacer Presupuestos Profesionales \| Cotízalo | El programa para hacer presupuestos más fácil para tu empresa | ✅ 180 caracteres | ✅ | ✅ SoftwareApplication |
| `/software-para-cotizaciones/` | `page-software-para-cotizaciones.php` | Software de Cotizaciones y Presupuestos para PyMEs \| Cotízalo México | El Software de Cotizaciones que Reemplaza a Excel | ✅ 191 caracteres | ✅ | ✅ SoftwareApplication |
| `/software-de-cotizaciones-para-constructoras/` | `page-software-cotizaciones-constructoras.php` | Software de Cotizaciones para Constructoras y Contratistas \| Cotízalo | Software de cotizaciones diseñado para constructoras y contratistas | ✅ 189 caracteres | ✅ | ✅ SoftwareApplication |
| `/software-de-cotizaciones-para-servicios/` | `page-software-cotizaciones-servicios.php` | Software de Cotizaciones para Empresas de Servicios \| Cotízalo | El software de cotizaciones ideal para empresas de servicios | ✅ 185 caracteres | ✅ | ✅ SoftwareApplication |
| `/aviso-de-privacidad/` | `page-aviso-de-privacidad.php` | Aviso de Privacidad \| Cotízalo | Aviso de Privacidad | ✅ 134 caracteres | ✅ | Legal Policy |
| `/terminos-y-condiciones/` | `page-terminos-y-condiciones.php` | Términos y Condiciones de Uso \| Cotízalo | Términos y Condiciones | ✅ 133 caracteres | ✅ | Legal Terms |
| `/sitemap.xml` | `sitemap-xml.php` | XML Sitemap dinámico con prioridades y frecuencias | — | — | ✅ | XML sitemaps protocol |
| `/sitemap.rss` | `sitemap-rss.php` | RSS 2.0 Sitemap con timestamps para Google News / RSS | — | — | ✅ | RSS 2.0 protocol |
| `/robots.txt` | `robots-txt.php` | Reglas de rastreo y punteros a los dos sitemaps | — | — | ✅ | Robots.txt standard |
| `/llms.txt` | `llms-txt.php` | Índice optimizado para modelos de lenguaje e IA | — | — | ✅ | LLMs standard |

---

## 🔗 Enlaces Importantes

- **Sitio Público**: [https://cotizalo.net](https://cotizalo.net)
- **Plataforma SaaS / App**: [https://app.cotizalo.net](https://app.cotizalo.net)
- **Registro de Usuarios**: [https://app.cotizalo.net/signup](https://app.cotizalo.net/signup)
- **Iniciar Sesión**: [https://app.cotizalo.net/login](https://app.cotizalo.net/login)
- **Admin de WordPress**: [https://cotizalo.net/wp-admin/](https://cotizalo.net/wp-admin/)
- **Purgar Caché**: `https://cotizalo.net/?cotizalo_purge_cache=1`

---

## 👤 Autor

**David Ramirez** — PixelZero.mx  
© 2026 Todos los derechos reservados.

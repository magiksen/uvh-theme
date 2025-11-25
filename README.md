# UVH Theme - Tema WordPress para Universidad Venezolana de los Hidrocarburos

Tema oficial de WordPress para la Universidad Venezolana de los Hidrocarburos (UVH), diseñado con los colores institucionales y estructura optimizada para destacar la oferta académica, investigación y logros de la universidad.

## 🎨 Características

### Diseño Institucional
- **Colores oficiales del Manual de Marca**:
  - Rojo Carmesí: `#A70336`
  - Azul Marino: `#273376`
  - Amarillo Oro: `#FFC907`
- **Tipografía oficial**: Georama (Google Fonts)
- **Logo con gradiente institucional**

### Secciones de la Página Principal
1. **Hero** - Mensaje principal con imagen de fondo
2. **Sobre Nosotros** - Historia y filosofía institucional
3. **Oferta Académica** - Programas de pregrado, postgrado, investigación y extensión
4. **Investigación e Innovación** - Proyectos y colaboraciones
5. **Proceso de Admisión** - 4 pasos claros con CTA
6. **Estadísticas** - Logros y cifras destacadas
7. **CTA** - Llamado a la acción
8. **Testimonios** - Historias de egresados exitosos
9. **Noticias** - Últimas publicaciones del blog
10. **Contacto** - Formulario de contacto

### Características Técnicas
- ✅ Responsive design (móvil, tablet, desktop)
- ✅ Optimizado para SEO
- ✅ Accesibilidad WCAG 2.1
- ✅ Compatible con WordPress 6.0+
- ✅ PHP 7.4+
- ✅ Soporte para custom logo
- ✅ Menús de navegación personalizables
- ✅ 4 áreas de widgets en footer
- ✅ Sidebar configurable
- ✅ Theme.json para Full Site Editing
- ✅ Customizer con opciones de contacto y redes sociales

## 📁 Estructura del Tema

```
uvh-theme/
├── assets/
│   ├── css/
│   │   └── custom.css              # Estilos personalizados
│   ├── js/
│   │   └── main.js                 # JavaScript principal
│   └── img/                        # Imágenes y SVG del tema
│       ├── logo.svg
│       ├── hero/
│       ├── leaders/                # Imágenes de líderes
│       ├── programs/
│       ├── research/
│       ├── testimonials/
│       └── news/
├── inc/
│   ├── template-tags.php           # Funciones de plantilla
│   ├── customizer.php              # Configuración del Customizer
│   ├── hero-slider.php             # CPT Hero Slides
│   └── academic-programs.php       # CPT Programas Académicos
├── template-parts/
│   ├── content.php                 # Template para posts
│   ├── content-none.php            # Template "sin resultados"
│   ├── section-about.php           # Sección Sobre Nosotros
│   ├── section-programs-dynamic.php # Sección Programas (dinámico)
│   ├── section-hero-slider.php     # Hero Slider dinámico
│   ├── section-research.php        # Sección Investigación
│   ├── section-admission.php       # Sección Admisión
│   ├── section-stats.php           # Sección Estadísticas
│   ├── section-cta.php             # Sección CTA
│   ├── section-testimonials.php    # Sección Testimonios
│   ├── section-news.php            # Sección Noticias
│   ├── section-contact.php         # Sección Contacto
│   └── curriculum-geofisica.php    # Malla curricular Geofísica
├── page-sobre-nosotros.php         # Página Sobre Nosotros
├── page-oferta-academica.php       # Página Oferta Académica
├── page-estudios-internacionales.php # Página Cooperación Internacional
├── page-formulario-admision.php    # Página Formulario de Admisión
├── functions.php                   # Funciones del tema
├── header.php                      # Cabecera del sitio
├── footer.php                      # Pie de página
├── index.php                       # Template principal
├── front-page.php                  # Página de inicio
├── single.php                      # Template para posts
├── page.php                        # Template para páginas
├── archive.php                     # Template para archivos
├── style.css                       # Hoja de estilos principal (v1.3.0)
├── theme.json                      # Configuración del tema (FSE)
├── screenshot.png                  # Captura del tema
└── README.md                       # Este archivo
```

## 🚀 Instalación

### Método 1: Desde el Panel de WordPress
1. Ve a **Apariencia > Temas > Añadir nuevo**
2. Haz clic en **Subir tema**
3. Selecciona el archivo ZIP del tema
4. Haz clic en **Instalar ahora**
5. Activa el tema

### Método 2: Manual (FTP)
1. Descomprime el archivo del tema
2. Sube la carpeta `uvh-theme` a `/wp-content/themes/`
3. Ve a **Apariencia > Temas** en WordPress
4. Activa el tema UVH

### Método 3: Local (Desarrollo)
El tema ya está instalado en:
```
c:\Users\Windows 11\Local Sites\uvh\app\public\wp-content\themes\uvh-theme
```

## ⚙️ Configuración

### 1. Configuración Inicial

#### Crear Página de Inicio
1. Ve a **Páginas > Añadir nueva**
2. Título: "Inicio" (puedes dejarlo en blanco)
3. Publica la página
4. Ve a **Ajustes > Lectura**
5. Selecciona "Una página estática"
6. Elige la página "Inicio" como página principal

#### Configurar Menús
1. Ve a **Apariencia > Menús**
2. Crea un nuevo menú llamado "Menú Principal"
3. Añade los enlaces:
   - Inicio
   - Sobre Nosotros (URL personalizada: `#nosotros`)
   - Oferta Académica (URL personalizada: `#oferta-academica`)
   - Investigación (URL personalizada: `#investigacion`)
   - Admisión (URL personalizada: `#admision`)
   - Noticias (página o categoría)
4. Asigna el menú a la ubicación "Menú Principal"

#### Configurar Logo
1. Ve a **Apariencia > Personalizar > Identidad del sitio**
2. Sube el logo oficial de la UVH
3. Ajusta el tamaño si es necesario

### 2. Personalización del Tema

#### Información de Contacto
Ve a **Apariencia > Personalizar > Configuración UVH**:
- **Teléfono de Contacto**: +58 212 XXX-XXXX
- **Email de Contacto**: info@uvh.edu.ve
- **Dirección**: Caracas, Venezuela

#### Redes Sociales
Ve a **Apariencia > Personalizar > Redes Sociales**:
- Facebook URL
- Twitter URL
- Instagram URL
- LinkedIn URL
- YouTube URL

### 3. Configurar Widgets del Footer

Ve a **Apariencia > Widgets** y configura las 4 áreas del footer:

#### Footer 1 - Enlaces Rápidos
- Widget: Menú de navegación
- Título: "Enlaces Rápidos"
- Menú: Enlaces principales

#### Footer 2 - Servicios
- Widget: Menú de navegación o Lista personalizada
- Título: "Servicios"
- Enlaces a servicios universitarios

#### Footer 3 - Contacto
- Widget: Texto
- Título: "Contacto"
- Contenido: Información de contacto

#### Footer 4 - Newsletter (Opcional)
- Widget: Formulario de suscripción
- Título: "Mantente Informado"

### 4. Crear Contenido

#### Publicar Noticias
1. Ve a **Entradas > Añadir nueva**
2. Escribe el título y contenido
3. Añade una imagen destacada (recomendado: 600x400px)
4. Asigna una categoría
5. Publica

Las últimas 3 noticias aparecerán automáticamente en la página de inicio.

#### Crear Páginas Adicionales
- Página de Noticias (Blog)
- Página de Contacto
- Páginas de programas académicos
- Página de Admisión con formulario

## 🎨 Personalización Avanzada

### Modificar Colores
Edita `style.css` o `assets/css/custom.css`:

```css
:root {
    --primary-color: #A70336;        /* Rojo Carmesí */
    --secondary-color: #273376;      /* Azul Marino */
    --accent-color: #FFC907;         /* Amarillo Oro */
}
```

### Modificar Secciones de la Página Principal
Edita los archivos en `template-parts/`:
- `section-about.php` - Sobre Nosotros
- `section-programs.php` - Oferta Académica
- `section-research.php` - Investigación
- etc.

### Añadir Funcionalidades
Edita `functions.php` para añadir:
- Custom Post Types
- Taxonomías personalizadas
- Shortcodes
- Hooks personalizados

## 📱 Responsive Design

El tema está optimizado para:
- **Móviles**: < 640px
- **Tablets**: 640px - 968px
- **Desktop**: > 968px

## 🔌 Plugins Recomendados

- **Contact Form 7**: Para formularios de contacto avanzados
- **Yoast SEO**: Optimización SEO
- **WP Super Cache**: Caché para mejor rendimiento
- **Wordfence Security**: Seguridad
- **Advanced Custom Fields**: Campos personalizados
- **WPForms**: Formularios avanzados

## 🐛 Solución de Problemas

### El tema no se activa
- Verifica que estés usando WordPress 6.0 o superior
- Verifica que tu servidor tenga PHP 7.4 o superior

### Las imágenes no se muestran
- Verifica que la carpeta `assets/img/` tenga los permisos correctos
- Asegúrate de que las imágenes SVG estén en su lugar

### Los estilos no se aplican
- Limpia la caché del navegador
- Limpia la caché de WordPress (si usas plugin de caché)
- Verifica que `custom.css` se esté cargando correctamente

### El menú no funciona en móvil
- Verifica que `main.js` se esté cargando
- Revisa la consola del navegador para errores de JavaScript

## 📝 Changelog

### Versión 1.4.0 (2025-11-25)

#### 📚 Mallas Curriculares Completas
- Crear `curriculum-gestion-pozos.php` - PNF Gestión Integral de Pozos de Hidrocarburos
- Crear `curriculum-petroquimica.php` - PNF Petroquímica
- Crear `curriculum-gas.php` - PNF Producción y Procesamiento de Gas
- Crear `curriculum-yacimientos.php` - PNF Yacimientos de Hidrocarburos
- Todas las mallas incluyen: Trayecto Inicial + Trayectos I, II, III y IV
- Leyenda de siglas integrada en cada malla curricular
- Colores diferenciados por tipo de materia (amarillo, verde, naranja, azul)

#### 🎨 Estilos CSS
- Agregar estilo `.row-green` para materias específicas de carrera

#### 📁 Archivos Nuevos
- `template-parts/curriculum-gestion-pozos.php`
- `template-parts/curriculum-petroquimica.php`
- `template-parts/curriculum-gas.php`
- `template-parts/curriculum-yacimientos.php`

---

### Versión 1.3.0 (2025-11-24)

#### 🌐 Nueva Página: Cooperación Nacional e Internacional
- Creación de `page-estudios-internacionales.php` con secciones completas
- Alianzas nacionales: PDVSA, Intevep, Ministerio de Economía y Finanzas
- Convenios internacionales activos: Universidad Gúbkin (Rusia), Universidad Denis Sassou-Nguesso (Congo)
- Alianzas en proceso: Universidad Rey Fahd (Arabia Saudita), MGRI y Ekaterina II (Rusia)
- Sección de impacto y resultados con tarjetas informativas
- CTA con email de contacto para cooperación

#### 🎓 Programas Académicos Dinámicos
- Custom Post Type `academic_program` para gestionar programas desde el admin
- Meta boxes para: estado activo, subtítulo, icono emoji, orden, características (6), URL del botón
- Columnas personalizadas en el listado del admin (Estado, Icono, Orden)
- Template dinámico `section-programs-dynamic.php` que consulta la base de datos
- Sistema de iconos con emojis categorizados (académicos, científicos, energéticos, etc.)
- Subsección de Estudios Internacionales integrada en la sección de programas

#### 🖼️ Hero Slider Mejorado
- Nuevo slide de noticias integrado al slider principal
- Campo checkbox para activar/desactivar slides individualmente
- Columna de estado visual en el admin (Activo/Inactivo)
- Filtrado automático de slides inactivos en el frontend

#### 📚 Página de Oferta Académica
- Leyenda de siglas para mallas curriculares (Sem, HTA, HTI, HTE, UC, HTA/Sem)
- Leyenda integrada dentro de cada malla curricular expandible
- Actualización de títulos de programas (TSU/Ingeniero)

#### 🎨 Mejoras Visuales - Fondos de Secciones
- **About**: Línea gradiente superior con colores institucionales (rojo→amarillo→azul)
- **Programs**: Gradiente gris→blanco + línea decorativa roja inferior
- **Admission**: Nueva clase `.admission-home` con gradiente sutil azul↔rojo
- **Research**: Gradiente con toques de marca + círculo decorativo
- **Testimonials**: Gradiente ondulado + comilla decorativa gigante de fondo
- **News**: Gradiente + círculos decorativos sutiles con colores de marca
- **Section Headers**: Línea decorativa debajo de títulos con gradiente rojo→amarillo

#### 🔗 Footer Actualizado
- Enlace a Cooperación Nacional e Internacional
- Enlaces actualizados a páginas internas (/oferta-academica, /formulario-admision)

#### 📁 Archivos Nuevos
- `page-estudios-internacionales.php` - Template de cooperación internacional
- `inc/academic-programs.php` - CPT de programas académicos
- `template-parts/section-programs-dynamic.php` - Template dinámico de programas
- `migration-academic-programs.sql` - Script SQL de migración

---

### Versión 1.2.0 (2025-11-23)
- ✅ Página "Sobre Nosotros" con historia, misión, visión y valores
- ✅ Sección de citas de líderes con imágenes
- ✅ Integración de redes sociales en footer y sección "Conoce Más"
- ✅ Iconos SVG para redes sociales (Facebook, Instagram, Twitter/X, YouTube, TikTok)

### Versión 1.1.0 (2025-11-22)
- ✅ Redes sociales configurables desde el Customizer
- ✅ Iconos de redes sociales en el footer
- ✅ Mejoras en la sección de contacto

### Versión 1.0.0 (2025-11-11)
- ✅ Lanzamiento inicial del tema
- ✅ Implementación de colores oficiales del Manual de Marca
- ✅ Tipografía Georama
- ✅ Estructura de 10 secciones en página principal
- ✅ Responsive design completo
- ✅ Integración con WordPress Customizer
- ✅ Soporte para menús y widgets
- ✅ Template parts modulares
- ✅ Theme.json para Full Site Editing

## 👥 Créditos

- **Desarrollado para**: Universidad Venezolana de los Hidrocarburos
- **Basado en**: Plantilla HTML UVH
- **Tipografía**: Georama (Google Fonts)
- **Versión**: 1.3.0
- **Última actualización**: 24 de Noviembre 2025

## 📄 Licencia

Este tema está licenciado bajo GNU General Public License v2 o posterior.

## 🆘 Soporte

Para soporte técnico o preguntas:
- **Email**: info@uvh.edu.ve
- **Teléfono**: +58 212 XXX-XXXX

---

**Universidad Venezolana de los Hidrocarburos**  
*Formando profesionales de excelencia para el sector energético venezolano*

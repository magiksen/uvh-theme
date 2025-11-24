# Lucide Icons - Documentación

## ¿Qué es Lucide Icons?

**Lucide** es una librería de iconos SVG de código abierto, moderna y ligera. Es un fork mejorado de Feather Icons con más iconos y mejor mantenimiento.

### Características:
- ✅ **Código abierto** y gratuito
- ✅ **Ligero** - Solo SVG, sin JavaScript necesario
- ✅ **Consistente** - Todos los iconos siguen el mismo estilo
- ✅ **Personalizable** - Fácil de modificar tamaño, color y grosor
- ✅ **Accesible** - Diseñados con accesibilidad en mente
- ✅ **1000+ iconos** disponibles

### Sitio oficial:
🔗 https://lucide.dev/

---

## Iconos Implementados en UVH Theme

### Redes Sociales (Footer)

#### Facebook
```html
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
</svg>
```

#### Twitter/X
```html
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M4 4l11.733 16h4.267l-11.733 -16z"/>
    <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"/>
</svg>
```

#### Instagram
```html
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
</svg>
```

#### LinkedIn
```html
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
    <rect width="4" height="12" x="2" y="9"/>
    <circle cx="4" cy="4" r="2"/>
</svg>
```

#### YouTube
```html
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/>
    <path d="m10 15 5-3-5-3z"/>
</svg>
```

#### TikTok
```html
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/>
</svg>
```

---

## Cómo Usar Lucide Icons

### Método 1: Copiar SVG directamente (Usado en este proyecto)

1. Visita https://lucide.dev/icons/
2. Busca el icono que necesitas
3. Copia el código SVG
4. Pégalo en tu HTML/PHP

**Ventajas:**
- ✅ Sin dependencias externas
- ✅ Control total sobre el código
- ✅ Mejor rendimiento (no carga librería completa)

### Método 2: Usar CDN (No recomendado para producción)

```html
<!-- En el <head> -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- En el HTML -->
<i data-lucide="facebook"></i>

<!-- Al final del body -->
<script>
  lucide.createIcons();
</script>
```

### Método 3: Instalar vía NPM (Para proyectos con build)

```bash
npm install lucide
```

```javascript
import { Facebook, Twitter, Instagram } from 'lucide';
```

---

## Personalización de Iconos

### Cambiar Tamaño
```html
<!-- Pequeño -->
<svg width="16" height="16" ...>

<!-- Mediano (default) -->
<svg width="20" height="20" ...>

<!-- Grande -->
<svg width="24" height="24" ...>
```

### Cambiar Color
```css
.footer__social-link svg {
    stroke: white; /* Color del trazo */
}

.footer__social-link:hover svg {
    stroke: #DC2626; /* Color al hover */
}
```

### Cambiar Grosor del Trazo
```html
<!-- Delgado -->
<svg stroke-width="1" ...>

<!-- Normal (default) -->
<svg stroke-width="2" ...>

<!-- Grueso -->
<svg stroke-width="3" ...>
```

### Rellenar el Icono
```html
<!-- Solo trazo (default) -->
<svg fill="none" stroke="currentColor" ...>

<!-- Relleno sólido -->
<svg fill="currentColor" stroke="none" ...>
```

---

## Iconos Útiles para el Proyecto

### Educación
- `book-open` - Libro abierto
- `graduation-cap` - Birrete de graduación
- `school` - Escuela
- `users` - Usuarios/Estudiantes
- `award` - Premio/Certificado

### Investigación
- `flask-conical` - Matraz de laboratorio
- `microscope` - Microscopio
- `atom` - Átomo
- `test-tube` - Tubo de ensayo
- `beaker` - Vaso de precipitados

### Navegación
- `menu` - Menú hamburguesa
- `x` - Cerrar
- `chevron-down` - Flecha abajo
- `chevron-right` - Flecha derecha
- `arrow-right` - Flecha derecha (línea)

### Acciones
- `search` - Buscar
- `download` - Descargar
- `upload` - Subir
- `mail` - Email
- `phone` - Teléfono
- `map-pin` - Ubicación

### Documentos
- `file-text` - Documento
- `file-pdf` - PDF
- `folder` - Carpeta
- `calendar` - Calendario

---

## Implementación en el Tema

### Ubicación de los Iconos
```
footer.php (líneas 53-94)
├── Facebook
├── Twitter/X
├── Instagram
├── LinkedIn
├── YouTube
└── TikTok
```

### Estilos CSS
```
custom.css (líneas 1170-1204)
├── .footer__social
├── .footer__social-link
├── .footer__social-link svg
├── .footer__social-link:hover
└── .footer__social-link:hover svg
```

### Configuración WordPress
```
inc/customizer.php (líneas 335-345)
└── TikTok URL setting
```

---

## Alternativas a Lucide Icons

### 1. **Heroicons** (https://heroicons.com/)
- Por Tailwind CSS
- Estilo similar a Lucide
- Menos iconos disponibles

### 2. **Feather Icons** (https://feathericons.com/)
- Predecesor de Lucide
- Menos mantenimiento
- Menos iconos

### 3. **Font Awesome** (https://fontawesome.com/)
- Más iconos (miles)
- Requiere carga de fuente
- Versión gratuita limitada
- Más pesado

### 4. **Material Icons** (https://fonts.google.com/icons)
- Por Google
- Estilo Material Design
- Muchos iconos
- Diferentes estilos

### 5. **Bootstrap Icons** (https://icons.getbootstrap.com/)
- Por Bootstrap
- Buen conjunto de iconos
- Estilo consistente

---

## Por Qué Elegimos Lucide

✅ **Ligero** - Solo SVG, sin JavaScript
✅ **Moderno** - Diseño limpio y actual
✅ **Consistente** - Todos los iconos siguen el mismo grid
✅ **Gratuito** - MIT License, sin restricciones
✅ **Mantenido** - Actualizaciones regulares
✅ **Flexible** - Fácil de personalizar
✅ **Accesible** - Diseñados con a11y en mente
✅ **Sin dependencias** - No requiere librerías adicionales

---

## Recursos Adicionales

- **Sitio oficial:** https://lucide.dev/
- **GitHub:** https://github.com/lucide-icons/lucide
- **NPM:** https://www.npmjs.com/package/lucide
- **Figma Plugin:** https://www.figma.com/community/plugin/939567362549682242
- **Documentación:** https://lucide.dev/guide/

---

## Licencia

Lucide Icons está bajo licencia **ISC License**, lo que significa:
- ✅ Uso comercial permitido
- ✅ Modificación permitida
- ✅ Distribución permitida
- ✅ Uso privado permitido
- ⚠️ Sin garantía

---

**Última actualización:** 24 de Noviembre, 2025
**Versión de Lucide usada:** Latest (SVG directo)
**Implementado por:** [Tu Nombre]

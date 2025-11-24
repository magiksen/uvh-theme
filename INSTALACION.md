# Guía de Instalación Rápida - Tema UVH

## ✅ Requisitos Previos

- WordPress 6.0 o superior
- PHP 7.4 o superior
- MySQL 5.7 o superior

## 🚀 Pasos de Instalación

### 1. Activar el Tema

El tema ya está instalado en tu WordPress local. Para activarlo:

1. Inicia sesión en el panel de administración de WordPress
2. Ve a **Apariencia > Temas**
3. Busca "UVH Theme"
4. Haz clic en **Activar**

### 2. Configuración Básica (5 minutos)

#### A. Crear Página de Inicio

```
1. Ve a Páginas > Añadir nueva
2. Título: "Inicio"
3. Publica la página (no necesitas agregar contenido)
4. Ve a Ajustes > Lectura
5. Selecciona "Una página estática"
6. Elige "Inicio" como página principal
7. Guarda los cambios
```

#### B. Configurar Menú Principal

```
1. Ve a Apariencia > Menús
2. Crea un nuevo menú: "Menú Principal"
3. Añade estos enlaces personalizados:
   - Inicio → URL: #inicio
   - Sobre Nosotros → URL: #nosotros
   - Oferta Académica → URL: #oferta-academica
   - Investigación → URL: #investigacion
   - Admisión → URL: #admision
   - Noticias → (crea una página o categoría)
4. Asigna el menú a "Menú Principal"
5. Guarda el menú
```

#### C. Configurar Logo

```
1. Ve a Apariencia > Personalizar
2. Selecciona "Identidad del sitio"
3. Haz clic en "Seleccionar logo"
4. Sube el logo oficial de la UVH
5. Ajusta el tamaño si es necesario
6. Publica los cambios
```

#### D. Configurar Información de Contacto

```
1. Ve a Apariencia > Personalizar
2. Selecciona "Configuración UVH"
3. Completa:
   - Teléfono: +58 212 XXX-XXXX
   - Email: info@uvh.edu.ve
   - Dirección: Caracas, Venezuela
4. Publica los cambios
```

#### E. Configurar Redes Sociales

```
1. Ve a Apariencia > Personalizar
2. Selecciona "Redes Sociales"
3. Añade las URLs de las redes sociales de la UVH:
   - Facebook
   - Twitter
   - Instagram
   - LinkedIn
   - YouTube
4. Publica los cambios
```

### 3. Añadir Contenido Inicial

#### Crear Noticias de Ejemplo

```
1. Ve a Entradas > Añadir nueva
2. Escribe un título y contenido
3. Añade una imagen destacada (recomendado: 600x400px)
4. Asigna una categoría "Noticias"
5. Publica
6. Repite para crear al menos 3 noticias
```

Las últimas 3 noticias aparecerán automáticamente en la página de inicio.

### 4. Configurar Widgets del Footer (Opcional)

```
1. Ve a Apariencia > Widgets
2. Configura las 4 áreas del footer:
   - Footer 1: Enlaces Rápidos
   - Footer 2: Servicios
   - Footer 3: Información de Contacto
   - Footer 4: Newsletter o información adicional
```

## 🎨 Personalización Rápida

### Cambiar Colores

Si necesitas ajustar los colores institucionales:

1. Ve a `wp-content/themes/uvh-theme/style.css`
2. Busca la sección `:root`
3. Modifica las variables CSS:

```css
:root {
    --primary-color: #A70336;        /* Rojo Carmesí */
    --secondary-color: #273376;      /* Azul Marino */
    --accent-color: #FFC907;         /* Amarillo Oro */
}
```

### Modificar Secciones de la Página Principal

Las secciones están en `wp-content/themes/uvh-theme/template-parts/`:

- `section-about.php` - Sobre Nosotros
- `section-programs.php` - Oferta Académica
- `section-research.php` - Investigación
- `section-admission.php` - Admisión
- `section-stats.php` - Estadísticas
- `section-testimonials.php` - Testimonios
- `section-news.php` - Noticias
- `section-contact.php` - Contacto

Edita estos archivos para personalizar el contenido.

## 📋 Checklist de Configuración

- [ ] Tema activado
- [ ] Página de inicio configurada
- [ ] Menú principal creado y asignado
- [ ] Logo subido
- [ ] Información de contacto configurada
- [ ] Redes sociales configuradas
- [ ] Al menos 3 noticias publicadas
- [ ] Widgets del footer configurados (opcional)
- [ ] Probado en diferentes dispositivos

## 🔧 Solución Rápida de Problemas

### El tema no se activa
- Verifica que WordPress sea versión 6.0 o superior
- Verifica que PHP sea versión 7.4 o superior

### La página de inicio no muestra las secciones
- Asegúrate de haber configurado una página estática como página de inicio
- Ve a Ajustes > Lectura y verifica la configuración

### Las imágenes no se muestran
- Verifica que la carpeta `assets/img/` tenga todos los archivos SVG
- Revisa los permisos de la carpeta (755 para directorios, 644 para archivos)

### Los estilos no se aplican
- Limpia la caché del navegador (Ctrl + F5)
- Si usas un plugin de caché, límpialo también

## 📞 Soporte

Si necesitas ayuda:
- Email: info@uvh.edu.ve
- Teléfono: +58 212 XXX-XXXX

## 📚 Documentación Completa

Para más detalles, consulta el archivo `README.md` en la carpeta del tema.

---

**¡Listo! Tu sitio UVH está configurado y funcionando.**

Visita tu sitio para ver el resultado: [http://localhost/uvh](http://localhost/uvh)

# Migración de Programas Académicos

## ✅ Cambios Realizados

### 1. Integración del Template Dinámico
- ✅ Actualizado `front-page.php` para usar `section-programs-dynamic.php`
- ✅ Eliminado `section-programs.php` (ya no es necesario)

### 2. Archivos Creados
- ✅ `inc/academic-programs.php` - Custom Post Type
- ✅ `template-parts/section-programs-dynamic.php` - Template dinámico
- ✅ `migration-academic-programs.sql` - Script de migración de datos

---

## 📋 Instrucciones de Migración

### Paso 1: Ejecutar el SQL

1. **Hacer backup de la base de datos** (¡IMPORTANTE!)
   
2. Abrir **phpMyAdmin** o tu cliente MySQL preferido

3. Seleccionar la base de datos de WordPress

4. Ir a la pestaña **SQL**

5. Copiar y pegar el contenido de `migration-academic-programs.sql`

6. **IMPORTANTE**: Si tu prefijo de tablas NO es `wp_`, reemplazar todas las ocurrencias:
   - Buscar: `wp_`
   - Reemplazar con: `tu_prefijo_`

7. Hacer clic en **Ejecutar** o **Go**

### Paso 2: Verificar en WordPress

1. Ir a **WordPress Admin**

2. Buscar el menú **"Oferta Académica"** en el sidebar

3. Deberías ver 4 programas:
   - PROGRAMAS NACIONALES DE FORMACIÓN (PNF)
   - PROGRAMAS DE FORMACIÓN AVANZADA (PNFA)
   - MAESTRÍAS
   - ESTUDIOS INTERNACIONALES

4. Verificar que cada uno tenga:
   - ✅ Estado: Activo
   - ✅ Icono asignado
   - ✅ Subtítulo
   - ✅ Características (lista)
   - ✅ URL del botón

### Paso 3: Ver el Resultado

1. Ir a la **página de inicio** del sitio

2. Desplazarse a la sección **"Oferta Académica"**

3. Verificar que los programas se muestren correctamente con:
   - ✅ Iconos SVG
   - ✅ Títulos
   - ✅ Subtítulos
   - ✅ Lista de características
   - ✅ Botón "Más información"

---

## 🎯 Datos Migrados

### Programa 1: PNF
- **Título**: PROGRAMAS NACIONALES DE FORMACIÓN (PNF)
- **Icono**: Globo (globe)
- **Orden**: 0
- **Características**:
  1. Geofísica
  2. Gestión Integral de Pozos
  3. Petroquímica
  4. Producción y Procesamiento de Gas
  5. Yacimientos de Hidrocarburos

### Programa 2: PNFA
- **Título**: PROGRAMAS DE FORMACIÓN AVANZADA (PNFA)
- **Icono**: Rayo (zap)
- **Orden**: 1
- **Características**:
  1. Salud de los Trabajadores
  2. Comunicación Social Energética
  3. Exploración y Extracción Minera

### Programa 3: Maestrías
- **Título**: MAESTRÍAS
- **Icono**: Libro (book)
- **Orden**: 2
- **Características**:
  1. Caracterización y Explotación de Yacimientos
  2. Gestión de Datos de Producción
  3. Ecología e Hidrocarburos

### Programa 4: Estudios Internacionales
- **Título**: ESTUDIOS INTERNACIONALES
- **Icono**: Globo (globe)
- **Orden**: 3
- **Características**:
  1. Convenios Internacionales
  2. Programas de Intercambio
  3. Doble Titulación
  4. Movilidad Estudiantil

---

## 🔧 Gestión de Programas

### Agregar Nuevo Programa

1. Ir a **Oferta Académica → Agregar Nuevo**
2. Completar los campos:
   - Título del programa
   - Marcar "Programa Activo"
   - Subtítulo/Descripción
   - Seleccionar icono
   - Orden (número menor = primero)
   - Hasta 6 características
   - URL del botón
3. Publicar

### Editar Programa Existente

1. Ir a **Oferta Académica → Todos los Programas**
2. Hacer clic en el programa a editar
3. Modificar los campos necesarios
4. Actualizar

### Desactivar Programa (Sin Eliminar)

1. Editar el programa
2. Desmarcar **"Programa Activo"**
3. Actualizar
4. El programa desaparecerá del frontend pero permanecerá en el admin

### Reordenar Programas

1. Editar cada programa
2. Cambiar el número en el campo **"Orden"**
3. Números menores aparecen primero (0 = primero)
4. Actualizar

---

## 🎨 Iconos Disponibles

Los siguientes iconos están disponibles para seleccionar:

1. 🧪 **Matraz** (flask) - Química/Laboratorio
2. 💧 **Gota** (droplet) - Petróleo/Líquidos
3. ⚡ **Rayo** (zap) - Energía/Eléctrico
4. 📊 **Actividad** (activity) - Análisis/Datos
5. 📚 **Capas** (layers) - Geología
6. 💨 **Viento** (wind) - Gas/Aire
7. 💻 **CPU** (cpu) - Tecnología
8. ⚙️ **Engranaje** (settings) - Mecánica
9. 🌍 **Globo** (globe) - Geofísica
10. 🛡️ **Escudo** (shield) - Seguridad
11. 💼 **Maletín** (briefcase) - Gestión
12. 📖 **Libro** (book) - Educación

---

## ⚠️ Solución de Problemas

### Los programas no aparecen en el frontend

1. Verificar que el SQL se ejecutó correctamente
2. Ir a **Oferta Académica** en el admin y verificar que existan los programas
3. Verificar que los programas estén marcados como **"Activo"**
4. Limpiar caché de WordPress si usas plugin de caché

### Los iconos no se muestran

1. Verificar que cada programa tenga un icono seleccionado
2. Si el icono está vacío, editar el programa y seleccionar uno
3. Guardar cambios

### El orden no es correcto

1. Editar cada programa
2. Asignar números de orden correctos (0, 1, 2, 3...)
3. Actualizar cada uno

### Quiero volver al sistema anterior

1. Restaurar el backup de la base de datos
2. Restaurar el archivo `section-programs.php` desde Git
3. Cambiar `front-page.php` para usar `section-programs` en lugar de `section-programs-dynamic`

---

## 📊 Consultas SQL Útiles

### Ver todos los programas
```sql
SELECT * FROM wp_posts WHERE post_type = 'academic_program';
```

### Ver metadata de programas
```sql
SELECT * FROM wp_postmeta 
WHERE post_id IN (SELECT ID FROM wp_posts WHERE post_type = 'academic_program');
```

### Eliminar todos los programas (CUIDADO)
```sql
DELETE FROM wp_postmeta 
WHERE post_id IN (SELECT ID FROM wp_posts WHERE post_type = 'academic_program');

DELETE FROM wp_posts WHERE post_type = 'academic_program';
```

---

## ✨ Ventajas del Nuevo Sistema

1. ✅ **Sin código** - Todo desde el admin
2. ✅ **Flexible** - Agregar/quitar programas fácilmente
3. ✅ **Visual** - Iconos predefinidos
4. ✅ **Ordenable** - Control total del orden
5. ✅ **Activable** - Ocultar sin eliminar
6. ✅ **Escalable** - Tantos programas como necesites
7. ✅ **Mantenible** - Actualizar sin tocar código

---

**Fecha de Migración**: 24 de Noviembre, 2025  
**Versión**: 1.0.0

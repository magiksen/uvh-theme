-- Actualizar iconos de programas académicos a emojis
-- Ejecutar este SQL para actualizar los programas existentes

-- Actualizar iconos basándose en el nombre del programa
UPDATE wp_postmeta 
SET meta_value = '🎓' 
WHERE meta_key = '_uvh_program_icon' 
AND post_id IN (
    SELECT ID FROM wp_posts 
    WHERE post_type = 'academic_program' 
    AND post_title LIKE '%PNF%'
    AND post_title NOT LIKE '%PNFA%'
);

UPDATE wp_postmeta 
SET meta_value = '🎯' 
WHERE meta_key = '_uvh_program_icon' 
AND post_id IN (
    SELECT ID FROM wp_posts 
    WHERE post_type = 'academic_program' 
    AND post_title LIKE '%PNFA%'
);

UPDATE wp_postmeta 
SET meta_value = '📚' 
WHERE meta_key = '_uvh_program_icon' 
AND post_id IN (
    SELECT ID FROM wp_posts 
    WHERE post_type = 'academic_program' 
    AND post_title LIKE '%MAESTR%'
);

UPDATE wp_postmeta 
SET meta_value = '🌎' 
WHERE meta_key = '_uvh_program_icon' 
AND post_id IN (
    SELECT ID FROM wp_posts 
    WHERE post_type = 'academic_program' 
    AND post_title LIKE '%INTERNACIONAL%'
);

-- Verificar los cambios
SELECT p.ID, p.post_title, pm.meta_value as icono
FROM wp_posts p
LEFT JOIN wp_postmeta pm ON p.ID = pm.post_id AND pm.meta_key = '_uvh_program_icon'
WHERE p.post_type = 'academic_program'
ORDER BY p.ID;

-- Programas Académicos iniciales para UVH
-- Ejecutar este SQL en la base de datos de WordPress

-- Programa 1: PNF (Programas Nacionales de Formación) - Orden: 0
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (1, NOW(), NOW(), '', 'PROGRAMAS NACIONALES DE FORMACIÓN (PNF)', '', 'publish', 'closed', 'closed', '', 'programas-nacionales-formacion-pnf', '', '', NOW(), NOW(), '', 0, '', 0, 'academic_program', '', 0);

SET @program1_id = LAST_INSERT_ID();

INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
(@program1_id, '_uvh_program_active', '1'),
(@program1_id, '_uvh_program_subtitle', '5 programas de pregrado especializados en el sector energético venezolano.'),
(@program1_id, '_uvh_program_icon', '🎓'),
(@program1_id, '_uvh_program_order', '0'),
(@program1_id, '_uvh_program_feature_1', 'Geofísica'),
(@program1_id, '_uvh_program_feature_2', 'Gestión Integral de Pozos'),
(@program1_id, '_uvh_program_feature_3', 'Petroquímica'),
(@program1_id, '_uvh_program_feature_4', 'Producción y Procesamiento de Gas'),
(@program1_id, '_uvh_program_feature_5', 'Yacimientos de Hidrocarburos'),
(@program1_id, '_uvh_program_button_url', '/oferta-academica#pregrado');

-- Programa 2: PNFA (Programas de Formación Avanzada) - Orden: 1
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (1, NOW(), NOW(), '', 'PROGRAMAS DE FORMACIÓN AVANZADA (PNFA)', '', 'publish', 'closed', 'closed', '', 'programas-formacion-avanzada-pnfa', '', '', NOW(), NOW(), '', 0, '', 0, 'academic_program', '', 0);

SET @program2_id = LAST_INSERT_ID();

INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
(@program2_id, '_uvh_program_active', '1'),
(@program2_id, '_uvh_program_subtitle', 'Postgrados especializados en áreas estratégicas del sector energético y minero.'),
(@program2_id, '_uvh_program_icon', '🎯'),
(@program2_id, '_uvh_program_order', '1'),
(@program2_id, '_uvh_program_feature_1', 'Salud de los Trabajadores'),
(@program2_id, '_uvh_program_feature_2', 'Comunicación Social Energética'),
(@program2_id, '_uvh_program_feature_3', 'Exploración y Extracción Minera'),
(@program2_id, '_uvh_program_button_url', '/oferta-academica#postgrado');

-- Programa 3: Maestrías - Orden: 2
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (1, NOW(), NOW(), '', 'MAESTRÍAS', '', 'publish', 'closed', 'closed', '', 'maestrias', '', '', NOW(), NOW(), '', 0, '', 0, 'academic_program', '', 0);

SET @program3_id = LAST_INSERT_ID();

INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
(@program3_id, '_uvh_program_active', '1'),
(@program3_id, '_uvh_program_subtitle', 'Programas de postgrado tradicionales con formación avanzada y especializada.'),
(@program3_id, '_uvh_program_icon', '📚'),
(@program3_id, '_uvh_program_order', '2'),
(@program3_id, '_uvh_program_feature_1', 'Caracterización y Explotación de Yacimientos'),
(@program3_id, '_uvh_program_feature_2', 'Gestión de Datos de Producción'),
(@program3_id, '_uvh_program_feature_3', 'Ecología e Hidrocarburos'),
(@program3_id, '_uvh_program_button_url', '/oferta-academica#postgrado');

-- Programa 4: Estudios Internacionales - Orden: 3
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (1, NOW(), NOW(), '', 'ESTUDIOS INTERNACIONALES', '', 'publish', 'closed', 'closed', '', 'estudios-internacionales', '', '', NOW(), NOW(), '', 0, '', 0, 'academic_program', '', 0);

SET @program4_id = LAST_INSERT_ID();

INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
(@program4_id, '_uvh_program_active', '1'),
(@program4_id, '_uvh_program_subtitle', 'Convenios y programas de intercambio con universidades y centros de investigación internacionales.'),
(@program4_id, '_uvh_program_icon', '🌎'),
(@program4_id, '_uvh_program_order', '3'),
(@program4_id, '_uvh_program_feature_1', 'Convenios Internacionales'),
(@program4_id, '_uvh_program_feature_2', 'Programas de Intercambio'),
(@program4_id, '_uvh_program_feature_3', 'Doble Titulación'),
(@program4_id, '_uvh_program_feature_4', 'Movilidad Estudiantil'),
(@program4_id, '_uvh_program_button_url', '/oferta-academica');

-- =====================================================
-- Verificación
-- =====================================================
-- Ejecuta estas consultas para verificar que todo se insertó correctamente:
--
-- SELECT * FROM wp_posts WHERE post_type = 'academic_program';
-- SELECT * FROM wp_postmeta WHERE post_id IN (SELECT ID FROM wp_posts WHERE post_type = 'academic_program');
--
-- =====================================================
-- Limpieza (OPCIONAL - Solo si quieres eliminar los datos de prueba)
-- =====================================================
-- DELETE FROM wp_postmeta WHERE post_id IN (SELECT ID FROM wp_posts WHERE post_type = 'academic_program');
-- DELETE FROM wp_posts WHERE post_type = 'academic_program';
-- =====================================================

-- FIN DEL SCRIPT

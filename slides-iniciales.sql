-- Slides iniciales para Hero Slider UVH
-- Ejecutar este SQL en la base de datos de WordPress

-- Slide 1: Bienvenida Principal (Orden: 0)
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (1, NOW(), NOW(), '', 'UNIVERSIDAD VENEZOLANA DE LOS HIDROCARBUROS', '', 'publish', 'closed', 'closed', '', 'slide-bienvenida-uvh', '', '', NOW(), NOW(), '', 0, '', 0, 'hero_slide', '', 0);

SET @slide1_id = LAST_INSERT_ID();

INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
(@slide1_id, '_uvh_slide_subtitle', 'Formando profesionales de excelencia para el desarrollo del sector energético venezolano'),
(@slide1_id, '_uvh_slide_order', '0'),
(@slide1_id, '_uvh_slide_button1_text', 'Conoce más'),
(@slide1_id, '_uvh_slide_button1_link', '#nosotros'),
(@slide1_id, '_uvh_slide_button2_text', 'Programas académicos'),
(@slide1_id, '_uvh_slide_button2_link', '#oferta-academica');

-- Slide 2: Admisión 2025 (Orden: 1)
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (1, NOW(), NOW(), '', 'PROCESO DE ADMISIÓN 2025 ABIERTO', '', 'publish', 'closed', 'closed', '', 'slide-admision-2025', '', '', NOW(), NOW(), '', 0, '', 0, 'hero_slide', '', 0);

SET @slide2_id = LAST_INSERT_ID();

INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
(@slide2_id, '_uvh_slide_subtitle', 'Inscríbete ahora y forma parte de la próxima generación de profesionales del sector energético'),
(@slide2_id, '_uvh_slide_order', '1'),
(@slide2_id, '_uvh_slide_button1_text', 'Inscríbete ahora'),
(@slide2_id, '_uvh_slide_button1_link', '#admision'),
(@slide2_id, '_uvh_slide_button2_text', 'Ver requisitos'),
(@slide2_id, '_uvh_slide_button2_link', '#admision');

-- Slide 3: Programas Educativos (Orden: 2)
INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (1, NOW(), NOW(), '', 'PROGRAMAS EDUCATIVOS DE EXCELENCIA', '', 'publish', 'closed', 'closed', '', 'slide-programas-educativos', '', '', NOW(), NOW(), '', 0, '', 0, 'hero_slide', '', 0);

SET @slide3_id = LAST_INSERT_ID();

INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
(@slide3_id, '_uvh_slide_subtitle', 'Ingeniería en Petróleo, Gas, Química y Geología Petrolera. Carreras especializadas para el sector energético'),
(@slide3_id, '_uvh_slide_order', '2'),
(@slide3_id, '_uvh_slide_button1_text', 'Ver programas'),
(@slide3_id, '_uvh_slide_button1_link', '#oferta-academica'),
(@slide3_id, '_uvh_slide_button2_text', 'Conoce más'),
(@slide3_id, '_uvh_slide_button2_link', '#nosotros');

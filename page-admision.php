<?php
declare(strict_types=1);

/**
 * Template Name: Formulario de Admisión
 * 
 * @package UVH_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="admission-page">
    <!-- Hero Section -->
    <section class="admission-hero">
        <div class="container">
            <div class="admission-hero__content">
                <h1 class="admission-hero__title">Formulario de Admisión</h1>
                <p class="admission-hero__subtitle">
                    Trayecto Inicial periodo II-2025 (PREGRADO)
                </p>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="admission-info">
        <div class="container">
            <div class="admission-info__content">
                <p class="admission-info__text">
                    Este formulario tiene como objetivo conformar la base de datos de los aspirantes al Trayecto Inicial periodo II-2025 (PREGRADO) en la UVH. 
                    La información proporcionada permitirá a la institución conocer los intereses de los futuros discentes en los programas de formación nacional.
                </p>
                <div class="admission-info__alerts">
                    <div class="admission-alert admission-alert--info">
                        <strong>Aviso:</strong> Una vez culminado el lapso de consulta, se informará a los aspirantes vía email sobre los recaudos a consignar, fecha de entrevistas y otros pasos.
                    </div>
                    <div class="admission-alert admission-alert--contact">
                        <strong>Contacto:</strong> Para más información: <a href="mailto:inscripcionesuvh@gmail.com">inscripcionesuvh@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="admission-form-section">
        <div class="container">
            <!-- Progress Steps -->
            <div class="form-progress">
                <div class="form-progress__step form-progress__step--active" data-step="1">
                    <div class="form-progress__number">1</div>
                    <div class="form-progress__label">Datos Personales</div>
                </div>
                <div class="form-progress__step" data-step="2">
                    <div class="form-progress__number">2</div>
                    <div class="form-progress__label">Datos Académicos</div>
                </div>
                <div class="form-progress__step" data-step="3">
                    <div class="form-progress__number">3</div>
                    <div class="form-progress__label">Programas</div>
                </div>
                <div class="form-progress__step" data-step="4">
                    <div class="form-progress__number">4</div>
                    <div class="form-progress__label">Actividades</div>
                </div>
                <div class="form-progress__step" data-step="5">
                    <div class="form-progress__number">5</div>
                    <div class="form-progress__label">Info. Laboral</div>
                </div>
            </div>

            <!-- Form -->
            <form id="admission-form" class="admission-form">
                <!-- Step 1: Datos Personales -->
                <div class="form-step form-step--active" data-step="1">
                    <h2 class="form-step__title">Datos Personales</h2>
                    <p class="form-step__description">
                        Por favor, complete los campos con los datos que se le solicitan. Los campos con asterisco (*) son obligatorios.
                    </p>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cedula">Número de Cédula *</label>
                            <input type="text" id="cedula" name="cedula" required placeholder="Ej: 12345678">
                            <small>Escribe solo los números</small>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad *</label>
                            <input type="number" id="edad" name="edad" required min="16" max="100">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="apellidos">Apellidos (según Partida de Nacimiento) *</label>
                            <input type="text" id="apellidos" name="apellidos" required>
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nombres (según Partida de Nacimiento) *</label>
                            <input type="text" id="nombres" name="nombres" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="genero">Género *</label>
                            <select id="genero" name="genero" required>
                                <option value="">Seleccione...</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="estado_civil">Estado Civil *</label>
                            <select id="estado_civil" name="estado_civil" required>
                                <option value="">Seleccione...</option>
                                <option value="Soltero(a)">Soltero(a)</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Concubino(a)">Concubino(a)</option>
                                <option value="Viudo(a)">Viudo(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de Nacimiento *</label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico Personal *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefono_personal">Teléfono Personal *</label>
                            <input type="tel" id="telefono_personal" name="telefono_personal" required placeholder="Ej: 04121234567">
                        </div>
                        <div class="form-group">
                            <label for="telefono_emergencia">Teléfono de Emergencia *</label>
                            <input type="tel" id="telefono_emergencia" name="telefono_emergencia" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefono_representante">Teléfono Representante Legal</label>
                            <input type="tel" id="telefono_representante" name="telefono_representante">
                            <small>Aplica para menores de edad</small>
                        </div>
                    </div>

                    <div class="form-group form-group--full">
                        <label for="direccion">Dirección de Habitación *</label>
                        <textarea id="direccion" name="direccion" rows="3" required placeholder="Av., calle, Edif, N° Apto. o casa, Urb., localidad y estado"></textarea>
                    </div>
                </div>

                <!-- Step 2: Datos Académicos -->
                <div class="form-step" data-step="2">
                    <h2 class="form-step__title">Datos Académicos de Educación Media General</h2>
                    <p class="form-step__description">
                        Complete la información relacionada con sus estudios de Pregrado.
                    </p>

                    <div class="form-group form-group--full">
                        <label for="liceo_nombre">Nombre del Liceo donde obtuvo su título de Bachiller *</label>
                        <input type="text" id="liceo_nombre" name="liceo_nombre" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="liceo_tipo">Tipo de Liceo *</label>
                            <select id="liceo_tipo" name="liceo_tipo" required>
                                <option value="">Seleccione...</option>
                                <option value="Pública">Pública</option>
                                <option value="Privada">Privada</option>
                                <option value="Subvencionada">Subvencionada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="promedio_academico">Promedio Académico *</label>
                            <input type="text" id="promedio_academico" name="promedio_academico" required placeholder="Ej: 18.50">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="titulo_bachiller">Título de Bachiller Obtenido *</label>
                            <input type="text" id="titulo_bachiller" name="titulo_bachiller" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha_graduacion">Fecha de Graduación *</label>
                            <input type="date" id="fecha_graduacion" name="fecha_graduacion" required>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Preferencias de Programa -->
                <div class="form-step" data-step="3">
                    <h2 class="form-step__title">Preferencia de Programa Nacional de Formación</h2>
                    <p class="form-step__description">
                        Seleccione tres (3) opciones de estudios en orden de preferencia.
                    </p>

                    <?php
                    $programas = [
                        'Gestión Integral de Pozos de Hidrocarburos (TSU / INGENIERO)',
                        'Yacimientos de hidrocarburos (TSU / INGENIERO)',
                        'Geofísica (TSU / INGENIERO)',
                        'Gas (TSU / INGENIERO)',
                        'Procesos Químicos',
                        'Instrumentación y Control (TSU / INGENIERO)',
                        'Automatización Industrial con Aplicaciones de la Inteligencia Artificial (TSU / INGENIERO)',
                        'Mantenimiento Industrial (TSU / INGENIERO)',
                        'Seguridad y Salud en el Trabajo (TSU / INGENIERO)',
                        'Derechos con competencias hidrocarburos y Midercarburos (ABOGADO)',
                        'Geopolítica energética (Licenciado)',
                        'Ecología (Licenciado)',
                    ];
                    ?>

                    <div class="form-group form-group--full">
                        <label for="programa_opcion_1">1ra Opción de Programa *</label>
                        <select id="programa_opcion_1" name="programa_opcion_1" required>
                            <option value="">Seleccione un programa...</option>
                            <?php foreach ($programas as $programa): ?>
                                <option value="<?php echo esc_attr($programa); ?>"><?php echo esc_html($programa); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group form-group--full">
                        <label for="programa_opcion_2">2da Opción de Programa *</label>
                        <select id="programa_opcion_2" name="programa_opcion_2" required>
                            <option value="">Seleccione un programa...</option>
                            <?php foreach ($programas as $programa): ?>
                                <option value="<?php echo esc_attr($programa); ?>"><?php echo esc_html($programa); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group form-group--full">
                        <label for="programa_opcion_3">3ra Opción de Programa *</label>
                        <select id="programa_opcion_3" name="programa_opcion_3" required>
                            <option value="">Seleccione un programa...</option>
                            <?php foreach ($programas as $programa): ?>
                                <option value="<?php echo esc_attr($programa); ?>"><?php echo esc_html($programa); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group form-group--full">
                        <label for="turno_preferido">Turno Preferido para Cursar Estudios *</label>
                        <select id="turno_preferido" name="turno_preferido" required>
                            <option value="">Seleccione...</option>
                            <option value="Diurno">Diurno</option>
                            <option value="Vespertino-Nocturno">Vespertino-Nocturno</option>
                            <option value="Sabatino">Sabatino (solo para trabajadores)</option>
                        </select>
                    </div>
                </div>

                <!-- Step 4: Actividades -->
                <div class="form-step" data-step="4">
                    <h2 class="form-step__title">Actividades e Información Adicional</h2>
                    <p class="form-step__description">
                        Seleccione las actividades deportivas, artísticas y sociales con las que se identifica.
                    </p>

                    <div class="form-group form-group--full">
                        <label for="actividad_deportiva">Actividad Deportiva</label>
                        <select id="actividad_deportiva" name="actividad_deportiva">
                            <option value="">Seleccione...</option>
                            <option value="Béisbol">Béisbol</option>
                            <option value="Softbol">Softbol</option>
                            <option value="Volibol">Volibol</option>
                            <option value="Baloncesto">Baloncesto</option>
                            <option value="Artes marciales">Artes marciales</option>
                            <option value="Fútbol">Fútbol</option>
                            <option value="Natación">Natación</option>
                            <option value="Ajedrez">Ajedrez</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="form-group form-group--full">
                        <label for="actividad_artistica">Actividad Artística/Social</label>
                        <select id="actividad_artistica" name="actividad_artistica">
                            <option value="">Seleccione...</option>
                            <option value="Teatro">Teatro</option>
                            <option value="Danza">Danza</option>
                            <option value="Pintura">Pintura</option>
                            <option value="Orfeón">Orfeón</option>
                            <option value="Bomberos">Bomberos</option>
                            <option value="Activista comunitario">Activista comunitario</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="tiene_discapacidad">¿Presenta alguna condición de discapacidad? *</label>
                            <select id="tiene_discapacidad" name="tiene_discapacidad" required>
                                <option value="">Seleccione...</option>
                                <option value="No">No</option>
                                <option value="Sí">Sí</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipo_discapacidad">Si su respuesta es afirmativa, indíquela</label>
                            <input type="text" id="tipo_discapacidad" name="tipo_discapacidad">
                        </div>
                    </div>
                </div>

                <!-- Step 5: Información Laboral -->
                <div class="form-step" data-step="5">
                    <h2 class="form-step__title">Información Laboral</h2>
                    <p class="form-step__description">
                        Indique la información relacionada con su trabajo.
                    </p>

                    <div class="form-group form-group--full">
                        <label for="empresa_nombre">Nombre de la Empresa donde labora *</label>
                        <select id="empresa_nombre" name="empresa_nombre" required>
                            <option value="">Seleccione...</option>
                            <option value="Petróleos de Venezuela, S.A">Petróleos de Venezuela, S.A (PDVSA)</option>
                            <option value="Ministerio del Poder Popular de Hidrocarburos (MPPH)">Ministerio del Poder Popular de Hidrocarburos (MPPH)</option>
                            <option value="Ministerio del Poder Popular del Desarrollo Minero">Ministerio del Poder Popular del Desarrollo Minero</option>
                            <option value="Otro">Otro</option>
                            <option value="No aplica">No aplica</option>
                        </select>
                    </div>

                    <div class="form-group form-group--full">
                        <label for="relacion_sector">Relación con el sector de los hidrocarburos y la minería *</label>
                        <select id="relacion_sector" name="relacion_sector" required>
                            <option value="">Seleccione...</option>
                            <option value="Hijo(a) de trabajador(a) de PDVSA">Hijo(a) de trabajador(a) de PDVSA</option>
                            <option value="Hijo(a) de trabajador(a) del MPPH">Hijo(a) de trabajador(a) del MPPH</option>
                            <option value="Hijo(a) de trabajador(a) del Ministerio del Desarrollo Minero">Hijo(a) de trabajador(a) del Ministerio del Desarrollo Minero</option>
                            <option value="Trabajador(a) del sector">Trabajador(a) del sector</option>
                            <option value="Otro">Otro</option>
                            <option value="No aplica">No aplica</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="empresa_localidad">Localidad de la empresa o institución *</label>
                            <input type="text" id="empresa_localidad" name="empresa_localidad" required>
                        </div>
                        <div class="form-group">
                            <label for="departamento">Departamento de adscripción *</label>
                            <input type="text" id="departamento" name="departamento" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cargo">Cargo que desempeña</label>
                            <input type="text" id="cargo" name="cargo">
                        </div>
                        <div class="form-group">
                            <label for="supervisor">Nombre y teléfono del Supervisor</label>
                            <input type="text" id="supervisor" name="supervisor">
                        </div>
                    </div>
                </div>

                <!-- Form Navigation -->
                <div class="form-navigation">
                    <button type="button" class="btn btn--secondary" id="prevBtn" style="display: none;">
                        ← Anterior
                    </button>
                    <button type="button" class="btn btn--primary" id="nextBtn">
                        Siguiente →
                    </button>
                    <button type="submit" class="btn btn--primary" id="submitBtn" style="display: none;">
                        Enviar Solicitud
                    </button>
                </div>

                <!-- Loading & Messages -->
                <div id="form-message" class="form-message" style="display: none;"></div>
                <div id="form-loading" class="form-loading" style="display: none;">
                    <div class="spinner"></div>
                    <p>Enviando solicitud...</p>
                </div>
            </form>
        </div>
    </section>
</div>

<?php
get_footer();

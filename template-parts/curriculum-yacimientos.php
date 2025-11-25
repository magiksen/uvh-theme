<?php
declare(strict_types=1);
/**
 * Template part for displaying PNF Yacimientos de Hidrocarburos curriculum
 * @package UVH_Theme
 */
if (!defined('ABSPATH')) { exit; }
?>
<div class="curriculum-section">
    <button class="curriculum-toggle" onclick="this.parentElement.classList.toggle('active')">
        <span>Ver Malla Curricular Completa</span>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </button>
    <div class="curriculum-content">
        <div class="curriculum-legend curriculum-legend--inline">
            <h4 class="curriculum-legend__title"><?php esc_html_e('Leyenda para los cuadros:', 'uvh-theme'); ?></h4>
            <ul class="curriculum-legend__list">
                <li><strong>Sem:</strong> <?php esc_html_e('Duración de la unidad curricular en semanas.', 'uvh-theme'); ?></li>
                <li><strong>HTA:</strong> <?php esc_html_e('Horas de Trabajo Acompañado.', 'uvh-theme'); ?></li>
                <li><strong>HTI:</strong> <?php esc_html_e('Horas de Trabajo Independiente.', 'uvh-theme'); ?></li>
                <li><strong>HTE:</strong> <?php esc_html_e('Total de Horas de Estudio.', 'uvh-theme'); ?></li>
                <li><strong>UC:</strong> <?php esc_html_e('Unidades Crédito.', 'uvh-theme'); ?></li>
                <li><strong>HTA/Sem:</strong> <?php esc_html_e('Total de Horas semanales de Trabajo Acompañado.', 'uvh-theme'); ?></li>
            </ul>
        </div>
        <div class="curriculum-tables">
            <!-- Trayecto Inicial -->
            <div class="curriculum-table-wrapper">
                <h4 class="curriculum-table-title">Trayecto Inicial</h4>
                <div class="curriculum-table-scroll">
                    <table class="curriculum-table">
                        <thead><tr><th>Unidad Curricular</th><th>Sem</th><th>HTA</th><th>HTI</th><th>HTE</th><th>HTA/Sem</th></tr></thead>
                        <tbody>
                            <tr class="row-yellow"><td>Desarrollo del Motor Hidrocarburos</td><td>12</td><td>48</td><td>19</td><td>67</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Matemática</td><td>12</td><td>48</td><td>19</td><td>67</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Fundamentos de Física</td><td>12</td><td>48</td><td>19</td><td>67</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Fundamentos de Química</td><td>12</td><td>48</td><td>19</td><td>67</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Lenguaje y Comunicación</td><td>12</td><td>48</td><td>19</td><td>67</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Seguridad Industrial e Higiene Ocupacional</td><td>12</td><td>48</td><td>19</td><td>67</td><td>4</td></tr>
                            <tr class="row-blue"><td>Deporte, Arte y Salud</td><td>12</td><td>36</td><td>14</td><td>50</td><td>3</td></tr>
                            <tr class="row-yellow"><td>Fundamentos de Estudios Integrados</td><td>12</td><td>48</td><td>19</td><td>67</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Tecnologías de la Información y las Comunicaciones</td><td>12</td><td>28</td><td>4</td><td>32</td><td>2</td></tr>
                            <tr class="row-yellow"><td>Ambiente</td><td>12</td><td>28</td><td>4</td><td>32</td><td>2</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Trayecto I -->
            <div class="curriculum-table-wrapper">
                <h4 class="curriculum-table-title">Trayecto I</h4>
                <div class="curriculum-table-scroll">
                    <table class="curriculum-table">
                        <thead><tr><th>Unidad Curricular</th><th>Sem</th><th>HTA</th><th>HTI</th><th>HTE</th><th>UC</th><th>HTA/Sem</th></tr></thead>
                        <tbody>
                            <tr class="row-yellow"><td>Legislación petrolera nacional e internacional</td><td>18</td><td>36</td><td>14</td><td>50</td><td>2</td><td>2</td></tr>
                            <tr class="row-yellow"><td>Cálculo Diferencial</td><td>18</td><td>72</td><td>29</td><td>101</td><td>4</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Ecología</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Física</td><td>18</td><td>84</td><td>34</td><td>118</td><td>4</td><td>5</td></tr>
                            <tr class="row-yellow"><td>Química General</td><td>36</td><td>64</td><td>26</td><td>90</td><td>3</td><td>2</td></tr>
                            <tr class="row-yellow"><td>Geometría Descriptiva</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Química del petróleo</td><td>18</td><td>72</td><td>29</td><td>101</td><td>4</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Cálculo Integral</td><td>18</td><td>72</td><td>29</td><td>101</td><td>4</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Geología</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Gas Natural</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Estratigrafía y sedimentación</td><td>18</td><td>72</td><td>29</td><td>101</td><td>4</td><td>4</td></tr>
                            <tr class="row-orange"><td>Proyecto Sociointegrador I</td><td>36</td><td>120</td><td>48</td><td>168</td><td>6</td><td>3</td></tr>
                            <tr class="row-orange"><td>Formación Sociocrítica I</td><td>36</td><td>72</td><td>29</td><td>101</td><td>4</td><td>2</td></tr>
                            <tr class="row-orange"><td>Deporte, Arte y Recreación I</td><td>36</td><td>72</td><td>14</td><td>86</td><td>3</td><td>2</td></tr>
                            <tr class="row-total"><td colspan="5"><strong>Total UC</strong></td><td colspan="2"><strong>50</strong></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Trayecto II -->
            <div class="curriculum-table-wrapper">
                <h4 class="curriculum-table-title">Trayecto II</h4>
                <div class="curriculum-table-scroll">
                    <table class="curriculum-table">
                        <thead><tr><th>Unidad Curricular</th><th>Sem</th><th>HTA</th><th>HTI</th><th>HTE</th><th>UC</th><th>HTA/Sem</th></tr></thead>
                        <tbody>
                            <tr class="row-yellow"><td>Química Inorgánica</td><td>18</td><td>72</td><td>29</td><td>101</td><td>4</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Termodinámica</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Fisicoquímica</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Mecánica de fluidos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Laboratorio de Tecnología</td><td>18</td><td>48</td><td>19</td><td>67</td><td>2</td><td>3</td></tr>
                            <tr class="row-yellow"><td>Transferencia de Calor</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Caracterización Química</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Yacimientos</td><td>18</td><td>72</td><td>29</td><td>101</td><td>4</td><td>4</td></tr>
                            <tr class="row-green"><td>Fundamentos de Perforación de pozos de hidrocarburos</td><td>18</td><td>72</td><td>29</td><td>101</td><td>4</td><td>4</td></tr>
                            <tr class="row-green"><td>Fundamentos de Producción de hidrocarburos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Laboratorio de Tecnología Analítica</td><td>18</td><td>48</td><td>19</td><td>67</td><td>2</td><td>3</td></tr>
                            <tr class="row-yellow"><td>Seguridad e Higiene Ocupacional</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-orange"><td>Proyecto Sociointegrador II</td><td>28</td><td>94</td><td>38</td><td>132</td><td>5</td><td>3</td></tr>
                            <tr class="row-orange"><td>Formación Sociocrítica II</td><td>28</td><td>56</td><td>22</td><td>78</td><td>3</td><td>2</td></tr>
                            <tr class="row-orange"><td>Deporte, Arte y Recreación II</td><td>28</td><td>56</td><td>11</td><td>67</td><td>2</td><td>2</td></tr>
                            <tr class="row-blue"><td>Práctica Profesional I</td><td>8</td><td>20</td><td>240</td><td>260</td><td>9</td><td>30</td></tr>
                            <tr class="row-total"><td colspan="5"><strong>Total UC</strong></td><td colspan="2"><strong>56</strong></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Trayecto III -->
            <div class="curriculum-table-wrapper">
                <h4 class="curriculum-table-title">Trayecto III</h4>
                <div class="curriculum-table-scroll">
                    <table class="curriculum-table">
                        <thead><tr><th>Unidad Curricular</th><th>Sem</th><th>HTA</th><th>HTI</th><th>HTE</th><th>UC</th><th>HTA/Sem</th></tr></thead>
                        <tbody>
                            <tr class="row-green"><td>Geología de producción</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Análisis de formaciones</td><td>18</td><td>48</td><td>19</td><td>67</td><td>2</td><td>3</td></tr>
                            <tr class="row-yellow"><td>Sísmica Básica</td><td>18</td><td>72</td><td>29</td><td>101</td><td>4</td><td>4</td></tr>
                            <tr class="row-green"><td>Geoestadística</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Análisis convencional de yacimientos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Mecanismos de producción</td><td>18</td><td>84</td><td>34</td><td>118</td><td>4</td><td>5</td></tr>
                            <tr class="row-green"><td>Caracterización de fluidos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Flujo de fluidos en el medio poroso</td><td>18</td><td>84</td><td>34</td><td>118</td><td>4</td><td>5</td></tr>
                            <tr class="row-green"><td>Análisis de presión</td><td>18</td><td>84</td><td>34</td><td>118</td><td>4</td><td>5</td></tr>
                            <tr class="row-orange"><td>Proyecto Sociointegrador III</td><td>36</td><td>120</td><td>48</td><td>168</td><td>6</td><td>3</td></tr>
                            <tr class="row-orange"><td>Formación Sociocrítica III</td><td>36</td><td>72</td><td>29</td><td>101</td><td>4</td><td>2</td></tr>
                            <tr class="row-orange"><td>Deporte, Arte y Recreación III</td><td>36</td><td>72</td><td>14</td><td>86</td><td>3</td><td>2</td></tr>
                            <tr class="row-total"><td colspan="5"><strong>Total UC</strong></td><td colspan="2"><strong>43</strong></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Trayecto IV -->
            <div class="curriculum-table-wrapper">
                <h4 class="curriculum-table-title">Trayecto IV</h4>
                <div class="curriculum-table-scroll">
                    <table class="curriculum-table">
                        <thead><tr><th>Unidad Curricular</th><th>Sem</th><th>HTA</th><th>HTI</th><th>HTE</th><th>UC</th><th>HTA/Sem</th></tr></thead>
                        <tbody>
                            <tr class="row-yellow"><td>Electiva 1</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Simulación de yacimientos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Recuperación mejorada de hidrocarburos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Métodos térmicos y químicos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Procesos de instalaciones de superficie</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Estimación de costos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Simulación composicional de yacimientos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Yacimientos naturalmente fracturados</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Yacimientos no convencionales</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Valorización del gas</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-green"><td>Gestión de riesgos</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-yellow"><td>Electiva 2</td><td>18</td><td>64</td><td>26</td><td>90</td><td>3</td><td>4</td></tr>
                            <tr class="row-orange"><td>Proyecto Sociointegrador IV</td><td>28</td><td>94</td><td>38</td><td>132</td><td>5</td><td>3</td></tr>
                            <tr class="row-orange"><td>Formación Sociocrítica IV</td><td>28</td><td>56</td><td>22</td><td>78</td><td>3</td><td>2</td></tr>
                            <tr class="row-orange"><td>Deporte, Arte y Recreación IV</td><td>28</td><td>56</td><td>11</td><td>67</td><td>2</td><td>2</td></tr>
                            <tr class="row-blue"><td>Práctica Profesional II</td><td>8</td><td>20</td><td>240</td><td>260</td><td>9</td><td>30</td></tr>
                            <tr class="row-total"><td colspan="5"><strong>Total UC</strong></td><td colspan="2"><strong>55</strong></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * Proyecto Flota Biobío
 * Aplicación WEB
 *
 * Prototipo por Aníbal Llanos Prado
 * Basado en el trabajo del equipo de Flota Biobío
 *
 * Los archivos incluidos en el presente proyecto, si bien fueron implementados
 * y diseñados (en su forma) por Aníbal Llanos Prado, sus derechos de propiedad
 * se declaran por el mismo como propiedad de la organización presente del
 * equipo de Flota Biobío, propiedad que será transferida a quienes cumplan la
 * anteriormente declarada condición.
 *
 * @copyright   Copyright 2015 Flota Biobio
 * @license     Apache License, Version 2.0
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Vista: footer
 * Footer global.
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.3.7
 * @since   0.3.5
 */
?>
<div class="space-30"></div>
<div class="space-30"></div>
<div class="footer secondary-background-dark">
    <div class="container">
        <div class="footer-content row">
            <?=$this->assets_manager->img('marca01.png', '', 'Flota Biobio')?>
            <div class="col-sm-6 col-sm-offset-2 thin-font soft-color">
                <span><strong class="main-color">Copyright 2015 Flota Biobío</strong> bajo licencia Apache 2.0</span>
                <span>El contenido de la página (incluyendo logos, imágenes,
                    texto, entre otros medios) son de propiedad exclusiva de la
                    organización de Flota Biobío</span>
                <span>Sitio web por <strong class="secondary-background-lighter">Juan Pablo Figueroa</strong>
                    y <strong class="secondary-background-lighter">Aníbal Llanos Prado</strong></span>
            </div>
        </div>
    </div>
</div>

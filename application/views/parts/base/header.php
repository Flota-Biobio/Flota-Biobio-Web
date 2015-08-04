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
 * Vista: header
 * Vista del header global a ser utilizado en la mayoría de las vistas
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.3.5
 * @since   0.1.4
 */
?>
<div class="header main-background">
    <div class="container">
        <div class="header-content row main-background">
            <div class="logo-box col-sm-4">
                <?=$this->assets_manager->img('marca01.png', '', 'Flota Biobio')?>
            </div>
            <div class="session-box col-sm-5 col-sm-offset-3 text-right">
                <h4>Aníbal Llanos Prado</h4>
                <ul class="list-inline">
                    <li>Perfiil</li>
                    <li>Configuración</li>
                    <li>Salir</li>
                </ul>
            </div>
        </div>
    </div>
</div>

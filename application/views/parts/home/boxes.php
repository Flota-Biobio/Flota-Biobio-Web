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
 * Vista: boxes
 * Vista que genera las cajas del inicio
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.1
 * @since   0.1.6
 */
?>
<div class="boxes color-black">
    <div class="container color-gray-40">
        <div class="content row">
            <div class="space-30 col-sm-12"></div>

            <div class="col-sm-4">
                <div class="box box-1">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x color-white"></i>
                    </span>
                    <span class="title font-600">Compra</span>
                    <span class="desc font-300">Navega a través de nuestros productos y llévate los que más te gusten. Compras seguras a través de Transbank.</span>
                    <button class="btn btn-info center-block">Ir al catálogo</button>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box box-2">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-ticket fa-stack-1x color-white"></i>
                    </span>
                    <span class="title font-600">Participa</span>
                    <span class="desc font-300">Participa de los eventos y sorteos que regularmente realizamos y tal vez te lleves un fabuloso premio.</span>
                    <button class="btn btn-info center-block">Ver sorteo activo</button>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box box-3">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-gift fa-stack-1x color-white"></i>
                    </span>
                    <span class="title font-600">Acumula puntos</span>
                    <span class="desc font-300">Registra una cuenta en Flota Biobío, junta puntos, y accede a beneficios y descuentos exclusivos</span>
                    <button class="btn btn-info center-block">Registrar cuenta</button>
                </div>
            </div>

            <div class="space-30 col-sm-12"></div>
        </div>
    </div>
</div>

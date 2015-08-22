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
 * Vista: active
 * Vista del evento activo
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.6
 * @since   0.5.4
 */
?>
<div class="active color-gray-20">
    <div class="container">
        <div class="content row">

            <h1 class="font-300 col-sm-12">Sorteo #45</h1>

            <div class="cover col-sm-12">
                <?= $this->assets_manager->img('sorteo_full_dummy.png', 'dummy/', '', '', 'border-gray-90') ?>
                <div class="legend">
                    <span class="price font-300"><i>"Título de la obra"</i></span>
                    <span class="price font-400">Autor</span>
                </div>
                <button class="btn btn-danger button-shadow" type="button">Ver detalle en el catálogo</button>
            </div>

            <div class="space-15 col-sm-12"></div>

            <div class="info col-sm-4">
                <div class="inner">
                    <h2 class="font-300">Información</h2>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="font-500">Inicio</td>
                            <td>19 de Mayo de 2015</td>
                        </tr>
                        <tr>
                            <td class="font-500">Término</td>
                            <td>19 de Junio de 2015</td>
                        </tr>
                        <tr>
                            <td class="font-500">Disponible a elección</td>
                            <td>123/250</td>
                        </tr>
                        <tr>
                            <td class="font-500">Disponible aleatorio</td>
                            <td>19/250</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="details col-sm-8">
                <div class="space-30"></div>
                <div class="inner">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                    <span class="color-red font-500 text-right">Participar del sorteo acumula 10 puntos Flota</span>
                    <div class="space-15"></div>
                    <h3 class="font-400 text-right">Valor número $1.000</h3>
                    <div class="actions text-right">
                        <button class="btn btn-info">Comprar al azar</button>
                        <a class="btn btn-info" role="button" href="<?=site_url('evento/elegir_numero')?>">Comprar eligiendo número</a>
                    </div>
                </div>
                <div class="space-15"></div>
                <h2 class="font-300">Acerca de los sorteos</h2>
                <div class="inner border-gray-90 background-gray-98">
                    <p class="text-justify">Los sorteos Flota Biobío corresponden a una instancia de venta en la cual, en lugar de adquirir un
                    producto directamente y por su valor total, se participa de un sorteo a relizarse entre todos los
                    participantes el mismo. En la Práctica funciona del mismo modo que una rifa.</p>
                    <p class="text-justify">Todos los sorteos Flota Biobío se encuentran sujetos a las siguientes condiciones:</p>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-angle-double-right"></i>Se emitirá un stock fijo de números a la venta para cada sorteo, los que dependerán del costo del premio.</li>
                        <li><i class="fa-li fa fa-angle-double-right"></i>Los números son de libre compra, pudiéndose comprar todos los que se desee.</li>
                        <li><i class="fa-li fa fa-angle-double-right"></i>Una vez comprados, los números son vinculados a tu cuenta y puedes revisarlos en tu perfil.</li>
                        <li><i class="fa-li fa fa-angle-double-right"></i>La participación en el sorteo es proporcional a la cantidad de números comprados.</li>
                        <li><i class="fa-li fa fa-angle-double-right"></i>Se cuenta con stock para ventas online (al azar y eligiendo número) así como para venta presencial.</li>
                        <li><i class="fa-li fa fa-angle-double-right"></i>Al alcanzar la fecha de término se bloqueará la venta de nuevos números y se publicará en la misma página la lista de participantes.</li>
                        <li><i class="fa-li fa fa-angle-double-right"></i>Los sorteos se realizarán en vivo a través de streaming por el personal de Flota Biobío.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

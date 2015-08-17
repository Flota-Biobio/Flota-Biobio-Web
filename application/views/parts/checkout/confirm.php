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
 * Vista: confirm
 * {VIEW-DESCRIPTION}
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.2
 * @since   0.5.2
 */
?>

<div class="confirm color-gray-20">
    <div class="container">
        <div class="content">

            <h2 class="font-300">Confirmar compra</h2>
            <p>Verifique que la información presentada a continuación es la correcta.</p>

            <div class="space-15"></div>

            <h4>Comprador</h4>
            <table class="billing-address table table-bordered table-striped table-condensed">
                <tbody>
                <tr>
                    <td class="field font-500 text-uppercase">Nombre completo</td>
                    <td>Aníbal Esteban Llanos Prado</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Documento de identidad</td>
                    <td>RUT 16.327.196-6</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Dirección</td>
                    <td>Avenida Libertador Bernardo O'Higgins 1365, dpto. 204, Concepción, Región del Biobío</td>
                </tr>
                </tbody>
            </table>

            <div class="space-15"></div>

            <h4>Despacho</h4>
            <table class="billing-address table table-bordered table-striped table-condensed">
                <tbody>
                <tr>
                    <td class="field font-500 text-uppercase">Nombre completo</td>
                    <td>Aníbal Esteban Llanos Prado</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Dirección</td>
                    <td>Avenida Libertador Bernardo O'Higgins 1365, dpto. 204, Concepción, Región del Biobío</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Opciones de envío</td>
                    <td>Chilexpress, Pagado</td>
                </tr>
                </tbody>
            </table>

            <div class="space-15"></div>

            <h4>Compra</h4>
            <table class="billing-address table table-bordered table-striped table-condensed">
                <tbody>
                <tr>
                    <td class="field font-500 text-uppercase">Camión ciego caminante del norte</td>
                    <td>$15.230</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Ventana sucia abierta grande</td>
                    <td>$5.000</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Estatua de Don Cangrejo</td>
                    <td>$26.300</td>
                </tr>
                <tr class="shipping-row background-gray-85">
                    <td class="field font-500 text-uppercase">Despacho</td>
                    <td>$3.000</td>
                </tr>
                <tr>
                    <td class="field font-700 text-uppercase info">Total compra</td>
                    <td class="info font-700">$49.530</td>
                </tr>
                </tbody>
            </table>

            <div class="space-15"></div>

            <div class="actions text-right">
                <form class="row">
                    <div class="checkbox col-sm-5 col-sm-offset-7">
                        <label class="pull-left">
                            <input type="checkbox"> Declaro que la información en esta página es correcta
                        </label>
                    </div>
                    <div class="checkbox col-sm-5 col-sm-offset-7">
                        <label class="pull-left">
                            <input type="checkbox"> Acepto los términos de venta de Flota Biobío
                        </label>
                    </div>
                    <div class="checkbox col-sm-5 col-sm-offset-7">
                        <label class="pull-left">
                            <input type="checkbox"> Deseo recibir un correo con la confirmación de la venta
                        </label>
                    </div>
                </form>
                <button class="btn btn-warning">Editar datos</button>
                <button class="btn btn-info">Confirmar y seguir</button>
            </div>
        </div>
    </div>
</div>


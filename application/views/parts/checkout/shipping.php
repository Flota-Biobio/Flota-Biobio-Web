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
 * Vista: shipping
 * Vista de la interfaz de confirmación de dirección de envío.
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.2
 * @since   0.5.2
 */
?>
<div class="shipping color-gray-20">
    <div class="container">
        <div class="content">

            <h2 class="font-300">Información de despacho</h2>
            <p>Por favor verifique que la información sea adecuada y que corresponda a la de <strong>despacho</strong>.</p>

            <div class="space-15"></div>

            <h4>Destinatario</h4>
            <table class="billing-address table table-bordered table-striped">
                <tbody>
                <tr>
                    <td class="field font-500 text-uppercase">Nombre completo</td>
                    <td>Aníbal Esteban Llanos Prado</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Región</td>
                    <td>Región del Biobío</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Provincia</td>
                    <td>Provincia del Biobío</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Comuna</td>
                    <td>Concepción</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Calle</td>
                    <td>Avenida Libertador Bernardo O'Higgins</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Número</td>
                    <td>1365</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Departamento</td>
                    <td>204</td>
                </tr>
                </tbody>
            </table>

            <div class="space-15"></div>

            <h4>Opciones de envío</h4>
            <table class="billing-address table table-bordered table-striped">
                <tbody>
                <tr>
                    <td class="field font-500 text-uppercase">Tipo de envío</td>
                    <td>Chilexpress</td>
                </tr>
                <tr>
                    <td class="field font-500 text-uppercase">Cobro del envío</td>
                    <td>Pagado al comprar (Se cobra el envío en esta compra)</td>
                </tr>
                </tbody>
            </table>

            <div class="space-15"></div>

            <div class="actions text-right">
                <a class="btn btn-warning" role="button">Editar datos</a>
                <a href="<?=site_url('checkout/confirm')?>" class="btn btn-info" role="button">Confirmar y seguir</a>
            </div>
        </div>
    </div>
</div>

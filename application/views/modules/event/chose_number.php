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
 * Vista: elegir_numero
 * {VIEW-DESCRIPTION}
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.4
 * @since   0.5.4
 */

$total = 250;
$per_row = 15;
$rows = $total / $per_row;
$sold = array(12,12,18,55,56,102,105,107,109,111,119,156,203,250);

?>
<script type="text/javascript">

    var chosen = [];
    for (var i = 0; i < <?=$total?>; ++i) {
        chosen[i + 1] = 0;
    }

    $(document).ready(
        function () {

            function reverse(s){
                return String(s).split("").reverse().join("");
            }

            function formatPrice (price) {
                return "$" + reverse(reverse(price).match(/(.{1,3})/g).join("."));
            }

            $('.clean-list').click(
                function () {
                    for (var i = 0; i < <?=$total?>; ++i) {
                        chosen[i + 1] = 0;
                    }
                    $('.number').removeClass('chosen');
                    $('.number').addClass('available');
                    refreshList();
                }
            );

            function refreshList() {
                var output = [];
                for (var j = 0; j < chosen.length; ++j) {
                    if (chosen[j] == 1) {
                        output.push(j);
                    }
                }
                $('.list').text(output.join(', '));
                $('.count').text(output.length);
                $('.total').text('Total a pagar: ' + formatPrice(output.length*1000));
            }

            $('.number').click(
                function () {
                    if ($(this).hasClass('available')) {
                        $(this).removeClass('available');
                        $(this).addClass('chosen');
                        chosen[$(this).attr('id')] = 1;
                    } else {
                        $(this).removeClass('chosen');
                        $(this).addClass('available');
                        chosen[$(this).attr('id')] = 0;
                    }
                    refreshList();
                }
            );

            refreshList();
        }
    );
</script>
<div class="chose-number color-gray-20">
    <div class="container">
        <div class="content row">

            <h1 class="font-300 col-sm-12">Sorteo #45 :: Elegir número</h1>
            <div class="space-15 col-sm-12"></div>
            <h4 class="col-sm-12">Instrucciones:</h4>
            <ul class="fa-ul col-sm-12">
                <li><i class="fa-li fa fa-angle-double-right"></i>Haga click en un número para seleccionarlo.</li>
                <li><i class="fa-li fa fa-angle-double-right"></i>Hacer click en un número previamente seleccionado lo des-seleccionará.</li>
                <li><i class="fa-li fa fa-angle-double-right"></i>Al final de la página puede ver el resumen de selección</li>
                <li><i class="fa-li fa fa-angle-double-right"></i>Los números en gris no se encuentran disponibles</li>
            </ul>

            <div class="space-15 col-sm-12"></div>

            <table class="table table-condensed">
                <tbody>
                <?php for ($i = 0; $i < $rows; ++$i): ?>
                    <tr>
                    <?php for ($j = 1; $j <= $per_row; ++$j): ?>
                        <?php if (($per_row * $i) + $j <= $total): ?>
                        <td id="<?=($per_row * $i + $j)?>" class="number text-center <?=in_array(($per_row * $i + $j), $sold)?'unavailable':'available'?>"><?= ($per_row * $i) + $j; ?></td>
                        <?php endif ?>
                    <?php endfor ?>
                    </tr>
                <?php endfor ?>
                </tbody>
            </table>

            <div class="chosen col-sm-12">
                <h3 class="font-300">Seleccionados: <strong class="font-500 list color-main"></strong> (<strong class="count"></strong> en total)</h3>
            </div>
            <div class="actions col-sm-12 text-right">
                <span class="total font-500"></span>
                <button class="btn btn-info">Agregar al carro</button>
                <button class="btn btn-warning clean-list">Borrar seleccionados</button>
            </div>

        </div>
    </div>
</div>

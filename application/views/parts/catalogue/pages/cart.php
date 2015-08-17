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
 * Vista: cart
 * Vista del carro de compras
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.2
 * @since   0.4.3
 *
 * @var array $cart
 */
$total = 0;
foreach ($cart as $product) {
    $total += $product['price'];
}
?>
<div class="cart col-sm-9 ">
    <div class="inner background-gray-98 border-gray-90">

    <?php foreach ($cart as $product): ?>
        <div class="product">
            <button type="button" class="btn btn-danger btn-xs"> X</button>
            <?= $this->assets_manager->img($product['img'], 'catalogue/') ?>
            <div class="title"><?= $product['title'] ?></div>
            <div class="price"><?= '$' . strrev(
                    substr(
                        chunk_split(strrev($product['price']), 3, '.'), 0, -1
                    )
                ); ?></div>
        </div>
    <?php endforeach ?>

    <hr class="background-gray-85">

    <div class="total color-gray-20">
        <div class="title">Total a pagar</div>
        <div class="price"><?= '$' . strrev(
                substr(chunk_split(strrev($total), 3, '.'), 0, -1)
            ); ?></div>
    </div>

    <div class="actions">
        <button type="button" class="btn btn-default">Vaciar carro</button>
        <a href="<?=site_url('checkout/billing')?>" role="button" class="btn btn-primary">Confirmar y pagar</a>
    </div>

    <div class="space-30 col-sm-12"></div>
    <div class="space-30 col-sm-12"></div>

    </div>
</div>

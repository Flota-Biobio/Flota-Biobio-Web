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
 * Vista: catalogue_feed
 * Vista por defecto del catálogo, feed de los últimos productos
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.3
 * @since   0.3.8
 *
 * @var array $products Arreglo con los productos a mostrar
 */
?>
<div class="feed col-sm-9 row color-gray-20">

    <?php foreach ($products as $product): ?>
        <div class="catalogue-product-box col-sm-4">
            <div class="product-hover">
                <span class="title medium-font text-center color-gray-20 font-500"><i>"<?=$product['title']?>"</i></span>
                <span class="author medium-font text-center color-gray-20 font-700"><?=$product['author']?></span>
                <button class="btn btn-warning btn-sm center-block button-shadow" type="button">Ver detalles</button>
            </div>
            <div class="product soft-background" style="background-image: url('<?=$this->assets_manager->asset_url($product['image'])?>');">
                <span class="price font-400"><?='$'.strrev(substr(chunk_split(strrev($product['price']), 3, '.'), 0, -1));?></span>
            </div>
        </div>
    <?php endforeach ?>

    <nav class="pagination-nav col-sm-12 center-block">
        <ul class="pagination">
            <li class="disabled">
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

</div>

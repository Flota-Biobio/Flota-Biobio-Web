<?php
/**
 * Proyecto Flota Biobío
 * Aplicación WEB
 *
 * Prototipo por Aníbal Llanos Prado
 * Basado en el trabajo del equipo de Flota Biobío
 * Entregado y presentado el %FECHA%
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
 * Vista: catalogue
 * {VIEW-DESCRIPTION}
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.3.5
 * @since   0.3.5
 */
?>
<script type="text/javascript">
    $(document).ready(
        function () {
            $("#price").slider({});
        }
    );
</script>
<div class="catalogue">
    <div class="container">
        <div class="catalogue-content row">
            <div class="catalogue-title col-sm-12">
                <h1 class="secondary-color light-font">Catálogo :: Novedades</h1>
            </div>
            <div class="catalogue-menu col-sm-3 condensed-font soft-background">
                <ul class="list-unstyled menu-list light-font">
                    <li class="menu-element secondary-color-dark">
                        <button type="button" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Carro de compras
                        </button>
                    </li>
                    <li class="menu-element soft-color">
                        <button type="button" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Favoritos
                        </button>
                    </li>
                    <li class="menu-element soft-color">
                        <button type="button" class="btn btn-default btn-lg">
                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Historial de compras
                        </button>
                    </li>
                    <li class="menu-label">Filtrar búsqueda</li>
                    <li class="menu-flex">
                        <label for="category" class="bold-text">CATEGORÍA DEL PRODUCTO</label>
                        <select class="form-control" id="category">
                            <option>Artesanía</option>
                            <option>Diseño</option>
                            <option>3</option>
                        </select>
                    </li>
                    <li class="menu-flex row">
                        <label for="price" class="col-sm-12 bold-text">RANGO DE PRECIOS</label>
                        <div class="col-sm-12">
                            <span class="pull-left">$1.000</span>
                            <span class="pull-right">$100.000</span>
                        </div>
                        <input id="price" type="text" class="span2 col-sm-12" value="" data-slider-min="0" data-slider-max="100000" data-slider-step="1000" data-slider-value="[10000,80000]">
                    </li>
                </ul>
                <button type="button" class="btn btn-primary pull-right filter-btn normal-font">Buscar productos</button>
            </div>
            <div class="catalogue-products col-sm-9 row">

                <?php foreach ($products as $product): ?>
                <div class="catalogue-product-box col-sm-4">
                    <div class="catalogue-product soft-background" style="background-image: url('<?=$this->assets_manager->asset_url($product['image'])?>');">
                        <span class="product-title medium-font"><?=$product['title']?></span>
                        <span class="product-author medium-font"><?=$product['author']?></span>
                        <span class="product-price thin-font"><?='$'.strrev(substr(chunk_split(strrev($product['price']), 3, '.'), 0, -1));?></span>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
            <div class="catalogue-pagination col-sm-9 col-sm-offset-3">
                <nav class="pagination-nav">
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
        </div>
    </div>
</div>
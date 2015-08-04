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
 * Vista: product
 * Detalle de un producto del catálogo
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.3.6
 * @since   0.3.6
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
                <h1 class="secondary-color light-font">Catálogo :: Diskette roto con scotch sobre sacapuntas</h1>
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
            <div class="catalogue-product-detail col-sm-9 row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php $c = 0; $first = true; foreach ($slides as $slide): ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?=$c++?>"<?php if ($first) {$first = false; echo ' class="active"';}?>></li>
                        <?php endforeach ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php $first = true; foreach ($slides as $slide): ?>
                        <div class="item<?php if ($first) {$first = false; echo ' active';}?>">
                            <?=$this->assets_manager->img($slide['shrunk'], '', $slide['title'])?>
                            <div class="carousel-caption">
                                <?=$slide['caption']?>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="product-buttons col-sm-12">
                    <div class="product-buttons-inner pull-right">
                        <div class="product-price-detail">Valor del producto: <strong>$52.200</strong></div>
                        <button type="button" class="btn btn-default">Agregar a favoritos</button>
                        <button type="button" class="btn btn-danger">Agregar al carro</button>
                    </div>
                </div>

                <div class="product-detail col-sm-9">
                    <div class="product-detail-inner secondary-background-lighter light-font">
                        <table class="table product-detail-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>DETALLES DEL PRODUCTO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="criteria medium-font">Materiales</td>
                                    <td>Diskette en desuso, cinta adhesiva transparente, sacapuntas verde</td>
                                </tr>
                                <tr>
                                    <td class="criteria medium-font">Dimensiones</td>
                                    <td>17cm alto, 15cm largo, 0.3cm ancho (1cm en la base)</td>
                                </tr>
                                <tr>
                                    <td class="criteria medium-font">Soporte</td>
                                    <td>No se especifica</td>
                                </tr>
                                <tr>
                                    <td class="criteria medium-font">Descripción</td>
                                    <td>Composición neoliberal suicídica con elementos
                                        tecnológicos de antaño. Expone los matices dolorosos
                                        de los años tempranos de la computación. Alegoría
                                        social capitalista.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="artist-title col-sm-3 secondary-background-dark soft-color text-center thin-font">
                    Malaquián Botella
                </div>

                <div class="artist-detail col-sm-3">
                    <div class="artist-detail-inner row">
                        <div class="artist-image col-sm-12">
                            <?=$this->assets_manager->img('catalogue/p/artista.png'); ?>
                        </div>
                        <div class="artist-resume col-sm-12">
                            <dl>
                                <dt>Localidad</dt>
                                <dd>Curanilahue</dd>
                                <dt>Técnica</dt>
                                <dd>Diskettes y pendrives</dd>
                                <dt>Obras publicadas</dt>
                                <dd>5</dd>
                            </dl>
                            <button type="button" class="btn btn-default btn-sm pull-right">Ver perfil</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 space-30"></div>

            </div>
        </div>
    </div>
</div>

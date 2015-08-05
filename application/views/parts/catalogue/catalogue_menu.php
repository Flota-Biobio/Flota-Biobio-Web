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
 * Vista: catalogue_menu
 * Vista del menú del catálogo
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4
 * @since   0.3.8
 */
?>
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

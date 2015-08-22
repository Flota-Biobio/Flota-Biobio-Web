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
 * @version 0.5.1
 * @since   0.3.6
 *
 * @var array $slides Arreglo con las imágenes para mostrar en el slider
 * @var array $user Arreglo con los datos del artista
 */
?>

<div class="product col-sm-9 row">
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

    <div class="actions col-sm-12">
        <div class="inner pull-right">
            <div class="price">Valor del producto: <strong>$52.200</strong></div>
            <button type="button" class="btn btn-default">Agregar a favoritos</button>
            <button type="button" class="btn btn-danger">Agregar al carro</button>
        </div>
    </div>

    <div class="detail col-sm-8">
        <h2 class="font-300 head">Detalles del producto</h2>
        <div class="inner secondary-background-lighter light-font border-gray-90">

            <span class="field font-500">materiales</span>
            <span class="value">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>

            <span class="field font-500">dimensiones</span>
            <span class="value">Aenean commodo ligula eget dolor.</span>

            <span class="field font-500">soporte</span>
            <span class="value">Aenean massa.</span>

            <span class="field font-500">descripción</span>
            <span class="value">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>

        </div>
    </div>

    <div class="artist border-gray-90 col-sm-4">
        <div class="photo">
            <?=$this->assets_manager->img($user['img'], 'dummy/', '', '', 'img-circle shadowed'); ?>
        </div>
        <div class="details">
            <span class="name font-400 color-gray-20"><?=$user['name']?></span>
            <button class="btn btn-info btn-sm center-block">Ver perfil</button>
            <hr>
            <ul class="links list-unstyled">
                <?php foreach ($user['links'] as $link): ?>
                    <li>
                        <i class="fa fa-<?=$link['category']?> fa-2x <?=$link['color']?>"></i>&nbsp;&nbsp;&nbsp;
                        <a href="<?=$link['link']?>"><?=$link['label']?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

    <div class="col-sm-12 space-30"></div>
</div>
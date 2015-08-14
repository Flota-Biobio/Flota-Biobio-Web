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
 * Vista: slider
 * Vista que muestra el slider de la página principal.
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5
 * @since   0.1.4
 *
 * @var array $slider_info
 */
?>
<div class="slider">
    <div class="container">
        <div class="content row shadowed border-gray-85 background-gray-95 no-border-bottom no-border-top">

            <div id="home-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php foreach ($slider_info as $pos => $slide): ?>
                    <li data-target="#home-slider" <?=$pos==0 ? 'class="active' : ''?> data-slide-to="<?=$pos?>"></li>
                    <?php endforeach; ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <?php $count = 0; foreach ($slider_info as $pos => $slide): ?>
                    <div class="item<?=$pos==0 ? ' active' : ''?>">
                        <a href="<?=$slide['link']?>" target="_blank">
                            <?= $this->assets_manager->img($slide['img'], 'slider/', $slide['title'], $slide['title'], 'slide') ?>
                        </a>
                        <div class="carousel-caption">
                            <?=$slide['title']?>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
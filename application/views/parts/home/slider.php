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
 * @version 0.4.6
 * @since   0.1.4
 *
 * @var array $slider_info
 */
?>
<div class="slider">
    <div class="container">
        <div class="slider-content row shadowed border-gray-85 background-gray-95 no-border-bottom">
            <div id="sliderFrame">
                <div id="slider">
                    <?php foreach ($slider_info as $slide): ?>
                    <a href="<?=$slide['link']?>" target="_blank">
                        <img src="<?=base_url('assets/images/slider/'.$slide['img'])?>"
                             alt="<?=$slide['title']?>" />
                    </a>
                    <?php endforeach; ?>
                </div>
                <!--thumbnails-->
                <div id="thumbs">
                    <?php foreach ($slider_info as $slide): ?>
                    <div class="thumb">
                        <div class="frame">
                            <img src="<?=base_url('assets/images/slider/'.$slide['thumb'])?>" />
                        </div>
                        <div class="thumb-content">
                            <p><?=$slide['title']?></p><?=$slide['detail']?>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
                <div style="clear:both;height:0;"></div>
            </div>
        </div>
    </div>
</div>
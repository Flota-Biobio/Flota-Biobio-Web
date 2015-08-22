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
 * @deprecated  Será eliminado en la versión 0.5
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Vista: blog-cm
 * Vista que genera el blog de inicio y la sección de community management
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.6
 * @since   0.3.4
 *
 * @var array $posts
 */
?>
<div class="blog-cm color-gray-20">
    <div class="space-15"></div>
    <div class="container">
        <div class="blog-cm-content row">
            <div class="blog col-sm-8 background-gray-95 border-gray-90">
                <div class="row">
                    <h2 class="blog-title col-sm-12 no-margin-bottom">Actividad reciente</h2>
                    <?php foreach ($posts as $post): ?>
                    <div class="post soft-background col-sm-12">
                        <div class="separator"></div>
                        <h3 class="title"><?=$post['title']?></h3>
                        <span class="author"><i class="fa fa-user"></i> <?=$post['author']?></span>
                        <span class="time"><i class="fa fa-clock-o"></i> <?=$post['date']?></span>
                        <div class="separator"></div>
                        <?= $this->assets_manager->img($post['img']) ?>
                        <div class="separator"></div>
                        <div class="space-15"></div>
                        <span class="desc"><?=$post['desc']?></span>
                        <div class="space-15"></div>
                        <div class="button-div">
                            <button class="btn btn-info">Leer más <i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="cm col-sm-4">
                <div class="row">
                    <div class="cm-col col-sm-12 background-gray-95 border-gray-90">

                        <div class="cm-row">
                            <div class="cm-row-inner">
                                <h2 class="blog-title">Comunidad</h2>
                                <div class="separator"></div>
                            </div>
                        </div>

                        <div class="cm-row">
                            <div class="cm-row-inner">
                                <?=$this->assets_manager->img('dummy/home_facebook_dummy.png')?>
                                <div class="separator"></div>
                            </div>
                        </div>

                        <div class="cm-row">
                            <div class="cm-row-inner">
                                <?=$this->assets_manager->img('dummy/home_twitter_dummy.png')?>
                                <div class="separator"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


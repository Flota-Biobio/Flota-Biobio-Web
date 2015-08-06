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
 * Vista: profile
 * Vista del perfil de un usuario
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.1
 * @since   0.4.1
 */
?>
<div class="profile">
    <div class="container">
        <div class="profile-content row soft-background">

            <div class="user-col col-sm-4">

                <div class="user-badge">
                    <div class="badge-img">
                        <?=$this->assets_manager->img('perfil.png', 'user/', 'Jennifer Lawrance', '', 'img-circle')?>
                    </div>
                    <div class="badge-data">
                        <span class="user-name condensed-font">Jennifer Lawrance</span>
                        <span class="user-sub-name thin-font secondary-color">Artesana</span>
                        <hr>
                        <ul class="link-list list-unstyled normal-font">
                            <li>
                                <i class="fa fa-facebook-official fa-2x color-facebook"></i>&nbsp;&nbsp;&nbsp;
                                <a href="#">facebook.com/jenny_lapulenta</a>
                            </li>
                            <li>
                                <i class="fa fa-twitter fa-2x color-twitter"></i>&nbsp;&nbsp;&nbsp;
                                <a href="#">@jenny_lapulenta</a>
                            </li>
                            <li>
                                <i class="fa fa-globe fa-2x"></i>&nbsp;&nbsp;&nbsp;
                                <a href="#">Página personal</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="user-details light-font">
                    <dl>
                        <dt>NOMBRE REAL</dt>
                        <dd>Jennifer Lawrance</dd>
                        <dt>NOMBRE ARTÍSTICO</dt>
                        <dd>La loquita del arco</dd>
                        <dt>PROFESIÓN</dt>
                        <dd>Soldadora de alambres</dd>
                        <dt>RESIDENCIA</dt>
                        <dd>Penco chico</dd>
                        <dt>AUTO-DESCRIPCIÓN</dt>
                        <dd>Soy latina de corazón, me agrada jugar con el aire para
                        provocar terror en el aire, el tiempo me ha encontrado
                        jugando con su hijo, por lo que ahora mato gente en un
                        programa de la tele.</dd>
                    </dl>
                </div>

            </div>

            <div class="main-col row col-sm-8">

                <div class="row-title col-sm-12">
                    <h3>Obras populares</h3>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p9.png')?>');"></div>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p8.png')?>');"></div>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p7.png')?>');"></div>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p6.png')?>');"></div>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p4.png')?>');"></div>
                </div>

                <div class="space-30 col-sm-12"></div>

                <div class="row-title col-sm-12">
                    <h3>Actividad reciente</h3>
                </div>

                <div class="feed-post col-sm-12 shadow-post">
                    <?=$this->assets_manager->img('sold.png', 'user/feed/', '')?>
                    <div class="feed-post-body">
                        <span class="feed-post-date">05 de Junio de 2015</span>
                        <span class="feed-post-message">Se ha concretado una venta
                        por el artículo <strong>Estampida de roedores</strong>.</span>
                    </div>
                </div>
                <div class="feed-post col-sm-12 shadow-post">
                    <?=$this->assets_manager->img('new-photos.png', 'user/feed/', '')?>
                    <div class="feed-post-body">
                        <span class="feed-post-date">01 de Junio de 2015</span>
                        <span class="feed-post-message">Se agregaron fotografías para
                            el artículo <strong>Miguel me cae mal</strong>.</span>
                    </div>
                </div>
                <div class="feed-post col-sm-12 shadow-post">
                    <?=$this->assets_manager->img('new-product.png', 'user/feed/', '')?>
                    <div class="feed-post-body">
                        <span class="feed-post-date">21 de Mayo de 2015</span>
                        <span class="feed-post-message">Se ha publicado un nuevo
                            artículo en el catálogo con el nombre
                            <strong>Estampida de roedores</strong>.</span>
                    </div>
                </div>
                <div class="feed-post col-sm-12 shadow-post">
                    <?=$this->assets_manager->img('star.png', 'user/feed/', '')?>
                    <div class="feed-post-body">
                        <span class="feed-post-date">01 de Mayo de 2015</span>
                        <span class="feed-post-message">Se ha alcanzado los
                            <strong>100</strong> favoritos para todos los productos
                            del artista (en total).</span>
                    </div>
                </div>
                <div class="feed-post col-sm-12 shadow-post">
                    <?=$this->assets_manager->img('published.png', 'user/feed/', '')?>
                    <div class="feed-post-body">
                        <span class="feed-post-date">22 de Abril de 2015</span>
                        <span class="feed-post-message">Se ha publicado una nueva
                            entrada en el blog de Flota Biobío.</span>
                    </div>
                </div>
                <div class="feed-post col-sm-12 shadow-post">
                    <?=$this->assets_manager->img('created.png', 'user/feed/', '')?>
                    <div class="feed-post-body">
                        <span class="feed-post-date">31 de Diciembre de 2014</span>
                        <span class="feed-post-message">Se ha creado el artista.</span>
                    </div>
                </div>

            </div>

            <div class="space-30 col-sm-12"></div>

        </div>
    </div>
</div>



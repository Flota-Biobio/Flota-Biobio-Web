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
 * Vista: header
 * Vista del header global a ser utilizado en la mayoría de las vistas
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.2
 * @since   0.1.4
 */
?>
<div class="header background-main">
    <div class="container">
        <div class="content">
            <nav class="navbar navbar-default background-main font-300">

                <div class="container-fluid">
                    <div class="navbar-header logo">
                        <a class="navbar-brand logo" href="#">
                            <?=$this->assets_manager->img('logo_horizontal.png', '', 'Flota Biobio')?>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <div class="session btn-group navbar-right" role="group" aria-label="session">
                            <button type="button" class="btn btn-info navbar-btn">Aníbal Llanos Prado</button>
                            <button type="button" class="btn btn-info navbar-btn" onclick="location.href='<?=site_url('catalogue/cart')?>';">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button id="user-options" type="button" class="btn btn-info navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="user-options">
                                <li><a href="<?=site_url('user/profile/1')?>">Usuario</a></li>
                                <li><a href="<?=site_url('user/profile/2')?>">Artista</a></li>
                                <li><a href="<?=site_url('admin')?>">Administrar</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Salir</a></li>
                            </ul>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="link"><a href="<?=site_url()?>">Home</a></li>
                            <li class="dropdown">
                                <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Catálogo <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=site_url('catalogue')?>">Novedades</a></li>
                                    <li><a href="<?=site_url('catalogue/product/2')?>">Detalle</a></li>
                                    <li><a href="<?=site_url('catalogue/cart')?>">Carro</a></li>
                                </ul>
                            </li>
                            <li class="link"><a href="#">Sorteos</a></li>

                            <li class="dropdown">
                                <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Nosotros <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Proyecto</a></li>
                                    <li><a href="#">Equipo</a></li>
                                    <li><a href="#">Legal</a></li>
                                </ul>
                            </li>
                            <li class="link"><a href="#">Contacto</a></li>
                        </ul>

                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>

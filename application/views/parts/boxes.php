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
 * Vista: boxes
 * {VIEW-DESCRIPTION}
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.1.6
 * @since   0.1.6
 */
?>
<div class="boxes">
    <div class="container">
        <div class="boxes-content row soft-background">
            <div class="col-lg-4">
                <div class="box box-1">
                    <div class="box-img">
                        <?=$this->assets_manager->img('auction-inverse-icon.png', '', 'Flota Biobío: Subasta')?>
                    </div>
                    <div class="box-title">
                        <span>Subastas</span>
                    </div>
                    <div class="box-detail">
                        <p>Participa de las subastas de Flota Biobío para comprar productos de calidad y a la vez apoyar a los artistas locales.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box box-2">
                    <div class="box-img">
                        <?=$this->assets_manager->img('ticket-inverse-icon.png', '', 'Flota Biobío: Rifa')?>
                    </div>
                    <div class="box-title">
                        <span>Rifas</span>
                    </div>
                    <div class="box-detail">
                        <p>Compra tu número y participa del sorteo de fabulosas obras de arte! </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box box-3">
                    <div class="box-img">
                        <?=$this->assets_manager->img('shop-inverse-icon.png', '', 'Flota Biobío: Tienda')?>
                    </div>
                    <div class="box-title">
                        <span>Catálogo</span>
                    </div>
                    <div class="box-detail">
                        <p>Navega a través de nuestros productos y llévate los que más te gusten. Todos nuestros productos son artesanales y de primera mano.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

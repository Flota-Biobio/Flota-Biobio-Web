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
 * Vista: nav_menu
 * Vista del menu de navegación. Se utiliza en la mayoría de las vistas.
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.2
 * @since   0.3.4
 */
?>
<div class="nav-menu">
    <div class="container">
        <div class="nav-menu-content row secondary-background-dark soft-color light-font">
            <div class="logo-box col-sm-12">
                <ul class="list-unstyled menu-lista list-inline">
                    <li id="" class="menu-element">Home</li>
                    <li id="user/profile/2" class="menu-element">Usuario</li>
                    <li id="user/profile/1" class="menu-element">Artista</li>
                    <li id="catalogue" class="menu-element">Catálogo</li>
                    <li id="catalogue/product/1" class="menu-element">Producto</li>
                    <li id="admin" class="menu-element">Administrar</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(
        function() {
            $('.menu-element').click(
                function() {
                    window.location = "<?=base_url()?>" + "index.php/" + $(this).attr('id');
                }
            );
        }
    );
</script>
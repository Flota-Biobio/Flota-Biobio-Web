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
 * Vista: pages_edit
 * Vista de edición de una página
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.4
 * @since   0.4.4
 */
?>
<script type="text/javascript">
    $(document).ready( function() {
        $("#txtEditor").Editor();
    });
</script>
<h1>Editar página</h1><br>
<h3>Contenido de la página</h3>
<div id="editor"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 nopadding">
            <textarea id="txtEditor" title=""></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="space-30"></div>
            <button class="btn btn-primary pull-right">Guardar cambios</button>
        </div>
    </div>
</div>
<h3>Configuración de la página</h3>
<form>
    <table class="table page-config">
        <thead>
        <tr>
            <th></th>
            <th class="right-column"></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>Estado</td>
                <td class="right-column">
                    <select class="form-control" title="">
                        <option>Borrador</option>
                        <option>Pública</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td class="right-column">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Ingrese un nombre"
                        value="Equipo">
                </td>
            </tr>
            <tr>
                <td>Descripción</td>
                <td class="right-column">
                    <textarea class="form-control" rows="3" title="">Detalles del equipo</textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td class="right-column">
                    <button type="button" class="btn btn-primary btn- normal-font">
                        Guardar configuración
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
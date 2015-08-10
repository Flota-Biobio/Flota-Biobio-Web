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
 * @deprecated  Será eliminado en versión 0.4
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Vista: admin_body
 * Vista del cuerpo de la interfaz de administración (sección)
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.2
 * @since   0.2.1
 */
?>
<h1>Páginas</h1><br>
<div class="secondary-color normal-font">
    <p>En este lugar se configuran las páginas estáticas del sitio. Las páginas
    estáticas corresponden a las vistas que no cambian comunmente en el tiempo
    y tienen un carácter as bien informativo. Ejemplo de estas páginas son el
    formulario de contacto, misión-visión, el equipo, etc.</p>
</div>
<div class="space-30"></div>
<h3>Lista de páginas existentes</h3>
<table class="table page-list table-hover">
    <thead>
        <tr>
            <th></th>
            <th>Página</th>
            <th>Descripción</th>
            <th class="text-center">Posición</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input class="text-center" type="checkbox" name="" title="">
            </td>
            <td>Equipo</td>
            <td>Detalles del equipo</td>
            <td class="text-center">1</td>
            <td class="text-center">Publicada</td>
            <td class="text-center">Opciones</td>
        </tr>
        <tr>
            <td><input class="text-center" type="checkbox" name="" title="">
            </td>
            <td>Organización</td>
            <td>Detalles de la organización</td>
            <td class="text-center">2</td>
            <td class="text-center">Publicada</td>
            <td class="text-center">Opciones</td>
        </tr>
        <tr>
            <td><input class="text-center" type="checkbox" name="" title="">
            </td>
            <td>Contacto</td>
            <td>Formulario de contacto</td>
            <td class="text-center">3</td>
            <td class="text-center">Publicada</td>
            <td class="text-center">Opciones</td>
        </tr>
    </tbody>
</table>
<br>
<div class="text-right col-lg-12">
    <button type="button" class="btn btn-primary btn- normal-font">Agregar nueva página</button>
</div>

<div class="space-30"></div>
<h3>Configuración de páginas</h3>

<form>
    <table class="table config">
        <thead>
        <tr>
            <th></th>
            <th class="right-column"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Mostrar link al "Inicio" en el menu</td>
            <td class="right-column"><input type="checkbox" name="" title="">
            </td>
        </tr>
        <tr>
            <td>Nombre del link al "Inicio"</td>
            <td class="right-column"><input type="text" class="form-control"
                                            placeholder="Ingrese un nombre">
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
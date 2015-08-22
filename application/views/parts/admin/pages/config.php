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
 * @version 0.6
 * @since   0.2.1
 *
 * @var array $pages
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
        <?php foreach ($pages as $pos => $page): ?>
        <tr>
            <td><input class="text-center" type="checkbox" name="" title="">
            </td>
            <td>
                <?php
                    if (empty($page['link'])) {
                        echo '<strong>'.ucfirst($page['page']).'</strong>';
                    } else {
                        echo '<a class="styled" href="'.site_url(ucfirst($page['link'])).'">'.ucfirst($page['page']).'</a>';
                    }
                ?>
            </td>
            <td><?=$page['desc']?></td>
            <td class="text-center"><?=$pos + 1?></td>
            <td class="text-center"><?=ucfirst($page['state'])?></td>
            <td class="text-center">
                <div class="<?=$page['type']==0?'disabled-icon':'icon icon-up'?>">
                    <i class="fa fa-arrow-up"></i>
                </div>
                <div class="<?=$page['type']==0?'disabled-icon':'icon icon-down'?>">
                    <i class="fa fa-arrow-down"></i>
                </div>
                <div class="<?=$page['type']<=1?'disabled-icon':'icon icon-edit'?>">
                    <i class="fa fa-pencil-square-o"></i>
                </div>
                <div class="<?=$page['type']<=1?'disabled-icon':'icon icon-delete'?>">
                    <i class="fa fa-times-circle"></i>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
        <tr class="no-hover">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button type="button" class="btn btn-danger btn- normal-font">Agregar nueva página</button>
            </td>
        </tr>
    </tbody>
</table>

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
            <td class="right-column"><input type="checkbox" name="" title="" checked>
            </td>
        </tr>
        <tr>
            <td>Nombre del link al "Inicio"</td>
            <td class="right-column">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Ingrese un nombre"
                    value="Inicio">
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="right-column">
                <button type="button" class="btn btn-danger btn- normal-font">
                    Guardar configuración
                </button>
            </td>
        </tr>
        </tbody>
    </table>
</form>
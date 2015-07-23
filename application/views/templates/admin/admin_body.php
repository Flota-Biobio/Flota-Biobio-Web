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
 * Vista: admin_body
 * {VIEW-DESCRIPTION}
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.2.1
 * @since   0.2.1
 */

// Temporary menu object
$menu = array(
    'administración general' => array(
        array(
            'title'    => 'resumen',
            'link'     => '#',
            'children' => array()
        ),
        array(
            'title'    => 'configuración básica',
            'link'     => '#',
            'children' => array(
                array(
                    'title' => 'General 1',
                    'link'  => '#'
                ),
                array(
                    'title' => 'General 2',
                    'link'  => '#'
                )
            )
        )
    ),
    'partes' => array(
        array(
            'title'    => 'slider',
            'link'     => '#',
            'children' => array()
        )
    ),
    'Otros' => array(
        array(
            'title'    => 'otra wea',
            'link'     => '#',
            'children' => array()
        ),
        array(
            'title'    => 'otra wea mas',
            'link'     => '#',
            'children' => array()
        )
    )
);

?>
<div class="admin-body">
    <div class="container">
        <div class="admin-body-content row soft-background">
            <div class="col-lg-3 left-menu">
                <ul class="group-list list-unstyled">
                    <?php foreach ($menu as $group => $cats): ?>
                    <ul class="list-unstyled">
                        <li class="group-name padded"><?=$group?></li>
                        <li>
                            <?php foreach ($cats as $cat): ?>
                            <ul class="category-list list-unstyled">
                                <li class="category-name hoverable">
                                    <a href='<?=$cat['link']?>'>
                                        <?=$cat['title']?>
                                    </a>
                                </li>
                                <li>
                                    <ul class="element-list list-unstyled">
                                        <?php foreach ($cat['children'] as $child): ?>
                                        <li class="element hoverable">
                                            <a href='<?=$child['link']?>'>
                                                <?=$child['title']?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                            <?php endforeach; ?>
                        </li>
                    </ul>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-9 admin-content">
                <?=$content?>
            </div>
        </div>
    </div>
</div>
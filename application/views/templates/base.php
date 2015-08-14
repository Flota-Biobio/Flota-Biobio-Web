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
 * Vista: base
 * Template básico
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.6
 * @since   0.2.3
 *
 * @var string $title Título de la página
 * @var string $resources Recursos a incorporar
 * @var string $content El contenido de la página
 * @var array $breadcrumb_position Indica la posición de la navegación
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <?=$this->assets_manager->favicon();?>
    <?=$resources?>
</head>
<body class="background-white">
    <?=$this->load->view('parts/base/header', array(), true)?>
    <?=$this->load->view('parts/base/nav_menu', array(), true)?>
    <?=$this->load->view('parts/base/breadcrumb', $breadcrumb_position, true)?>
    <?=$content?>
    <?=$this->load->view('parts/base/footer', array(), true)?>
</body>
</html>
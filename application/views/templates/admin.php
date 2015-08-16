<?php
/**
 * Proyecto Flota Biobío
 * Aplicacion WEB
 *
 * Prototipo por Aníbal Llanos Prado
 * Basado en el trabajo del equipo de Flota Biobío
 *
 * Los archivos incluidos en el presente proyecto, si bien fueron implementados
 * y diseñados (en su forma) por Aníbal Llanos Prado, sus derechos de propiedad
 * se declaran por el mismo como propiedad de la organizacion presente del
 * equipo de Flota Biobío, propiedad que será transferida a quienes cumplan la
 * anteriormente declarada condición.
 *
 * @copyright   Copyright 2015 Flota Biobio
 * @license     Apache License, Version 2.0
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Vista: admin
 * Template para las páginas de administración
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.1
 * @since   0.2.0
 *
 * @var string $title Título de la página
 * @var string $menu Menu de navegación de administración
 * @var string $resources Recursos a incorporar
 * @var string $admin_menu Menu de administración
 * @var string $content El contenido de la página
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700'
        rel='stylesheet' type='text/css'>
    <title><?=$title?></title>
    <?=$resources?>
</head>
<body class="background-gray-95">
<?= $this->load->view('parts/admin/header', array(), true) ?>
<div class="admin-body">
    <div class="container-fluid">
        <div class="menu background-main">
            <?= $menu ?>
        </div>
        <div class="content">
            <?= $content ?>
        </div>
    </div>
</div>
<?=$this->load->view('parts/base/footer', array(), true)?>
</body>
</html>

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
 * Vista: catalogue
 * Vista que genera el catálogo completo
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.1
 * @since   0.3.5
 *
 * @var string $title Título de la página
 * @var string $resources Recursos a incorporar en el head
 * @var string $cat_title Título de la ventana del catálogo
 * @var string $menu Menu del catálogo
 * @var string $content Contenido de la vista principal del catálogo
 * @var array $breadcrumb_position Indica la posición de la navegación
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <?=$resources?>
</head>
<body>
<?=$this->load->view('parts/base/header', array(), true)?>
<?=$this->load->view('parts/base/breadcrumb', $breadcrumb_position, true)?>
<script type="text/javascript">
    $(document).ready(
        function () {
            $("#price").slider({});
        }
    );
</script>
<div class="catalogue">
    <div class="container">
        <div class="catalogue-content row">
            <div class="catalogue-title col-sm-12">
                <h1 class="color-gray-20 font-300">Catálogo :: <?=$cat_title?></h1>
            </div>
            <?=$menu?>
            <?=$content?>
        </div>
    </div>
</div>
<?=$this->load->view('parts/base/footer', array(), true)?>
</body>
</html>
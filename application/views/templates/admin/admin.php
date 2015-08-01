<?php
/**
 * Proyecto Flota Biobío
 * Aplicacion WEB
 *
 * Prototipo por Aníbal Llanos Prado
 * Basado en el trabajo del equipo de Flota Biobío
 * Entregado y presentado el %FECHA%
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
 * @version 0.2.0
 * @since   0.2.0
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <?=$resources?>
</head>
<body>
<?=$admin_header?>
<div class="admin-body">
    <div class="container">
        <div class="admin-content row">
            <div class="admin-menu col-lg-3 secondary-background normal-font">
                <?=$admin_menu?>
            </div>
            <div class="admin-main col-lg-9">
                <?=$content?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

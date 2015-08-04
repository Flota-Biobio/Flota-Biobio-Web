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
 * @version 0.2.3
 * @since   0.2.3
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <?=$resources?>
</head>
<body>
<?=$content?>
</body>
</html>
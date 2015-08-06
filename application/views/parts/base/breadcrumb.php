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
 * Vista: breadcrumb
 * Vista del indicador de posición en la navegación
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.2
 * @since   0.4.2
 *
 * @var array $position
 */
?>
<?php if ($position): ?>
<div class="breadcrumb-row">
    <div class="container">
        <div class="breadcrumb-row-content row soft-background">
            <ol class="breadcrumb">
                <?php foreach ($position as $step): ?>
                    <li<?= empty($step['active']) ? '' : ' class="active"' ?>>
                        <a href="<?= $step['link'] === false ? '#' : base_url('index.php').'/'.$step['link'] ?>">
                            <?= $step['label'] ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ol>
        </div>
    </div>
</div>
<?php endif ?>
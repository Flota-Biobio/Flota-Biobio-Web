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
 * @deprecated  Se eliminará en versión 0.4
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Vista: admin_menu
 * Vista del menú de administración
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.3
 * @since   0.3.0
 *
 * @var array $menu
 */
$link_count = 0;
$links = array();
?>

<ul class="menu-list list-unstyled">
    <?php foreach ($menu as $category => $elements): ?>
        <li class="category secondary-background-dark"
            id="<?= $category ?>"><?= $category ?></li>
        <?php foreach ($elements as $element => $data): ?>
            <li
                class="element <?= $category ?> text-capitalize"
                <?php
                if ($data['info']['link'] != '#') {
                    echo 'id="link_' . $link_count++ . '"';
                    array_push($links, $data['info']['link']);
                }
                ?>
                id="<?= $element ?>"
                ><?= $data['info']['label'] ?></li>
            <?php foreach ($data['children'] as $label => $link): ?>
                <li
                    class="sub-element <?= $element ?> secondary-background-light secondary-color-dark"
                    <?php
                    if ($link != '#') {
                        echo 'id="link_' . $link_count++ . '"';
                        array_push($links, $link);
                    }
                    ?>
                    ><?= $label ?></li>
            <?php endforeach ?>
        <?php endforeach ?>
    <?php endforeach ?>
</ul>

<?php

foreach ($links as $id => $link) {
    array_push($link, $id . ':"' . $link . '"');
}

?>

<script type="text/javascript">

    var links = {
        <?= join(",\n", $links) ?>
    };

    $(document).ready(function () {

        var element = $(".element");
        var sub_element = $(".sub-element");
        sub_element.hide();

        element.hover(
            function () {
                $(this).removeClass("secondary-background-dark");
                $(this).addClass("main-background-dark");
                $(this).addClass("soft-color");
                $(this).addClass("element-hover");
            },
            function () {
                $(this).removeClass("main-background-dark");
                $(this).addClass("secondary-background-dark");
                $(this).removeClass("soft-color");
                $(this).removeClass("element-hover");
            }
        );
        sub_element.hover(
            function () {
                $(this).addClass("sub-element-hover");
            },
            function () {
                $(this).removeClass("sub-element-hover");
            }
        );

        $(".clickable").click(function () {

        });

        element.click(
            function () {
                var parent = $(this).attr('id');
                if ($(this).hasClass("expanded")) {
                    $(this).removeClass("expanded");
                    $(this).removeClass("element-hover");
                    $('.' + parent).hide();
                } else {
                    $('.sub-element').hide();
                    $(this).addClass("expanded");
                    $(this).addClass("element-hover");
                    $('.' + parent).show();
                }
            }
        );

    });

</script>

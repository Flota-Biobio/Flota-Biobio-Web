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
 * Class Fbb_catalogue_model
 * Modelo de CodeIgniter
 * 
 * Modelo para el catálogo
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.6
 * @since   0.4.5
 */
class Fbb_catalogue_model extends CI_Model
{


    public function get_product_slider($id)
    {
        return array(
            array(
                'src' => 'dummy/obra_full_dummy.png',
                'shrunk' => 'dummy/obra_full_dummy.png',
                'title' => 'Obra de ejemplo',
                'caption' => 'Leyenda de la obra',
                'dummy' => $id
            ),
            array(
                'src' => 'dummy/obra_full_dummy.png',
                'shrunk' => 'dummy/obra_full_dummy.png',
                'title' => 'Obra de ejemplo',
                'caption' => 'Leyenda de la obra',
                'dummy' => $id
            ),
            array(
                'src' => 'dummy/obra_full_dummy.png',
                'shrunk' => 'dummy/obra_full_dummy.png',
                'title' => 'Obra de ejemplo',
                'caption' => 'Leyenda de la obra',
                'dummy' => $id
            ),
            array(
                'src' => 'dummy/obra_full_dummy.png',
                'shrunk' => 'dummy/obra_full_dummy.png',
                'title' => 'Obra de ejemplo',
                'caption' => 'Leyenda de la obra',
                'dummy' => $id
            ),
            array(
                'src' => 'dummy/obra_full_dummy.png',
                'shrunk' => 'dummy/obra_full_dummy.png',
                'title' => 'Obra de ejemplo',
                'caption' => 'Leyenda de la obra',
                'dummy' => $id
            ),
            array(
                'src' => 'dummy/obra_full_dummy.png',
                'shrunk' => 'dummy/obra_full_dummy.png',
                'title' => 'Obra de ejemplo',
                'caption' => 'Leyenda de la obra',
                'dummy' => $id
            )
        );
    }

    /**
     * Obtiene los últimos productos añadidos al catálogo.
     *
     * @param int $offset Indica el offset de los resultados
     * @param int $size   Indica la cantidad de elementos a recuperar
     *
     * @return array Los últimos productos
     *
     * @access     protected
     * @since      0.3.6
     */
    public function get_feed($offset, $size)
    {

        return array(
            array(
                'image' => 'images/dummy/obra_thumb1_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb2_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb3_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb4_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb5_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb6_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb7_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb8_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb9_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb10_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb11_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/dummy/obra_thumb12_dummy.png',
                'title' => 'Título de la obra',
                'author' => 'Autor',
                'price' => '12345',
                'dummy' => $offset + $size
            ),
        );
    }

    public function get_cart()
    {
        return array(
            array(
                'img' => 'obra_thumb3_dummy.png',
                'type' => 'artesanía',
                'title' => 'Título de la obra #1',
                'price' => '12345'
            ),
            array(
                'img' => 'obra_thumb6_dummy.png',
                'type' => 'artesanía',
                'title' => 'Título de la obra #2',
                'price' => '12345'
            ),
            array(
                'img' => 'obra_thumb9_dummy.png',
                'type' => 'diseño',
                'title' => 'Título de la obra #3',
                'price' => '12345'
            )
        );
    }

}
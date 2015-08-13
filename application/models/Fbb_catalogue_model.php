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
 * @version 0.4.5
 * @since   0.4.5
 */
class Fbb_catalogue_model extends CI_Model
{


    public function get_product_slider($id)
    {
        return array(
            array(
                'src' => 'catalogue/p/p.jpg',
                'shrunk' => 'catalogue/p/pc.png',
                'title' => 'Foto 1',
                'caption' => 'Frontal',
                'dummy' => $id
            ),
            array(
                'src' => 'catalogue/p/p1.jpg',
                'shrunk' => 'catalogue/p/p1c.png',
                'title' => 'Foto 2',
                'caption' => 'Picado'
            ),
            array(
                'src' => 'catalogue/p/p2.jpg',
                'shrunk' => 'catalogue/p/p2c.png',
                'title' => 'Foto 3',
                'caption' => 'Muy picado'
            ),
            array(
                'src' => 'catalogue/p/p3.jpg',
                'shrunk' => 'catalogue/p/p3c.png',
                'title' => 'Foto 4',
                'caption' => 'Detalle rotura'
            ),
            array(
                'src' => 'catalogue/p/p4.jpg',
                'shrunk' => 'catalogue/p/p4c.png',
                'title' => 'Foto 5',
                'caption' => 'Detalle soporte'
            ),
            array(
                'src' => 'catalogue/p/p5.jpg',
                'shrunk' => 'catalogue/p/p5c.png',
                'title' => 'Foto 6',
                'caption' => 'Foto loca'
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
                'image' => 'images/catalogue/p1.png',
                'title' => 'Noche estrellada fea',
                'author' => 'Ignacio Cornejo',
                'price' => '23500',
                'dummy' => $offset + $size
            ),
            array(
                'image' => 'images/catalogue/p2.png',
                'title' => 'Memoria',
                'author' => 'Joaquin Suarez',
                'price' => '17680'
            ),
            array(
                'image' => 'images/catalogue/p3.png',
                'title' => 'Nose, fantasías',
                'author' => 'Adolfo Barria',
                'price' => '3990'
            ),
            array(
                'image' => 'images/catalogue/p4.png',
                'title' => 'Que chistoso',
                'author' => 'Victor Alejandro Medina',
                'price' => '15400'
            ),
            array(
                'image' => 'images/catalogue/p5.png',
                'title' => 'Distintos caminos',
                'author' => 'Complejo',
                'price' => '23000'
            ),
            array(
                'image' => 'images/catalogue/p6.png',
                'title' => 'Imposible, no sé',
                'author' => 'Dante Blanco',
                'price' => '55500'
            ),
            array(
                'image' => 'images/catalogue/p7.png',
                'title' => 'Una palabra',
                'author' => 'Martina Moreno',
                'price' => '67990'
            ),
            array(
                'image' => 'images/catalogue/p8.png',
                'title' => 'Gaspar?',
                'author' => 'Girella Reyes',
                'price' => '89000'
            ),
            array(
                'image' => 'images/catalogue/p9.png',
                'title' => 'Necesitas algo más',
                'author' => 'Vanessa Vargas',
                'price' => '5500'
            ),
            array(
                'image' => 'images/catalogue/p10.png',
                'title' => 'Cuantas he dicho',
                'author' => 'No soy Andrés',
                'price' => '70650'
            ),
            array(
                'image' => 'images/catalogue/p11.png',
                'title' => 'I really really really like you',
                'author' => 'Carly Rae Jepsen',
                'price' => '63000'
            ),
            array(
                'image' => 'images/catalogue/p12.png',
                'title' => 'Imaginaciones nocturnas',
                'author' => 'Brayatan Alejandro',
                'price' => '11200'
            )
        );
    }

    public function get_cart()
    {
        return array(
            array(
                'img' => 'p3.png',
                'type' => 'artesanía',
                'title' => 'Camión ciego caminante del norte',
                'price' => '15230'
            ),
            array(
                'img' => 'p4.png',
                'type' => 'artesanía',
                'title' => 'Ventana sucia abierta grande',
                'price' => '5000'
            ),
            array(
                'img' => 'p6.png',
                'type' => 'diseño',
                'title' => 'Estatua de Don Cangrejo',
                'price' => '26300'
            )
        );
    }

}
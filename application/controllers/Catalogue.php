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
 * Class Catalogue
 * Controlador de CodeIgniter
 * 
 * Se encarga de manejar la información referente al catálogo.
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.3.5
 * @since   0.3.5
 */
class Catalogue extends CI_Controller
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Función por defecto
     * Recibe y maneja las peticiones al controlador, sin parámetros. Muestra
     * el feed de productos.
     */
    public function index()
    {

        // Productos
        $productos = array(
            array(
                'image' => 'images/catalogue/p1.png',
                'title' => 'Noche estrellada fea',
                'author' => 'Ignacio Cornejo',
                'price' => '23500'
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

        // Recursos
        $this->page_renderer->add_basics();
        //$this->page_renderer->add_css('templates/home');
        $this->page_renderer->add_js('bootstrap-slider.min');
        $this->page_renderer->add_css('bootstrap-slider.min');
        $this->page_renderer->add_css('views/header');
        $this->page_renderer->add_css('views/footer');
        $this->page_renderer->add_css('views/nav_menu');
        $this->page_renderer->add_css('views/catalogue');


        // Vistas
        $this->page_renderer->add_view('parts/header', array());
        $this->page_renderer->add_view('parts/nav_menu', array());
        $this->page_renderer->add_view('parts/catalogue', array('products' => $productos));
        $this->page_renderer->add_view('parts/footer', array());
        $this->page_renderer->set_title('Catálogo - Flota Biobio');

        //Render
        $this->page_renderer->render('templates/home');
    }

}
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
 * Class Home
 * Controlador para CodeIgniter
 *
 * Controlador base de la página. Se encarga de recibir las peticiones iniciales
 * de los visitantes, así como mostrar la página de inicio del sitio.
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4
 * @since   0.1.3
 */
class Home extends CI_Controller
{

    /**
     * Función index
     * Recibe las llamadas al controlados sin parámetros. Muestra el home.
     */
    public function index(){

        $data['slider_info'] = array(
            array(
                'img' => 'slider-full-1.png',
                'thumb' => 'slider-thumb-1.png',
                'link' => '#',
                'title' => 'Subasta activa',
                'detail' => 'Una niña que tiene muchos colores en su pelo'
            ),
            array(
                'img' => 'slider-full-2.png',
                'thumb' => 'slider-thumb-2.png',
                'link' => '#',
                'title' => 'Nuevo producto',
                'detail' => 'Muchas manchas de colores coloridos'
            ),
            array(
                'img' => 'slider-full-3.png',
                'thumb' => 'slider-thumb-3.png',
                'link' => '#',
                'title' => 'Otra cosa, no se qué',
                'detail' => 'Mujer volá se come la mano'
            ),
            array(
                'img' => 'slider-full-4.png',
                'thumb' => 'slider-thumb-4.png',
                'link' => '#',
                'title' => 'Nuevo concierto',
                'detail' => 'Flushhh, se fué el agua del baño.'
            )
        );

        // Recursos
        $this->render->add_base();
        $this->render->add_js('js-image-slider');
        $this->render->add_css('js-image-slider');
        $this->render->add_template('home'); //TODO
        $this->render->add_css('parts/home/boxes');
        $this->render->add_css('parts/home/blog_cm');
        $this->render->set_title('Home rebuild - Flota Biobio');

        // Vistas
        $this->render->add_view('parts/home/slider', $data);
        $this->render->add_view('parts/home/boxes', array());
        $this->render->add_view('parts/home/blog_cm', array());



        //Render
        $this->render->render('base');

    }

}
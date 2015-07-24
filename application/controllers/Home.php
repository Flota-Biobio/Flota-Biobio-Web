<?php
/**
 * Proyecto Flota Biobío
 * Aplicación WEB
 *
 * Prototipo por Aníbal Llanos Prado
 * Basado en el trabajo del equipo de Flota Biobío
 * Entregado y presentado el %FECHA%
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
 * @version 0.3.0
 * @since   0.1.3
 */
class Home extends CI_Controller
{

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
        $this->page_renderer->add_basics();
        $this->page_renderer->add_js('js-image-slider');
        $this->page_renderer->add_css('js-image-slider');
        $this->page_renderer->add_css('templates/home');
        $this->page_renderer->add_css('views/header');
        $this->page_renderer->add_css('views/boxes');

        // Vistas
        $this->page_renderer->add_view('parts/header', array());
        $this->page_renderer->add_view('parts/slider', $data);
        $this->page_renderer->add_view('parts/boxes', array());
        $this->page_renderer->set_title('Home rebuild - Flota Biobio');

        //Render
        $this->page_renderer->render('templates/home');

    }

}
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
 * Class Test
 * Clase de depuración
 * 
 * Clase encargada de realizar las labores de testing para diferentes elementos
 * de la página. Permite realizar pruebas exhaustivas y configurables.
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.1.2
 * @since   0.1.2
 */
class Test extends CI_Controller
{

    protected $parts = array(
        'slider'
    );

    public function slider()
    {
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

        $this->page_renderer->set_resources(
            $this->assets_manager->bootstrap_header()."\n    ".
            $this->assets_manager->js('js-image-slider')."\n    ".
            $this->assets_manager->css('js-image-slider')
        );
        $this->page_renderer->add_view('test/parts/slider', $data);
        $this->page_renderer->set_title('Test: SLIDER');
        $this->page_renderer->render('test/simple');

    }

}
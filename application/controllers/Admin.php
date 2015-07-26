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
 * Class Admin
 * {CLASS-TYPE}
 * 
 * {CLASS-DESCRIPTION}
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.2.1
 * @since   0.2.0
 */
class Admin extends CI_Controller
{

    public function index()
    {

        // Resources
        $this->page_renderer->add_basics();
        $this->page_renderer->add_css('templates/admin');
        $this->page_renderer->add_css('views/header');

        // Views
        $this->page_renderer->add_view('parts/admin/admin_header', array(), 'admin_header');
        $this->page_renderer->add_view('parts/admin/admin_menu', array(), 'admin_menu');
        $this->page_renderer->add_view('parts/admin/admin_body', array('content' => 'Bleh'));

        // Render
        $this->page_renderer->set_title('Admin - Flota Biobio');
        $this->page_renderer->render('templates/admin/admin');



    }
}
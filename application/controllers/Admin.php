<?php
/**
 * Proyecto Flota Biob�o
 * Aplicaci�n WEB
 *
 * Prototipo por An�bal Llanos Prado
 * Basado en el trabajo del equipo de Flota Biob�o
 * Entregado y presentado el %FECHA%
 *
 * Los archivos incluidos en el presente proyecto, si bien fueron implementados
 * y dise�ados (en su forma) por An�bal Llanos Prado, sus derechos de propiedad
 * se declaran por el mismo como propiedad de la organizaci�n presente del
 * equipo de Flota Biob�o, propiedad que ser� transferida a quienes cumplan la
 * anteriormente declarada condici�n.
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
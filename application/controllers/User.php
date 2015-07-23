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
 * Class User
 * {CLASS-TYPE}
 * 
 * {CLASS-DESCRIPTION}
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.2.3
 * @since   0.2.3
 */
class User extends CI_Controller
{

    public function profile($id) {

        $this->page_renderer->set_resources(
            $this->assets_manager->bootstrap_header()."\n    ".
            $this->assets_manager->js('js-image-slider')."\n    ".
            $this->assets_manager->css('js-image-slider')."\n    ".
            $this->assets_manager->css('templates/user')."\n    ".
            $this->assets_manager->css('views/header')
        );
        $this->page_renderer->add_view('parts/header', array());
        $this->page_renderer->add_view('parts/user/user_profile', array());
        $this->page_renderer->set_title('Perfil de usuario - Flota Biobio');
        $this->page_renderer->render('templates/home');

    }

}
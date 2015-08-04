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
 * Class User
 * Controlador de CodeIgniter
 * 
 * Gestiona el acceso y uso al módulo de usuarios
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.3.0
 * @since   0.2.3
 */
class User extends CI_Controller
{

    /**
     * Función profile
     * Muestra el perfil de un usuario, dada su ID.
     *
     * @param string $id Identificador del usuario a consultar
     */
    public function profile($id) {

        // Recursos
        $this->page_renderer->add_basics();
        $this->page_renderer->add_css('views/header');
        $this->page_renderer->add_css('views/user_profile');

        // Vistas
        $this->page_renderer->add_view('parts/header', array());
        $this->page_renderer->add_view('parts/user/user_profile', array());
        $this->page_renderer->set_title('Perfil de usuario - Flota Biobio');

        // Render
        $this->page_renderer->render('templates/home');

    }

}
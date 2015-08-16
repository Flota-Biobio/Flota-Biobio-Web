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
 * @version 0.5.1
 * @since   0.2.3
 */
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('fbb_model');
    }

    /**
     * Función profile
     * Muestra el perfil de un usuario, dada su ID.
     *
     * @param string $id Identificador del usuario a consultar
     */
    public function profile($id)
    {
        $user = $this->fbb_model->get_user($id);

        $this->render->add_base();
        $this->render->add_css('parts/user/profile');
        $this->render->add_css('font-awesome.min');
        $this->render->set_title('Perfil de usuario - Flota Biobio');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Usuario'
                ),
                array(
                    'link' => false,
                    'label' => 'Perfil',
                    'active' => true
                )
            )
        ));

        $this->render->add_view('parts/user/profile', $user);

        $this->render->render('base');

    }


}
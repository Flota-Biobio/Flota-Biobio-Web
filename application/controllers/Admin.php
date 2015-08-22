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
 * Class Admin
 * Controlador de CodeIgniter
 * 
 * Maneja las peticiones al módulo de administración
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.5
 * @since   0.2.0
 */
class Admin extends CI_Controller
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('fbb_admin_model', 'admin_model');
    }


    /**
     * Función index
     * Recibe llamadas al controlador sin parámetros. Muestra el feed de
     * administración.
     *
     * @access public
     * @since  0.2.0
     */
    public function index()
    {

        $this->pages('base');
    }

    /**
     * Función pages
     * Muestra la configuración de las páginas
     *
     * @param string $mode
     * @param string $id
     *
     * @access public
     * @since  0.4.4
     */
    public function pages($mode='base', $id='')
    {
        $menu = $this->admin_model->get_menu();
        $this->render->add_base('admin');
        $this->render->add_template('admin');
        $this->render->add_view(
            'parts/admin/menu', array('menu' => $menu), 'menu'
        );

        // CONFIGURACIÓN DE PÁGINAS, MODO BASE
        if ($mode == 'base') {
            $data['pages'] = $this->admin_model->get_pages();
            $this->render->set_title('Configurar páginas - Flota Biobio');
            $this->render->add_css('parts/admin/users/config');
            $this->render->add_view('parts/admin/pages/config', $data);
        }

        // EDITAR PÁGINA
        elseif ($mode == 'edit' && !empty($id)) {
            $this->render->set_title('Editando página - Flota Biobio');
            $this->render->add_js('editor');
            $this->render->add_css('libs/editor');
            $this->render->add_css('parts/admin/users/edit');
            $this->render->add_view('parts/admin/pages/edit', array());
        }

        $this->render->render('admin');
    }

}
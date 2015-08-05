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
 * @version 0.4
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
        $this->load->library('menu_generator');
    }


    /**
     * Función index
     * Recibe llamadas al controlador sin parámetros. Muestra el feed de
     * administración.
     */
    public function index()
    {
        //Menu
        $this->menu_generator->init(2);
        $this->menu_generator->add_label('Moderación');
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Configurar sitio',
                'link' => '#',
                'children' => array(
                    'Imágenes de inicio' => '#',
                    'Cajas de inicio' => '#',
                    'Páginas' => '#',
                    'Blog' => '#',
                    'Configuración general' => '#'
                )
            )
        );
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Artistas',
                'link' => '#',
                'children' => array(
                    'Solicitudes' => '#',
                    'Agregar' => '#',
                    'Lista' => '#'
                )
            )
        );
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Usuarios',
                'link' => '#',
                'children' => array(
                    'Contacto' => '#',
                    'Lista' => '#'
                )
            )
        );
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Subasta',
                'link' => '#',
                'children' => array(
                    'Actual' => '#',
                    'Nueva' => '#',
                    'Historial' => '#'
                )
            )
        );
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Catálogo',
                'link' => '#',
                'children' => array(
                    'Nuevo producto' => '#',
                    'Lista de productos' => '#',
                    'Historial' => '#'
                )
            )
        );
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Ventas',
                'link' => '#'
            )
        );

        $this->menu_generator->add_separator();

        $this->menu_generator->add_label('Moderación');
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Miembros',
                'link' => '#',
                'children' => array(
                    'Lista' => '#',
                    'Historial' => '#'
                )
            )
        );
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Mantenimiento',
                'link' => '#',
                'children' => array(
                    'Sitio' => '#',
                    'Ventas' => '#',
                    'Catálogo' => '#',
                    'Nuevos usuarios' => '#'
                )
            )
        );

        $this->menu_generator->add_separator();

        $this->menu_generator->add_label('Servicio al cliente');
        $this->menu_generator->add_element(
            array(
                'icon' => '',
                'label' => 'Ventas',
                'link' => '#',
                'children' => array(
                    'Tickets' => '#',
                    'Lista' => '#',
                    'Resueltos' => '#',
                    'Historial' => '#'
                )
            )
        );

        $this->render->add_template('admin');
        $this->render->add_base('admin');
        $this->render->set_title('Admin - Flota Biobio');

        $this->render->set_value('admin_menu', $this->menu_generator->render());
        $this->render->add_view('parts/admin/admin_body', array());

        $this->render->render('admin');
    }
}
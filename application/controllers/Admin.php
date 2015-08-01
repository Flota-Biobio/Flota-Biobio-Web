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

    public function __construct()
    {
        parent::__construct();
        $this->load->library('menu_generator');
    }

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

        // Resources
        $this->page_renderer->add_basics();
        $this->page_renderer->add_css('templates/admin');
        $this->page_renderer->add_css('views/admin_header');

        // Views
        $this->page_renderer->add_view('parts/admin/admin_header', array(), 'admin_header');
        $this->page_renderer->add_view('parts/admin/admin_menu', array('menu' => $this->menu_generator->render()), 'admin_menu');
        $this->page_renderer->add_view('parts/admin/admin_body', array('content' => 'Bleh'));

        // Render
        $this->page_renderer->set_title('Admin - Flota Biobio');
        $this->page_renderer->render('templates/admin/admin');



    }
}
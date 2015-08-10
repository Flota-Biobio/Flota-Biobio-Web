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
 * @version 0.4.3
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

        $menu = $this->get_context_menu();
        $this->render->set_title('Admin - Flota Biobio');
        $this->render->add_base('admin');
        $this->render->add_template('admin');
        $this->render->add_css('parts/admin/menu');
        $this->render->add_view(
            'parts/admin/menu', array('menu' => $menu), 'menu'
        );
        $this->render->add_view('parts/admin/content', array());

        $this->render->render('admin');
    }

    protected function get_context_menu()
    {
        return array(
            'moderación' => array(
                'global' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Configurar sitio',
                        'link' => '#'
                    ),
                    'children' => array(
                        'Imágenes de inicio' => '#',
                        'Cajas de inicio' => '#',
                        'Páginas' => '#',
                        'Blog' => '#',
                        'Configuración general' => '#'
                    )
                ),
                'artists' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Artistas',
                        'link' => '#'
                    ),
                    'children' => array(
                        'Solicitudes' => '#',
                        'Agregar' => '#',
                        'Lista' => '#'
                    )
                ),
                'users' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Usuarios',
                        'link' => '#'
                    ),
                    'children' => array(
                        'Contacto' => '#',
                        'Lista' => '#'
                    )
                ),
                'raffle' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Sorteo',
                        'link' => '#'
                    ),
                    'children' => array(
                        'Actual' => '#',
                        'Nueva' => '#',
                        'Historial' => '#'
                    )
                ),
                'catalogue' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Catálogo',
                        'link' => '#'
                    ),
                    'children' => array(
                        'Nuevo producto' => '#',
                        'Lista de productos' => '#',
                        'Historial' => '#'
                    )
                ),
                'sales' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Ventas',
                        'link' => '#'
                    ),
                    'children' => array()
                )
            ),
            'administración' => array(
                'members' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Miembras',
                        'link' => '#'
                    ),
                    'children' => array(
                        'Lista' => '#',
                        'Historial' => '#'
                    )
                ),
                'maintenance' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Mantenimiento',
                        'link' => '#'
                    ),
                    'children' => array()
                )
            ),
            'servicio al cliente' => array(
                'tickets' => array(
                    'info' => array(
                        'icon' => '',
                        'label' => 'Tickets de atención',
                        'link' => '#'
                    ),
                    'children' => array(
                        'Pendientes' => '#',
                        'Activos' => '#',
                        'Historial' => '#'
                    )
                )
            )
        );
    }

}
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
 * Class Admin_model
 * Modelo de CodeIgniter
 *
 * Modelo para el módulo de administración
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.5
 * @since   0.4.4
 */
class Fbb_admin_model extends CI_Model
{

    /**
     * Obtiene el menú de navegación de administración desde la base de datos
     *
     * @return array El arreglo con la información del menú
     *
     * @access public
     * @since 0.4.5
     */
    public function get_menu()
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

    /**
     * Obtiene las páginas desde la base de datos. Los datos en el arreglo
     * resultante son fáciles de comprender, excepto el 'type' que tomará valores
     * enteros positivos para definir cuan configurables son. LOS Valores actualmente
     * considerados son:
     *
     * 0: Mandatorio, no puede ser modificado ni ordenado.
     * 1: Importante, no puede ser modificado
     * 2: Relevante, puede ser modificado en parte
     * 3: Libre, puede ser completamente modificado y ordenado.
     *
     * @return array Las páginas del sitio
     *
     * @access public
     * @since 0.4.4
     */
    public function get_pages()
    {
        return array(
            array(
                'type' => 0,
                'page' => 'inicio',
                'desc' => 'Página de inicio',
                'state' => 'fijo'
            ),
            array(
                'type' => 1,
                'page' => 'Catálogo',
                'desc' => 'Catálogo de productos Flota Biobío',
                'state' => 'protegido'
            ),
            array(
                'type' => 1,
                'page' => 'Sorteos',
                'desc' => 'Sección de sorteos',
                'state' => 'protegido'
            ),
            array(
                'type' => 3,
                'page' => 'equipo',
                'desc' => 'Detalles del equipo',
                'state' => 'público',
                'link' => 'admin/pages/edit/1'
            ),
            array(
                'type' => 3,
                'page' => 'organización',
                'desc' => 'Detalles de la organización',
                'state' => 'público',
                'link' => '#'
            ),
            array(
                'type' => 3,
                'page' => 'Contacto',
                'desc' => 'Formulario de contacto',
                'state' => 'público',
                'link' => '#'
            )
        );
    }

}
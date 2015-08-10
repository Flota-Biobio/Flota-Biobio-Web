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
 * @version 0.4.4
 * @since   0.4.4
 */
class FBB_Admin_model extends CI_Model
{


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
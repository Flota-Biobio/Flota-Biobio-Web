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
 * Class Event
 * Controlador de CodeIgniter
 * 
 * Controla las peticiones al módulo de eventos
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.4
 * @since   0.5.4
 */
class Evento extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->actual();
    }

    public function actual()
    {
        $this->render->add_base();
        $this->render->add_css('modules/event/active');
        $this->render->set_title('Sorteo activo - Flota Biobio');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Sorteos'
                ),
                array(
                    'link' => false,
                    'label' => 'Activo',
                    'active' => true
                )
            )
        ));

        $this->render->add_view('modules/event/active', array());

        $this->render->render('base');
    }

    public function elegir_numero()
    {
        $this->render->add_base();
        $this->render->add_css('modules/event/chose_number');
        $this->render->set_title('Elegir número - Flota Biobio');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Sorteos'
                ),
                array(
                    'link' => false,
                    'label' => 'Elegir número',
                    'active' => true
                )
            )
        ));

        $this->render->add_view('modules/event/chose_number', array());

        $this->render->render('base');
    }

}
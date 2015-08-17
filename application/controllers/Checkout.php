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
 * Class Pago
 * Controlador de CodeIgniter
 * 
 * Se encarga de gestionar las acciones necesarias para realizar un pago.
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.2
 * @since   0.5.2
 */
class Checkout extends CI_Controller
{

    public function billing()
    {
        $this->render->add_base();
        $this->render->add_css('parts/checkout/billing');
        $this->render->add_css('font-awesome.min');
        $this->render->set_title('Confirmar dato del comprador - Flota Biobio');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Checkout'
                ),
                array(
                    'link' => false,
                    'label' => 'Información del comprador',
                    'active' => true
                )
            )
        ));

        $this->render->add_view('parts/checkout/billing', array());

        $this->render->render('base');
    }

    public function shipping()
    {
        $this->render->add_base();
        $this->render->add_css('parts/checkout/shipping');
        $this->render->add_css('font-awesome.min');
        $this->render->set_title('Confirmar dato del comprador - Flota Biobio');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Checkout'
                ),
                array(
                    'link' => false,
                    'label' => 'Información de despacho',
                    'active' => true
                )
            )
        ));

        $this->render->add_view('parts/checkout/shipping', array());

        $this->render->render('base');
    }

    public function confirm()
    {
        $this->render->add_base();
        $this->render->add_css('parts/checkout/confirm');
        $this->render->add_css('font-awesome.min');
        $this->render->set_title('Confirmar dato del comprador - Flota Biobio');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Checkout'
                ),
                array(
                    'link' => false,
                    'label' => 'Confirmar compra',
                    'active' => true
                )
            )
        ));

        $this->render->add_view('parts/checkout/confirm', array());

        $this->render->render('base');
    }

}
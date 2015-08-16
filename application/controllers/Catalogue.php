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
 * Class Catalogue
 * Controlador de CodeIgniter
 * 
 * Se encarga de manejar la información referente al catálogo.
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.1
 * @since   0.3.5
 */
class Catalogue extends CI_Controller
{

    /* --- CONSTRUCTOR ------------------------------------------------------ */

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('fbb_catalogue_model', 'catalogue_model');
        $this->load->model('fbb_model');
    }


    /* --- FUNCIONES DE RENDERIZADO ----------------------------------------- */

    /**
     * Función por defecto
     * Recibe y maneja las peticiones al controlador, sin parámetros. Muestra
     * el feed de productos.
     *
     * @access  public
     * @since   0.3.5
     */
    public function index()
    {
        // Productos
        $productos = $this->catalogue_model->get_feed(0, 9);

        $this->render->add_base();
        $this->render->add_css('parts/catalogue/pages/feed');
        $this->render->add_css('parts/catalogue/menu');
        $this->render->add_js('bootstrap-slider.min');
        $this->render->add_css('bootstrap/bootstrap-slider.min');
        $this->render->set_title('Detalles de producto - Flota Biobio');
        $this->render->set_value('cat_title','Últimos productos');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Catálogo',
                    'active' => true
                )
            )
        ));

        $this->render->add_view(
            'parts/catalogue/menu',
            array(),
            'menu'
        );
        $this->render->add_view(
            'parts/catalogue/pages/feed',
            array('products' => $productos)
        );
        $this->render->add_template('catalogue');
        $this->render->render('catalogue');
    }



    /**
     * Función product
     * Gestiona recursos para mostrar el resumen de un producto del catálogo
     *
     * @param string $id La ID del producto consultado.
     *
     * @access public
     * @since 0.3.6
     */
    public function product($id)
    {
        $slides = $this->catalogue_model->get_product_slider($id);
        $user = $this->fbb_model->get_user(1);

        $this->render->add_base();
        $this->render->add_css('parts/catalogue/pages/product');
        $this->render->add_css('parts/catalogue/menu');
        $this->render->add_js('bootstrap-slider.min');
        $this->render->add_css('bootstrap/bootstrap-slider.min');
        $this->render->set_title('Detalles de producto - Flota Biobio');
        $this->render->set_value('cat_title','Diskette roto con scotch sobre sacapuntas');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Catálogo'
                ),
                array(
                    'link' => false,
                    'label' => 'Producto',
                    'active' => true
                )
            )
        ));

        $this->render->add_view(
            'parts/catalogue/menu',
            array(),
            'menu'
        );
        $this->render->add_view(
            'parts/catalogue/pages/product',
            array('slides' => $slides, 'user' => $user)
        );
        $this->render->add_template('catalogue');
        $this->render->render('catalogue');
    }


    /**
     * Carro de compras
     * catalogue/cart
     *
     * @access public
     * @since 0.4.3
     */
    public function cart()
    {
        $cart = $this->catalogue_model->get_cart();

        $this->render->add_base();
        $this->render->add_css('parts/catalogue/pages/cart');
        $this->render->add_css('parts/catalogue/menu');
        $this->render->add_js('bootstrap-slider.min');
        $this->render->add_css('bootstrap/bootstrap-slider.min');
        $this->render->set_title('Detalles de producto - Flota Biobio');
        $this->render->set_value('cat_title', 'Carro de compras');
        $this->render->set_value(
            'breadcrumb_position', array(
                'position' => array(
                    array(
                        'link' => '',
                        'label' => 'Inicio'
                    ),
                    array(
                        'link' => false,
                        'label' => 'Catálogo',
                        'active' => true
                    )
                )
            )
        );

        $this->render->add_view(
            'parts/catalogue/menu',
            array(),
            'menu'
        );
        $this->render->add_view(
            'parts/catalogue/pages/cart',
            array('cart' => $cart)
        );
        $this->render->add_template('catalogue');
        $this->render->render('catalogue');
    }

}
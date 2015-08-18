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
 * Class Home
 * Controlador para CodeIgniter
 *
 * Controlador base de la página. Se encarga de recibir las peticiones iniciales
 * de los visitantes, así como mostrar la página de inicio del sitio.
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5.3
 * @since   0.1.3
 */
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('fbb_model');
    }

    /**
     * Función index
     * Recibe las llamadas al controlados sin parámetros. Muestra el home.
     */
    public function index(){

        $data['slider_info'] = $this->fbb_model->get_home_slider();
        $blog_data['posts'] = $this->fbb_model->get_blog_posts();

        $this->render->add_base();
        $this->render->add_template('home'); //TODO
        $this->render->add_css('parts/home/boxes');
        $this->render->add_css('parts/home/slider');
        $this->render->add_css('parts/home/blog_cm');
        $this->render->set_title('Home rebuild - Flota Biobio');
        $this->render->set_value('breadcrumb_position', array('position' => false));

        $this->render->add_view('parts/home/slider', $data);
        $this->render->add_view('parts/home/boxes', array());
        $this->render->add_view('parts/home/blog_cm', $blog_data);

        $this->render->render('base');

    }

}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index(){

        $this->page_renderer->add_view('test/top', array('name' => 'Jeder'));
        $this->page_renderer->add_views(array(
            'test/mid' => array('name'=> 'Kontenido'),
            'test/bot' => array()
        ));
        $this->page_renderer->set_resources(
            $this->assets_manager->bootstrap_header()
        );
        $this->page_renderer->set_title('Test Title');
        $this->page_renderer->render('test/simple');

    }

}
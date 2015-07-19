<?php
/**
 * Proyecto Flota Biobío
 * Aplicación WEB
 *
 * Prototipo por Aníbal Llanos Prado
 * Basado en el trabajo del equipo de Flota Biobío
 * Entregado y presentado el 09 de Julio de 2015
 *
 * Los archivos incluidos en el presente proyecto, si bien fueron implementados
 * y diseñados (en su forma) por Aníbal Llanos Prado, sus derechos de propiedad
 * se declaran por el mismo como propiedad de la organización presente del
 * equipo de Flota Biobío, propiedad que será transferida a quienes cumplan la
 * anteriormente declarada condición.
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page_renderer
{

    /**
     * @var CI_Controller $ci
     */
    protected $ci;

    protected $views;

    protected $title;

    protected $resources;

    public function __construct()
    {
        // CodeIgniter Instance
        $this->ci =& get_instance();

        $this->reset();
    }


    public function render($template)
    {
        $data['content'] = $this->render_views();
        $data['title'] = $this->title;
        $data['resources'] = $this->resources;

        $this->reset();
        $this->ci->load->view($template, $data);
    }

    public function set_resources($resources)
    {
        $this->resources = $resources;
    }

    public function set_title($title)
    {
        $this->title = $title;
    }

    public function render_views()
    {
        $html = "";
        foreach ($this->views as $view) {
            $view_html = $this->render_view($view[0], $view[1]);
            $html .= $view_html."\n        ";
        }
        return $html;
    }

    public function add_views($views)
    {
        foreach ($views as $view => $data) {
            $this->add_view($view, $data);
        }
    }

    public function add_view($name, $data)
    {
        array_push($this->views, array($name, $data));
    }

    public function render_view($name, $data)
    {
        return $this->ci->load->view($name, $data, true);
    }

    protected function reset()
    {
        $this->views = array();
        $this->title = "Untitled Page";
        $this->resources = "";
    }



}
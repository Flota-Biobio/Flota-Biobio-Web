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

class Assets_manager
{

    protected $ci;

    protected $assets_path;

    protected $format;

    protected $bootstrap_files = array(
        'css' => array('bootstrap.min'),
        'js' => array('jquery-1.11.3.min', 'bootstrap.min')
    );


    public function __construct()
    {
        // CodeIgniter Instance
        $this->ci =& get_instance();
        $this->assets_path = base_url('assets').'/';


        $this->format = new stdClass();
        $this->format->css = '<link rel="stylesheet" type="text/css" href="%s">';
        $this->format->js = '<script type="text/javascript" src="%s"></script>';
        $this->format->img = '<img src="%s" title="%s" alt="%s">';
    }

    public function css($name)
    {
        $path = $this->assets_path.'css/'.$name.'.css';
        return sprintf($this->format->css, $path);
    }

    public function js($name)
    {
        $path = $this->assets_path.'js/'.$name.'.js';
        return sprintf($this->format->js, $path);
    }

    public function img($name, $sub_path='', $title='', $alt='')
    {
        $path = $this->assets_path.'images/'.$sub_path.$name;
        return sprintf($this->format->img, $path, $title, $alt);
    }

    public function bootstrap_header()
    {
        $tags = array();
        foreach ($this->bootstrap_files['js'] as $js) {
            array_push($tags, $this->js($js));
        }
        foreach ($this->bootstrap_files['css'] as $css) {
            array_push($tags, $this->css($css));
        }
        return join("\n    ", $tags);
    }

}
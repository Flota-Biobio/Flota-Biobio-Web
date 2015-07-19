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
 *
 * @copyright   Copyright 2015 Flota Biobio
 * @license     Apache License, Version 2.0
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase Assets_manager
 * Librería para CodeIgniter
 *
 * Se encarga de gestionar los recursos externos del sitio, con el fin de poder
 * obtener información relevante de ellos desde cualquier punto de la aplicación.
 *
 * @author      George Shazkho <anibal.llanos.prado@gmail.com>
 * @version     0.1.1
 * @since       0.1.0
 */
class Assets_manager
{

    /* --- PROPIEDADES DE CLASE --------------------------------------------- */

    /**
     * @var object Instancia de CodeIgniter
     */
    protected $ci;

    /**
     * @var string Ruta virtual (URL web) que apunta a la carpeta "assets".
     */
    protected $assets_path;

    /**
     * @var stdClass Objeto que almacena los strings de formato.
     */
    protected $format;

    /**
     * @var array Arreglo con las dependencias que requiere BootStrap.
     */
    protected $bootstrap_files = array(
        'css' => array('bootstrap.min'),
        'js' => array('jquery-1.11.3.min', 'bootstrap.min')
    );


    /* --- CONSTRUCTOR ------------------------------------------------------ */

    /**
     * Constructor
     *
     * @since 0.1.0
     */
    public function __construct()
    {
        // Definiendo instancia
        $this->ci =& get_instance();
        $this->assets_path = base_url('assets').'/';

        // Strings de formato
        $this->format = new stdClass();
        $this->format->css = '<link rel="stylesheet" type="text/css" href="%s">';
        $this->format->js = '<script type="text/javascript" src="%s"></script>';
        $this->format->img = '<img src="%s" title="%s" alt="%s">';
    }


    /* --- GENERADORAS DE TAGS ---------------------------------------------- */

    /**
     * Genera el tag LINK para el recurso solicitado.
     *
     * Utiliza el nombre del archivo (proporcionado) y el string de formato para
     * generar un string con el tag HTML adecuado para se utilizado en la sección
     * HEAD de la vista final.
     * NO SE DEBE ESPECIFICAR LA EXTENSIÓN DEL ARCHIVO, NI EL PUNTO.
     *
     * @param string $name Nombre del archivo CSS a incorporar.
     *
     * @return string El tag HTML
     *
     * @access  public
     * @since   0.1.0
     */
    public function css($name)
    {
        $path = $this->assets_path.'css/'.$name.'.css';
        return sprintf($this->format->css, $path);
    }

    /**
     * Genera el tag SCRIPT para el recurso solicitado.
     *
     * Utiliza el nombre del archivo (proporcionado) y el string de formato para
     * generar un string con el tag HTML adecuado para se utilizado en la sección
     * HEAD de la vista final.
     * NO SE DEBE ESPECIFICAR LA EXTENSIÓN DEL ARCHIVO, NI EL PUNTO.
     *
     * @param string $name Nombre del archivo JavaScript a incorporar.
     *
     * @return string El tag HTML
     *
     * @access  public
     * @since   0.1.0
     */
    public function js($name)
    {
        $path = $this->assets_path.'js/'.$name.'.js';
        return sprintf($this->format->js, $path);
    }

    /**
     * Genera el tag IMG para el recurso solicitado.
     *
     * Utiliza el nombre del archivo (proporcionado) y el string de formato para
     * generar un string con el tag HTML adecuado para se utilizado en la sección
     * HEAD de la vista final.
     *
     *
     * @param   string $name Nombre del archivo (incluye extensión).
     * @param   string $sub_path Sub-ruta (entre "assets" y el archivo).
     * @param   string $title Título a definir.
     * @param   string $alt Texto alternativo a definir.
     *
     * @return  string El tag HTML
     *
     * @access  public
     * @since   0.1.0
     */
    public function img($name, $sub_path='', $title='', $alt='')
    {
        $path = $this->assets_path.'images/'.$sub_path.$name;
        return sprintf($this->format->img, $path, $title, $alt);
    }


    /* --- FUNCIONES COMPLEMENTARIAS --- */

    /**
     * Genera los tags HTML básicos para el funcionamiento de BootStrap.
     *
     * @return string Los tag HTML
     *
     * @access  public
     * @since   0.1.0
     */
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
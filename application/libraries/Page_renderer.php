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
 * Clase Page_renderer
 * Librería para CodeIgniter
 *
 * Se encarga de concentrar la información relevante para la construcción de una
 * vista y, finalmente, generar el código HTML a mostrar.
 *
 * @author      George Shazkho (anibal.llanos.prado@gmail.com)
 * @version     GIT: $Id$ Prototipo
 * @since       0.1.0
 */
class Page_renderer
{

    /* --- PROPIEDADES DE CLASE --------------------------------------------- */

    /**
     * @var CI_Controller $ci Instancia de CodeIgniter.
     */
    protected $ci;

    /**
     * @var array $views Vistas acumuladas para generar el "contenido".
     */
    protected $views;

    /**
     * @var string $title Título a mostrar para la vista.
     */
    protected $title;

    /**
     * @var string $resources String con los tags de los recursos a incorporar
     */
    protected $resources;


    /* --- CONSTRUCTOR ------------------------------------------------------ */

    /**
     * Constructor
     *
     * @since 0.1.0
     */
    public function __construct()
    {
        $this->ci =& get_instance();
        $this->reset();
    }


    /* --- FUNCIONES DE RENDERIZADO ----------------------------------------- */

    /**
     * Obtiene el HTML asociado al objeto presente.
     *
     * Se utiliza la información capturada por el objeto para generar el código
     * que corresponda, según se haya indicado.
     *
     * @param   string $template Nombre de la vista que se usará como base.
     *
     * @access  public
     * @since   0.1.0
     */
    public function render($template)
    {
        $data['content'] = $this->render_views();
        $data['title'] = $this->title;
        $data['resources'] = $this->resources;

        $this->reset();
        $this->ci->load->view($template, $data);
    }

    /**
     * Obtiene el HTML asociado a las vistas incluidas.
     *
     * Se utiliza para convertir las vistas que han sido declaradas parte de la
     * vista global (contenido) en código HTML para ser insertado en el template
     * que sea especificado.
     *
     * @return string El código HTML de las vistas.
     *
     * @access  public
     * @since   0.1.0
     */
    public function render_views()
    {
        $html = "";
        foreach ($this->views as $view) {
            $view_html = $this->render_view($view[0], $view[1]);
            $html .= $view_html."\n        ";
        }
        return $html;
    }

    /**
     * Obtiene el código HTML de una vista, usando arreglo "data".
     *
     * @param string $name Nombre de la vista a cargar.
     * @param array $data Arreglo de variables a utilizar.
     *
     * @return string El código HTML de la vista.
     *
     * @access  public
     * @since   0.1.0
     */
    public function render_view($name, $data)
    {
        return $this->ci->load->view($name, $data, true);
    }


    /* --- FUNCIONES DE GESTIÓN DE VISTAS ----------------------------------- */

    /**
     * Agrega un set de vistas al objeto.
     *
     * Declara como parte del "contenido" de la vista a un grupo de vistas
     * menores, agrupadas en un arreglo asociativo. Este arreglo debe utilizar
     * como índices los nombres de las vistas, y como valor para cada índice el
     * arreglo con variables para la vista (data) que corresponda. Ejemplo:
     *
     *      array(
     *          'vista_1' => $data_1,
     *          'vista_2' => $data_2,
     *          . . .
     *      )
     *
     * @param array $views Arreglo asociativo con las vistas a incorporar.
     *
     * @access  public
     * @since   0.1.0
     */
    public function add_views($views)
    {
        foreach ($views as $view => $data) {
            $this->add_view($view, $data);
        }
    }

    /**
     * Agrega una vista al objeto.
     *
     * @param string $name Nombre de la vista a cargar.
     * @param array $data Arreglo de variables a utilizar.
     *
     * @access  public
     * @since   0.1.0
     */
    public function add_view($name, $data)
    {
        array_push($this->views, array($name, $data));
    }


    /* --- FUNCIONES INTERNAS ----------------------------------------------- */

    /**
     * Restablece los valores internos del objeto.
     *
     * Cambia el valor de las propiedades que son usadas para generar vistas a
     * los valores por defecto que permiten comenzar una nueva vista.
     *
     * @access  protected
     * @since   0.1.0
     */
    protected function reset()
    {
        $this->views = array();
        $this->title = "Untitled Page";
        $this->resources = "";
    }


    /* --- SETTERS ---------------------------------------------------------- */

    /**
     * Define el string de recursos a incorporar en el HEAD.
     *
     * @param string $resources El string con los tags a incorporar.
     *
     * @access  public
     * @since   0.1.0
     */
    public function set_resources($resources)
    {
        $this->resources = $resources;
    }

    /**
     * Define el string de recursos a incorporar en el HEAD.
     *
     * @param string $title El string con el título de la página.
     *
     * @access  public
     * @since   0.1.0
     */
    public function set_title($title)
    {
        $this->title = $title;
    }

}
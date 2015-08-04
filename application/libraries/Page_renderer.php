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

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase Page_renderer
 * Librería para CodeIgniter
 *
 * Se encarga de concentrar la información relevante para la construcción de una
 * vista y, finalmente, generar el código HTML a mostrar.
 *
 * @author      George Shazkho <anibal.llanos.prado@gmail.com>
 * @version     0.3.0
 * @since       0.1.0
 *
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

    /**
     * @var array Arreglo con los CSS a incluir
     */
    protected $css;

    /**
     * @var array Arreglo con los JavaScript a incluir
     */
    protected $js;

    /**
     * @var array Arreglo con los elementos básicos a incluir
     */
    protected $basics = array(
        'css' => array('bootstrap.min', 'base'),
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
        $data['title'] = $this->title;
        $this->render_resources();
        $data['resources'] = $this->resources;

        foreach ($this->views as $target => $views) {
            $data[$target] = $this->render_views($views);
        }

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
     * @param array $views
     *
     * @return string El código HTML de las vistas.
     *
     * @access  public
     * @since   0.1.0
     */
    public function render_views($views)
    {
        $html = "";
        foreach ($views as $view) {
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

    /**
     * Obtiene el código HTML de los recursos a incluir
     *
     * @access protected
     * @since  0.3.0
     */
    protected function render_resources()
    {
        foreach ($this->js as $js) {
            $this->resources .= $this->ci->assets_manager->js($js)."\n    ";
        }
        foreach ($this->css as $css) {
            $this->resources .= $this->ci->assets_manager->css($css)."\n    ";
        }
    }


    /* --- FUNCIONES DE GESTIÓN DE VISTAS ----------------------------------- */

    /**
     * Agrega un set de vistas al objeto.
     *
     * Declara como parte del "contenido" de la vista a un grupo de vistas
     * menores, agrupadas en un arreglo asociativo. Este arreglo debe contener
     * sub-arreglos asociativos que definan (cada uno) los índices 'view',
     * 'data' y 'target'. Un arreglo válido ejemplo:
     *
     *      array(
     *          array(
     *              'view' => 'vista_1',
     *              'data' => 'data_1',
     *              'target' => 'target_1'
     *          ),
     *          array(
     *              'view' => 'vista_2',
     *              'data' => 'data_2',
     *              'target' => 'target_2'
     *          )
     *      )
     *
     * @param array $views Arreglo asociativo con las vistas a incorporar.
     *
     * @access  public
     * @since   0.1.0
     */
    public function add_views($views)
    {
        foreach ($views as $view) {
            $target = empty($view['target']) ? 'content' : $view['target'];
            $this->add_view($view['view'], $view['data'], $target);
        }
    }

    /**
     * Agrega una vista al objeto.
     *
     * @param string $name Nombre de la vista a cargar.
     * @param array  $data Arreglo de variables a utilizar.
     * @param string $target Objetivo de la vista (para templates específicos)
     *
     * @access  public
     * @since   0.1.0
     */
    public function add_view($name, $data, $target='content')
    {
        if (empty($this->views[$target])) $this->views[$target] = array();
        array_push($this->views[$target], array($name, $data));
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
        $this->css = array();
        $this->js = array();
        $this->title = "Untitled Page";
        $this->resources = "";
    }


    /* --- RECURSOS --------------------------------------------------------- */

    /**
     * Agrega los recursos básicos  para el sitio
     *
     * Los recursos básicos consisten en los elementos que serán incluidos en la
     * etiqueta HEAD del HTML, y que son globales para el proyecto completo. En
     * el presente, corresponde a los recursos de Bootstrap y el CSS básico.
     *
     * @access  public
     * @since   0.3.0
     */
    public function add_basics()
    {
        foreach ($this->basics['js'] as $js) {
            $this->add_js($js);
        }
        foreach ($this->basics['css'] as $css) {
            $this->add_css($css);
        }
    }

    /**
     * Agrega un recurso CSS a la lista de recursos a incluir.
     *
     * @param string $css El nombre del CSS a incluir.
     *
     * @access  public
     * @since   0.3.0
     */
    public function add_css($css)
    {
        array_push($this->css, $css);
    }

    /**
     * Agrega un recurso JavaScript a la lista de recursos a incluir.
     *
     * @param string $js El nombre del JavaScript a incluir.
     *
     * @access  public
     * @since   0.3.0
     */
    public function add_js($js)
    {
        array_push($this->js, $js);
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
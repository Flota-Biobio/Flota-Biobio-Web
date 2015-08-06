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
 * Clase Render
 * Librería para CodeIgniter
 *
 * Se encarga de concentrar la información relevante para la construcción de una
 * vista y, finalmente, generar el código HTML a mostrar.
 *
 * @author      George Shazkho <anibal.llanos.prado@gmail.com>
 * @version     0.4.2
 * @since       0.4
 *
 */
class Render
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
    protected $packs;

    /**
     * @var array Arreglo de elementos convertidos a HTML
     */
    protected $rendered;


    /* --- CONSTRUCTOR ------------------------------------------------------ */

    public function __construct()
    {
        // Inicialización de elementos
        $this->ci =& get_instance();
        $this->reset();
        $this->packs = new stdClass();

        // jQuery
        $this->packs->jquery = new stdClass();
        $this->packs->jquery->js = 'jquery-1.11.3.min';

        // Bootstrap
        $this->packs->bootstrap = new stdClass();
        $this->packs->bootstrap->css = 'bootstrap/bootstrap.min';
        $this->packs->bootstrap->js = 'bootstrap.min';

        // Base
        $this->packs->base = new stdClass();
        $this->packs->base->css = array(
            'parts/base/header',
            'parts/base/nav_menu',
            'parts/base/breadcrumb',
            'parts/base/footer',
            'base'
        );

        // Admin
        $this->packs->admin = new stdClass();
        $this->packs->admin->css = array(
            'parts/base/footer',
            'base',
            'parts/admin/admin_header'
        );
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
     * @since   0.4
     */
    public function render($template)
    {
        $data['resources'] = $this->render_resources();
        $data['title'] = $this->title;
        $this->render_views();
        foreach ($this->rendered as $index => $content) {
            $data[$index] = $content;
        }
        $this->reset();
        $this->ci->load->view('templates/'.$template, $data);
    }

    /**
     * Obtiene el HTML asociado a las vistas incluidas.
     *
     * Convierte en código HTML las vistas incluidas en el arreglo de vistas y
     * las agrega al arreglo de 'rendered'.
     *
     * @access  protected
     * @since   0.4
     */
    protected function render_views()
    {
        foreach ($this->views as $view) {
            $this->render_view($view);
        }
    }

    /**
     * Obtiene el código HTML de una vista y lo agrega al arreglo 'rendered'
     *
     * @param stdClass $view Objeto de la vista a agregar.
     *
     * @access  protected
     * @since   0.4
     */
    protected function render_view($view)
    {
        $html = $this->ci->load->view($view->name, $view->data, true);
        if (empty($this->rendered[$view->target])) {
            $this->rendered[$view->target] = '        ';
        }
        $this->rendered[$view->target] .= $html.'
        ';
    }

    /**
     * Obtiene el código HTML de los recursos a incluir
     *
     * @return string Los recursos en forma de HTML
     *
     * @access protected
     * @since  0.4
     */
    protected function render_resources()
    {
        $res_html = '';
        foreach ($this->js as $js) {
            $res_html .= $this->ci->assets_manager->js($js)."\n    ";
        }
        foreach ($this->css as $css) {
            $res_html .= $this->ci->assets_manager->css($css)."\n    ";
        }
        return $res_html;
    }


    /* --- FUNCIONES DE GESTIÓN DE VISTAS ----------------------------------- */

    /**
     * Agrega una vista al objeto.
     *
     * @param string $name Nombre de la vista a cargar.
     * @param array  $data Arreglo de variables a utilizar.
     * @param string $target Objetivo de la vista (para templates específicos)
     *
     * @access  public
     * @since   0.4
     */
    public function add_view($name, $data, $target='content')
    {
        // Crear objeto de vista
        $view = new stdClass();
        $view->name = $name;
        $view->data = $data;
        $view->target = $target;

        // Agregar objeto de vista
        array_push($this->views, $view);
    }


    /* --- FUNCIONES INTERNAS ----------------------------------------------- */

    /**
     * Restablece los valores internos del objeto.
     *
     * Cambia el valor de las propiedades que son usadas para generar vistas a
     * los valores por defecto que permiten comenzar una nueva vista.
     *
     * @access  protected
     * @since   0.4
     */
    protected function reset()
    {
        $this->views = array();
        $this->rendered = array();
        $this->css = array();
        $this->js = array();
        $this->title = "Untitled Page";
    }


    /* --- RECURSOS --------------------------------------------------------- */

    /**
     * Define el valor de una variable del arreglo data
     *
     * Al construir la vista, eltemplate podría definir variables que no son
     * entregables via Render (valores en particular). En esos casos se debe
     * definir manualmente su valor en el controlador con esta función.
     *
     * @param string $name Nombre que llevará la variable en el template
     * @param mixed $value Valor que tomará la variable
     *
     * @access  public
     * @since   0.4
     */
    public function set_value($name, $value)
    {
        $this->rendered[$name] = $value;
    }

    /**
     * Agrega el css de un template
     *
     * Se utiliza esta función para no confundir los css de las partes con los
     * de los templates.
     *
     * @param string $template El nombre del template
     *
     * @access  public
     * @since   0.4
     */
    public function add_template($template)
    {
        $this->add_css('templates/'.$template);
    }

    /**
     * Agrega un pack de recursos base para las vistas
     *
     * Las vistas requieren elementos en común, por lo que se permite agregarlos
     * de manera simplificada con este método. Para ser utilizada, el pack de
     * recursos debe estar definido en el constructor.
     *
     * @param string $variant Variante de la base (pack)
     *
     * @access  public
     * @since   0.4
     */
    public function add_base($variant='base')
    {
        $this->add_bootstrap();
        foreach ($this->packs->{$variant}->css as $css) {
            $this->add_css($css);
        }
    }

    /**
     * Agrega los recursos de Bootstrap a la vista
     *
     * @access  public
     * @since   0.4
     */
    public function add_bootstrap()
    {
        $this->add_jquery();
        $this->add_js($this->packs->bootstrap->js);
        $this->add_css($this->packs->bootstrap->css);
    }

    /**
     * Agrega los recursos de jQuery a la vista
     *
     * @access  public
     * @since   0.4
     */
    public function add_jquery()
    {
        $this->add_js($this->packs->jquery->js);
    }

    /**
     * Agrega un recurso CSS a la lista de recursos a incluir.
     *
     * @param string $css El nombre del CSS a incluir.
     *
     * @access  public
     * @since   0.4
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
     * @since   0.4
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
     * @since   0.4
     */
    public function set_title($title)
    {
        $this->title = $title;
    }

}
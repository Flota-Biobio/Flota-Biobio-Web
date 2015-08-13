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
 * Clase Assets_manager
 * Librería para CodeIgniter
 *
 * Se encarga de gestionar los recursos externos del sitio, con el fin de poder
 * obtener información relevante de ellos desde cualquier punto de la aplicación.
 *
 * @author      George Shazkho <anibal.llanos.prado@gmail.com>
 * @version     0.4.5
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
        $this->format->img = '<img class="%s" src="%s" title="%s" alt="%s">';
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
     * @param   string $class Las clases a definir en el tag
     *
     * @return  string El tag HTML
     *
     * @access  public
     * @since   0.1.0
     */
    public function img($name, $sub_path='', $title='', $alt='', $class='')
    {
        if ($alt == '' && $title != '') {
            $alt = $title;
        }
        $path = $this->assets_path.'images/'.$sub_path.$name;
        return sprintf($this->format->img, $class, $path, $title, $alt);
    }


    /* --- OTRAS FUNCIONES -------------------------------------------------- */

    /**
     * Genera la URL para algún recurso de la carpeta assets.
     *
     * Utiliza el nombre de archivo indicado (debe incluir la ruta relativa a
     * partir de la carpeta assets) para generar una URL válida para utilizar
     * en CodeIgniter.
     *
     * @param   string $path La ruta relativa y el nombre de archivo
     *
     * @return  string La URL completa del recurso.
     *
     * @access  public
     * @since   0.3.5
     */
    public function asset_url($path)
    {
        return $this->assets_path.$path;
    }

    public function favicon()
    {
        $favicon_root = $this->asset_url('images/favicon');
        ob_start();?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=$favicon_root?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=$favicon_root?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$favicon_root?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$favicon_root?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$favicon_root?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$favicon_root?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$favicon_root?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$favicon_root?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$favicon_root?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=$favicon_root?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$favicon_root?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=$favicon_root?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$favicon_root?>/favicon-16x16.png">
    <link rel="manifest" href="<?=$favicon_root?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=$favicon_root?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php
        return ob_get_clean();
    }

}
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
 * Class Fbb_model
 * Modelo de CodeIgniter
 * 
 * Modelo principal de la aplicación
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.6
 * @since   0.4.5
 */
class Fbb_model extends CI_Model
{

    /* - - HOME - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    public function get_home_slider()
    {
        return array(
            array(
                'img' => 'slider_full_dummy.png',
                'link' => '#',
                'title' => 'Descripción del slide'
            ),
            array(
                'img' => 'slider_full_dummy.png',
                'link' => '#',
                'title' => 'Descripción del slide'
            ),
            array(
                'img' => 'slider_full_dummy.png',
                'link' => '#',
                'title' => 'Descripción del slide'
            ),
            array(
                'img' => 'slider_full_dummy.png',
                'link' => '#',
                'title' => 'Descripción del slide'
            )
        );
    }


    /* - - USER - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    public function get_user($id)
    {
        $user = array();
        if ($id == 1) {
            $user['level'] = 10;
            $user['user_variant'] = '';
            $user['name'] = 'artista de ejemplo';
            $user['nickname'] = 'apodo';
            $user['profession'] = 'profesión';
            $user['lives_in'] = 'residencia';
            $user['auto_desc'] = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.';
            $user['img'] = 'user_dummy.png';
            $user['type'] = 'Artesano';
            $user['links'] = array(
                array(
                    'category' => 'facebook-official',
                    'color' => 'color-facebook',
                    'label' => 'Ejemplo de Facebook',
                    'link' => 'http://www.google.com/search?q=penita'
                ),
                array(
                    'category' => 'twitter',
                    'color' => 'color-twitter',
                    'label' => '@ejemplo_de_twitter',
                    'link' => 'http://www.google.com/search?q=guaripolo'
                ),
                array(
                    'category' => 'globe',
                    'color' => '',
                    'label' => 'Ejemplo genérico',
                    'link' => 'http://www.google.com/search?q=trafampulli'
                )
            );
            $user['feed'] = array(
                array(
                    'date' => '05 de Junio de 2015',
                    'message' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing <strong>elit.</strong>',
                    'category' => 'sold',
                    'points' => 10
                ),
                array(
                    'date' => '01 de Junio de 2015',
                    'message' => 'Aenean commodo ligula eget <strong>dolor.</strong>.',
                    'category' => 'new-photos',
                    'points' => 10
                ),
                array(
                    'date' => '21 de Mayo de 2015',
                    'message' => 'Cum sociis natoque penatibus et magnis dis <strong>parturient montes</strong>.',
                    'category' => 'new-product',
                    'points' => 10
                ),
                array(
                    'date' => '01 de Mayo de 2015',
                    'message' => 'Donec quam
                            <strong>felis</strong>, ultricies nec, pellentesque eu, pretium quis.',
                    'category' => 'star',
                    'points' => 10
                ),
                array(
                    'date' => '22 de Abril de 2015',
                    'message' => 'Nulla consequat massa quis enim.',
                    'category' => 'published',
                    'points' => 10
                ),
                array(
                    'date' => '31 de Diciembre de 2014',
                    'message' => 'Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.',
                    'category' => 'created',
                    'points' => 10
                )
            );
        } elseif ($id == 2) {
            $user['level'] = 1;
            $user['user_variant'] = ' feed-variant';
            $user['name'] = 'usuario de ejemplo';
            $user['lives_in'] = 'residencia';
            $user['auto_desc'] = 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.';
            $user['img'] = 'user_dummy.png';
            $user['type'] = 'usuario';
            $user['links'] = array(
                array(
                    'category' => 'facebook-official',
                    'color' => 'color-facebook',
                    'label' => 'Ejemplo_de_Facebook',
                    'link' => 'http://www.google.com/search?q=cachupin'
                ),
                array(
                    'category' => 'google-plus-square',
                    'color' => 'color-google-plus',
                    'label' => '+EjemploGooglePlus',
                    'link' => 'http://www.google.com/search?q=pachamama'
                ),
                array(
                    'category' => 'deviantart',
                    'color' => 'color-deviantart',
                    'label' => 'ejemplo-de-deviatart',
                    'link' => 'http://www.google.com/search?q=banana'
                ),
                array(
                    'category' => 'linkedin-square',
                    'color' => 'color-linkedin',
                    'label' => 'ejemplo_de_linkedin',
                    'link' => 'http://www.google.com/search?q=sylvanas'
                )
            );
            $user['feed'] = array(
                array(
                    'date' => '05 de Junio de 2015',
                    'message' => 'Evento que otorga puntos #1',
                    'category' => 'sold',
                    'points' => 10
                ),
                array(
                    'date' => '01 de Junio de 2015',
                    'message' => 'Evento que otorga puntos #2',
                    'category' => 'new-photos',
                    'points' => 2
                ),
                array(
                    'date' => '21 de Mayo de 2015',
                    'message' => 'Evento que otorga puntos #3',
                    'category' => 'star',
                    'points' => 2
                ),
                array(
                    'date' => '22 de Abril de 2015',
                    'message' => 'Evento que otorga puntos #4',
                    'category' => 'published',
                    'points' => 1
                ),
                array(
                    'date' => '31 de Diciembre de 2014',
                    'message' => 'Evento que otorga puntos #5',
                    'category' => 'created',
                    'points' => 4
                )
            );
        }
        return $user;
    }


    /* - - USER - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    public function get_blog_posts()
    {
        return array(
            array(
                'title' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
                'author' => 'Flota Bio-Bío',
                'date' => '15 de Julio de 2015 a las 12:41',
                'img' => 'dummy/home_post1_dummy.png',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat
                        ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis
                        rerum.'
            ),
            array(
                'title' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
                'author' => 'Flota Bio-Bío',
                'date' => '15 de Julio de 2015 a las 12:41',
                'img' => 'dummy/home_post2_dummy.png',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat
                        ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis
                        rerum.'
            ),
            array(
                'title' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.',
                'author' => 'Flota Bio-Bío',
                'date' => '15 de Julio de 2015 a las 12:41',
                'img' => 'dummy/home_post3_dummy.png',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat
                        ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis
                        rerum.'
            )
        );
    }

}
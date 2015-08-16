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
 * @version 0.5.1
 * @since   0.4.5
 */
class Fbb_model extends CI_Model
{

    /* - - HOME - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    public function get_home_slider()
    {
        return array(
            array(
                'img' => 'slider-full-1.png',
                'link' => '#',
                'title' => 'Subasta activa'
            ),
            array(
                'img' => 'slider-full-2.png',
                'link' => '#',
                'title' => 'Nuevo producto'
            ),
            array(
                'img' => 'slider-full-3.png',
                'link' => '#',
                'title' => 'Otra cosa, no se qué'
            ),
            array(
                'img' => 'slider-full-4.png',
                'link' => '#',
                'title' => 'Nuevo concierto'
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
            $user['name'] = 'jennifer lawrance';
            $user['nickname'] = 'La loquita del arco';
            $user['profession'] = 'Soldadora de alambres';
            $user['lives_in'] = 'Penco chico';
            $user['auto_desc'] = 'Soy latina de corazón, me agrada jugar con el
            aire para provocar terror en el aire, el tiempo me ha encontrado
            jugando con su hijo, por lo que ahora mato gente en un programa de
            la tele.';
            $user['img'] = 'perfil.png';
            $user['type'] = 'artesana';
            $user['links'] = array(
                array(
                    'category' => 'facebook-official',
                    'color' => 'color-facebook',
                    'label' => 'jenny_lapulenta',
                    'link' => 'http://www.google.com/search?q=penita'
                ),
                array(
                    'category' => 'twitter',
                    'color' => 'color-twitter',
                    'label' => '@jenny_lapulenta',
                    'link' => 'http://www.google.com/search?q=guaripolo'
                ),
                array(
                    'category' => 'globe',
                    'color' => '',
                    'label' => 'Página personal',
                    'link' => 'http://www.google.com/search?q=trafampulli'
                )
            );
            $user['feed'] = array(
                array(
                    'date' => '05 de Junio de 2015',
                    'message' => 'Se ha concretado una venta
                        por el artículo <strong>Estampida de roedores</strong>.',
                    'category' => 'sold',
                    'points' => 10
                ),
                array(
                    'date' => '01 de Junio de 2015',
                    'message' => 'Se agregaron fotografías para
                            el artículo <strong>Miguel me cae mal</strong>.',
                    'category' => 'new-photos',
                    'points' => 10
                ),
                array(
                    'date' => '21 de Mayo de 2015',
                    'message' => 'Se ha publicado un nuevo
                            artículo en el catálogo con el nombre
                            <strong>Estampida de roedores</strong>.',
                    'category' => 'new-product',
                    'points' => 10
                ),
                array(
                    'date' => '01 de Mayo de 2015',
                    'message' => 'Se ha alcanzado los
                            <strong>100</strong> favoritos para todos los productos
                            del artista (en total).',
                    'category' => 'star',
                    'points' => 10
                ),
                array(
                    'date' => '22 de Abril de 2015',
                    'message' => 'Se ha publicado una nueva
                            entrada en el blog de Flota Biobío.',
                    'category' => 'published',
                    'points' => 10
                ),
                array(
                    'date' => '31 de Diciembre de 2014',
                    'message' => 'Se ha creado el artista.',
                    'category' => 'created',
                    'points' => 10
                )
            );
        } elseif ($id == 2) {
            $user['level'] = 1;
            $user['user_variant'] = ' feed-variant';
            $user['name'] = 'bruno godoy';
            $user['lives_in'] = 'Curanilahue';
            $user['auto_desc'] = 'Caminante nocturno y blanco, me gusta vaciar
            mi escopeta con algunos bueyes salvajes y con conejos domésticos.';
            $user['img'] = 'perfil2.png';
            $user['type'] = 'usuario';
            $user['links'] = array(
                array(
                    'category' => 'facebook-official',
                    'color' => 'color-facebook',
                    'label' => 'el_bruno_loco',
                    'link' => 'http://www.google.com/search?q=cachupin'
                ),
                array(
                    'category' => 'google-plus-square',
                    'color' => 'color-google-plus',
                    'label' => '+BrunoGodoy',
                    'link' => 'http://www.google.com/search?q=pachamama'
                ),
                array(
                    'category' => 'deviantart',
                    'color' => 'color-deviantart',
                    'label' => 'brunin-chevere',
                    'link' => 'http://www.google.com/search?q=banana'
                ),
                array(
                    'category' => 'linkedin-square',
                    'color' => 'color-linkedin',
                    'label' => 'elbruno',
                    'link' => 'http://www.google.com/search?q=sylvanas'
                )
            );
            $user['feed'] = array(
                array(
                    'date' => '05 de Junio de 2015',
                    'message' => 'Concretar una compra en la tienda',
                    'category' => 'sold',
                    'points' => 10
                ),
                array(
                    'date' => '01 de Junio de 2015',
                    'message' => 'Establecer una foto de perfil.',
                    'category' => 'new-photos',
                    'points' => 2
                ),
                array(
                    'date' => '21 de Mayo de 2015',
                    'message' => 'Agregar un producto a favoritos.',
                    'category' => 'star',
                    'points' => 2
                ),
                array(
                    'date' => '22 de Abril de 2015',
                    'message' => 'Comentar un post del blog',
                    'category' => 'published',
                    'points' => 1
                ),
                array(
                    'date' => '31 de Diciembre de 2014',
                    'message' => 'Registrar una cuenta en Flota Biobío.',
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
                'title' => 'Premiación e Inauguración Concurso de Pintura "Derechos Humanos e Infancia"',
                'author' => 'Anibal Llanos',
                'date' => '15 de Julio de 2015 a las 12:41',
                'img' => 'catalogue/p/p1c.png',
                'desc' => 'El cuento es compartido tanto por vía oral como escrita; aunque en un principio,
                        lo más común era por tradición oral. Además, puede dar cuenta de hechos reales o fantásticos pero siempre
                        partiendo de la base de ser un acto de ficción, o mezcla de ficción con hechos reales y personajes reales.'
            ),
            array(
                'title' => 'Exposición “Colección Palacio Vergara” Muestra Pictorica del Museo de Bellas Artes de Viña del Mar, Chile',
                'author' => 'Anibal Llanos',
                'date' => '15 de Julio de 2015 a las 12:41',
                'img' => 'catalogue/p/p3c.png',
                'desc' => 'Suele contener pocos personajes que participan en una sola acción central, y hay quienes opinan
                        que un final impactante es requisito indispensable de este género. Su objetivo es despertar una
                        reacción emocional impactante en el lector. Aunque puede ser escrito en verso, total o
                        parcialmente, de forma general se da en prosa. Se realiza mediante la intervención de un narrador,
                        y con preponderancia de la narración sobre el monólogo, el diálogo, o la descripción.'
            ),
            array(
                'title' => 'Se estrena la exosición "Tiempos de cosas inputiles" en la sala VIP del palacio Llanos',
                'author' => 'Anibal Llanos',
                'date' => '15 de Julio de 2015 a las 12:41',
                'img' => 'catalogue/p/p5c.png',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat
                        ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis
                        rerum.'
            )
        );
    }

}
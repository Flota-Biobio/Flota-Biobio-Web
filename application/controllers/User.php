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
 * Class User
 * Controlador de CodeIgniter
 * 
 * Gestiona el acceso y uso al módulo de usuarios
 * 
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.4.2
 * @since   0.2.3
 */
class User extends CI_Controller
{

    /**
     * Función profile
     * Muestra el perfil de un usuario, dada su ID.
     *
     * @param string $id Identificador del usuario a consultar
     */
    public function profile($id)
    {
        $user = $this->get_user_info($id);

        $this->render->add_base();
        $this->render->add_css('parts/user/profile');
        $this->render->add_css('font-awesome.min');
        $this->render->set_title('Perfil de usuario - Flota Biobio');
        $this->render->set_value('breadcrumb_position', array(
            'position' => array(
                array(
                    'link' => '',
                    'label' => 'Inicio'
                ),
                array(
                    'link' => false,
                    'label' => 'Usuario'
                ),
                array(
                    'link' => false,
                    'label' => 'Perfil',
                    'active' => true
                )
            )
        ));

        $this->render->add_view('parts/user/profile', $user);

        $this->render->render('base');

    }

    protected function get_user_info($id)
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

}
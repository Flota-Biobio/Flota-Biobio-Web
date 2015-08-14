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
 * Vista: profile
 * Vista del perfil de un usuario
 *
 * @author  George Shazkho <shazkho@gmail.com>
 * @version 0.5
 * @since   0.4.1
 *
 * @var string $name
 * @var string $type
 * @var string $img
 * @var array $links
 * @var array $feed
 * @var string $nickname
 * @var string $profession
 * @var string $lives_in
 * @var int $level
 * @var string $auto_desc
 * @var string $user_variant
 */
?>
<div class="profile color-gray-20">
    <div class="container shadowed border-gray-85">
        <div class="profile-content row background-gray-95">

            <div class="user-col col-sm-4">

                <div class="user-badge shadowed">
                    <div class="badge-img">
                        <?=$this->assets_manager->img($img, 'user/', ucwords($name), '', 'img-circle shadowed')?>
                    </div>
                    <div class="badge-data">
                        <span class="user-name font-400 color-gray-20"><?=ucwords($name)?></span>
                        <span class="user-sub-name font-300 color-gray-20"><?=ucwords($type)?></span>
                        <hr>
                        <ul class="link-list list-unstyled">
                            <?php foreach ($links as $link): ?>
                            <li>
                                <i class="fa fa-<?=$link['category']?> fa-2x <?=$link['color']?>"></i>&nbsp;&nbsp;&nbsp;
                                <a href="<?=$link['link']?>"><?=$link['label']?></a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="user-details font-400 shadowed border-gray-85">
                    <dl>
                        <dt>NOMBRE REAL</dt>
                        <dd><?=ucwords($name)?></dd>
                        <?php if ($level == 10): ?>
                        <dt>NOMBRE ARTÍSTICO</dt>
                        <dd><?=$nickname?></dd>
                        <dt>PROFESIÓN</dt>
                        <dd><?=$profession?></dd>
                        <?php endif ?>
                        <dt>RESIDENCIA</dt>
                        <dd><?=$lives_in?></dd>
                        <dt>AUTO-DESCRIPCIÓN</dt>
                        <dd><?=$auto_desc?></dd>
                    </dl>
                </div>

            </div>

            <div class="main-col row col-sm-8">

                <?php if ($level == 1): ?>
                <div class="user-points col-sm-12 shadow-post shadowed">
                    <div class="points-total background-accent">14</div>
                    <div class="points-message">
                        <span class="points-message-title color-gray-20 font-300">
                            Tienes muchos puntos
                        </span>
                        <span class="points-message-subtitle secondary-color">
                            Acumula puntos para acceder a beneficios
                        </span>
                    </div>
                    <div class="points-buttons">
                        <button type="button" class="btn btn-default btn-sm mb-5">¿Para que sirven?</button>
                        <button type="button" class="btn btn-default btn-sm">Canjear</button>
                    </div>
                </div>
                <div class="space-30 col-sm-12"></div>
                <?php endif; ?>

                <?php if ($level == 10): ?>
                <div class="row-title col-sm-12">
                    <h3>Obras populares</h3>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background shadowed border-gray-30" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p9.png')?>');"></div>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background shadowed border-gray-30" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p8.png')?>');"></div>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background shadowed border-gray-30" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p7.png')?>');"></div>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background shadowed border-gray-30" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p6.png')?>');"></div>
                </div>
                <div class="trend-product col-sm-4">
                    <div class="shadow-box soft-background shadowed border-gray-30" style="background-image: url('<?=$this->assets_manager->asset_url('images/catalogue/p4.png')?>');"></div>
                </div>

                <div class="space-30 col-sm-12"></div>
                <?php endif; ?>

                <div class="row-title col-sm-12">
                    <?php if ($user_variant): ?>
                    <h3>Últimos logros obtenidos</h3>
                    <?php else: ?>
                    <h3>Actividad reciente</h3>
                    <?php endif ?>
                </div>

                <?php foreach ($feed as $post): ?>
                <div class="feed-post col-sm-12 shadow-post shadowed border-gray-15">
                    <?=$this->assets_manager->img($post['category'].'.png', 'user/feed/', '')?>
                    <div class="feed-post-body<?=$user_variant?>">
                        <span class="feed-post-date"><?=$post['date']?></span>
                        <span class="feed-post-message"><?=$post['message']?></span>
                    </div>
                    <?php if ($level == 1): ?>
                    <div class="feed-points color-accent-20">+<?=$post['points']?></div>
                    <?php endif; ?>
                </div>
                <?php endforeach ?>

            </div>

            <div class="space-30 col-sm-12"></div>

        </div>
    </div>
</div>



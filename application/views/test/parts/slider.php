<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @var array $slider_info
 */
?>

<div id="sliderFrame">
    <div id="slider">
        <?php foreach ($slider_info as $slide): ?>
        <a href="<?=$slide['link']?>" target="_blank">
            <img src="<?=base_url('assets/images/slider/'.$slide['img'])?>"
                 alt="<?=$slide['title']?>" />
        </a>
        <?php endforeach; ?>
    </div>
    <!--thumbnails-->
    <div id="thumbs">
        <?php foreach ($slider_info as $slide): ?>
        <div class="thumb">
            <div class="frame">
                <img src="<?=base_url('assets/images/slider/'.$slide['thumb'])?>" />
            </div>
            <div class="thumb-content">
                <p><?=$slide['title']?></p><?=$slide['detail']?>
            </div>
            <div style="clear:both;"></div>
        </div>
        <?php endforeach; ?>
    </div>
    <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
    <div style="clear:both;height:0;"></div>
</div>

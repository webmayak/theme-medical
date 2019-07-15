<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:34 AM
 */

use pantera\content\widgets\block\Block;
use yii\web\View;

/* @var $this View */
?>

<!--
<div class="footer-middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 ">
                <div id="nav_menu-3" class="widget widget_nav_menu">
                    <div class="menu-quick-link-container">
                        <ul id="menu-quick-link" class="menu">
                            <li id="menu-item-86" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-86"><a href="http://demo.themexbd.com/wpt/galenical/#">Academic Clander</a></li>
                            <li id="menu-item-87" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-87"><a href="http://demo.themexbd.com/wpt/galenical/#">Department</a></li>
                            <li id="menu-item-88" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88"><a href="http://demo.themexbd.com/wpt/galenical/#">Appointment</a></li>
                            <li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-89"><a href="http://demo.themexbd.com/wpt/galenical/#">Treatment</a></li>
                            <li id="menu-item-90" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-90"><a href="http://demo.themexbd.com/wpt/galenical/#">Food Serving</a></li>
                            <li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91"><a href="http://demo.themexbd.com/wpt/galenical/#">Clothe</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 ">
                <div id="em_recent_post_widget-6" class="widget widget_recent_data">
                    <div class="single-widget-item">
                        <div class="recent-post-item">
                            <div class="recent-post-image">
                                <a href="http://demo.themexbd.com/wpt/galenical/what-is-the-success-rate/">

                                    <img width="100" height="71" src="./Galenical – Medical &amp; Health Service WP Theme_files/6.jpg" class="attachment-galenical_recent_image size-galenical_recent_image wp-post-image" alt="" srcset="http://demo.themexbd.com/wpt/galenical/wp-content/uploads/2017/10/6.jpg 750w, http://demo.themexbd.com/wpt/galenical/wp-content/uploads/2017/10/6-300x214.jpg 300w" sizes="(max-width: 100px) 100vw, 100px">
                                </a>

                            </div>
                            <div class="recent-post-text">
                                <h4><a href="http://demo.themexbd.com/wpt/galenical/what-is-the-success-rate/">
                        What is the success Rate                                        
                    </a></h4>
                                <span class="rcomment">October 16, 2017</span>
                            </div>
                        </div>

                        <div class="recent-post-item">
                            <div class="recent-post-image">
                                <a href="http://demo.themexbd.com/wpt/galenical/operation-theater-service/">

                                    <img width="100" height="71" src="./Galenical – Medical &amp; Health Service WP Theme_files/3-1.jpg" class="attachment-galenical_recent_image size-galenical_recent_image wp-post-image" alt="" srcset="http://demo.themexbd.com/wpt/galenical/wp-content/uploads/2017/10/3-1.jpg 750w, http://demo.themexbd.com/wpt/galenical/wp-content/uploads/2017/10/3-1-300x214.jpg 300w" sizes="(max-width: 100px) 100vw, 100px">
                                </a>

                            </div>
                            <div class="recent-post-text">
                                <h4><a href="http://demo.themexbd.com/wpt/galenical/operation-theater-service/">
                        Operation Theater Service                                       
                    </a></h4>
                                <span class="rcomment">October 16, 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 last">
                <div id="about_us-widget-4" class="widget about_us">
                    
                </div>
            </div>
            <div class="col-sm-6 col-md-3 ">
                <div id="text-3" class="widget widget_text text-right">
                    <a href="/">
                        <img src="/images/logo.svg" alt="Индиавир" id="logo">
                    </a>
                    <div class="textwidget">
                        <p>INDIAVIR © 2017 | Внимание! Информация о всех лекарственных препаратах на нашем сайте и в социальных сетях представлена для ознакомительных целей и не является рекомендацией или инструкцией к применению препарата. Проконсультируйтесь с врачом перед использованием! Остерегайтесь подделок.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
-->

<footer>
    <div class="footer-1">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-md-3">
                    <div class="footer-menu">
                        <div class="footer-menu__title" data-toggle="collapse" data-target="#fm1">
                            РАЗДЕЛЫ
                            <div class="icon">
                                <img src="/images/svg/chevron.svg" alt="">
                            </div>
                        </div>
                        <div id="fm1" class="collapse-holder collapse">
                            <?= Block::widget([
                                'position' => 'footerMenu',
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <div class="footer-menu__title" data-toggle="collapse" data-target="#fm2">
                            НАШИ УСЛУГИ
                            <div class="icon">
                                <img src="/images/svg/chevron.svg" alt="">
                            </div>
                        </div>
                        <div id="fm2" class="collapse-holder collapse">
                            <?= Block::widget([
                                'position' => 'footerService',
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <div class="footer-menu__title" data-toggle="collapse" data-target="#fm3">
                            РЕЖИМ РАБОТЫ
                            <div class="icon">
                                <img src="/images/svg/chevron.svg" alt="">
                            </div>
                        </div>
                        <div id="fm3" class="collapse-holder collapse">
                            <?= Block::widget([
                                'position' => 'footerSchedule',
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <div class="footer-menu__title" data-toggle="collapse" data-target="#fm4">
                            КОНТАКТЫ
                            <div class="icon">
                                <img src="/images/svg/chevron.svg" alt="">
                            </div>
                        </div>
                        <div id="fm4" class="collapse-holder collapse">
                            <?= Block::widget([
                                'position' => 'footerContact',
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="footer">
                <div>
                    <?= Block::widget([
                        'position' => 'copyrightLeft',
                    ]) ?>
                </div>
                <div>
                    <?= Block::widget([
                        'position' => 'copyrightCenter',
                    ]) ?>
                </div>
                <div>
                    <?= Block::widget([
                        'position' => 'copyrightRight',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</footer>

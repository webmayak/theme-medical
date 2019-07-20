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

<footer id="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 first">
                    <?= Block::widget([
                        'position' => 'footer1',
                    ]) ?>

                    <div class="creative_header_address">
                        <div class="single_header_address">
                            <div class="creative_header_icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="creative_header_address_text">
                                <h3>Телефон</h3>
                                <a href="tel:+73812208404">+7 (3812) 208-404</a>
                            </div>
                        </div>
                        <div class="single_header_address">
                            <div class="creative_header_icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="creative_header_address_text">
                                <h3>Бесплатная консультация</h3>
                                <a href="tel:+79836222454">+7 (983) 622-24-54</a>
                            </div>
                        </div>
                        <div class="single_header_address">
                            <div class="creative_header_icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="creative_header_address_text">
                                <h3>Главный офис</h3>
                                <a href="/contacts" style="font-size: 13px;">г. Омск, ул. Маршала Жукова<br>74/2 (офис 315)</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <img src="/images/footer-social-icons-stub.svg">
                    <div class="creative_header_address" style="margin-top: 45px;">
                        <div class="single_header_address">
                            <div class="creative_header_icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="creative_header_address_text">
                                <h3>Электронная почта</h3>
                                <a href="mailto:indiavirexpress@gmail.com" style="font-size: 13px;">indiavirexpress@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <?= Block::widget([
                        'position' => 'footer2',
                    ]) ?>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li><a href="/price">Цена</a></li>
                            <li><a href="/catalog">Каталог</a></li>
                            <li><a href="/article">Лечение</a></li>
                            <li><a href="/faq">Вопрос-ответ</a></li>
                            <li><a href="/article">О гепатите</a></li>
                            <li><a href="/reviews">Отзывы</a></li>
                            <li><a href="/dostavka">Доставка</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                            <li><a href="/specials">Акции</a></li>
                        </ul>
                    </div>
                    <?= Block::widget([
                        'position' => 'footer3',
                    ]) ?>
                </div>
                <div class="col-sm-6 col-md-3 text-right last">
                    <a href="/">
                        <img src="/images/logo.svg" alt="Индиавир" id="logo">
                    </a>
                    <div class="textwidget">
                        INDIAVIR © 2017 | Внимание! Информация о всех лекарственных препаратах на нашем сайте и в социальных сетях представлена для ознакомительных целей и не является рекомендацией или инструкцией к применению препарата. Проконсультируйтесь с врачом перед использованием! Остерегайтесь подделок.
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?= Block::widget([
                        'position' => 'copyrightLeft',
                    ]) ?>
                </div>
                <div class="col-md-3">
                    <?= Block::widget([
                        'position' => 'copyrightCenter',
                    ]) ?>
                </div>
                <div class="col-md-3">
                    <?= Block::widget([
                        'position' => 'copyrightRight',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</footer>

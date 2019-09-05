<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:33 AM
 */

use yii\helpers\Html;
use yii\web\View;
use pantera\content\widgets\block\Block;

/* @var $this View */
?>
<header>
    <div class="container">
        <div class="top-panel">
            <?php if (0): ?>
            <span class="top-panel__low-vision" title="Версия сайта для слабовидящих">
                <a rel="nofollow" class="top-panel__low-vision-toggle">Версия сайта для слабовидящих</a>
                <a rel="nofollow" class="top-panel__low-vision-toggle top-panel__low-vision-toggle_back">Обычная версия сайта</a>
            </span>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-2 col-lg-3 top-panel__col-logo">
                    <a href="/">
                        <img src="/images/logo.svg" alt="Индиавир" id="logo" />
                    </a>
                </div>
                <div class="col-md-8 col-lg-6 top-panel__col-contacts">
                    <div class="creative_header_address">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single_header_address first">
                                <div class="creative_header_icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="creative_header_address_text">
                                    <h3>Телефон</h3>
                                    <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->settings->get('phone_city', 'contacts')) ?>"><?= Yii::$app->settings->get('phone_city', 'contacts') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                            <div class="single_header_address" style="position: relative; left: -30px;">
                                <div class="creative_header_icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="creative_header_address_text">
                                    <h3 style="margin-right: -30px;">Бесплатная&nbsp;консультация</h3>
                                    <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->settings->get('phone_mobile', 'contacts')) ?>"><?= Yii::$app->settings->get('phone_mobile', 'contacts') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                            <div class="single_header_address ctrp" style="position: relative; left: -20px; margin-right: -35px;">
                                <div class="creative_header_icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="creative_header_address_text">
                                    <h3>Главный офис</h3>
                                    <a href="/contacts" style="font-size: 13px; line-height: 1.6em; display: inline-block;"><?= nl2br(Yii::$app->settings->get('address', 'contacts')) ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-lg-3 top-panel__col-buttons text-right">
                    <div class="top-panel__icons">
                        <a href="<?= Yii::$app->settings->get('social_facebook', 'contacts') ?>" target="_blank"><img src="/images/icon-fb.svg"></a>
                        <a href="<?= Yii::$app->settings->get('social_whatsapp', 'contacts') ?>" target="_blank"><img src="/images/icon-wa.svg"></a>
                        <a href="<?= Yii::$app->settings->get('social_youtube', 'contacts') ?>" target="_blank"><img src="/images/icon-youtube.svg"></a>
                        <a href="<?= Yii::$app->settings->get('social_instagram', 'contacts') ?>" target="_blank"><img src="/images/icon-instagram.svg"></a>
                        <a href="<?= Yii::$app->settings->get('social_vkontakte', 'contacts') ?>" target="_blank"><img src="/images/icon-vk.svg"></a>
                    </div>
                    <div class="top-panel__email">
                        <i class="fa fa-envelope"></i> <a href="mailto:<?= Yii::$app->settings->get('email', 'contacts') ?>" style="font-size: 13px;"><?= Yii::$app->settings->get('email', 'contacts') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="wsmobileheader clearfix">
    <div class="container">
        <div class="wsmobileheader__holder">
            <a id="wsnavtoggle">
                <div class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </div>
            </a>
            <div class="logo">
                <a href="/">
                    <img src="/images/logo.svg" height="30" style="margin-top: 8px; margin-left: -40px;" alt=""/>
                </a>
            </div>
        </div>
    </div>
</div>

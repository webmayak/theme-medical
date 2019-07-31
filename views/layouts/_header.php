<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:33 AM
 */

use pantera\leads\widgets\form\LeadForm;
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
                        <?= Block::widget([
                            'position' => 'header_contacts',
                        ]) ?>
                    </div>
                </div>
                <div class="col-md-2 col-lg-3 top-panel__col-buttons text-right">
                    <?= Block::widget([
                        'position' => 'header_socials',
                    ]) ?>
                    <?php if (0): ?>
                    <div class="top-panel__buttons">
                        <?= LeadForm::widget([
                            'key' => 'question',
                            'text' => 'Задать вопрос<span class="hidden-md"> доктору</span>',
                            'options' => [
                                'class' => 'btn btn-default btn-block text-uppercase',
                            ],
                        ]) ?>
                        <a class="btn-primary btn btn-block text-uppercase" href="/zapis-online" style="margin-top: 10px;">Оформить заказ</a>
                    </div>
                    <?php endif; ?>
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
                    <img src="/images/logo.svg" height="30" style="margin-top: 10px; margin-left: -40px;" alt=""/>
                </a>
            </div>
            <div class="mobile-contacts">
                <a class="mobile-contacts__item" href="tel:+73812208404">8 (3812) 208-404</a>
                <a class="mobile-contacts__item" href="tel:+79836222454">+7 (983) 622-24-54</a>
            </div>
        </div>
    </div>
</div>

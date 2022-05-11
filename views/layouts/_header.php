<?php

use yii\helpers\Html;
use yii\web\View;
use pantera\content\widgets\block\Block;
use pantera\leads\widgets\form\LeadForm;
use pantera\geolocation\widgets\geolocation\Geolocation;

/* @var $this View */
?>
<div class="top-controls">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-5">
                <div class="top-controls__left">
                    <?= Geolocation::widget([
                        'labelYourLocation' => 'Ваш город:',
                        'labelLocationNotDetected' => 'не указан',
                        'labelChangeLocation' => 'Выбрать город',
                    ]) ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-7">
                <div class="top-controls__right">
                    <?= LeadForm::widget([
                        'key' => 'iDoctor',
                        'text' => 'Я врач<span class="hidden-sm hidden-xs"> - желаю сотрудничать</span>',
                        'options' => [
                            'class' => '',
                        ],
                    ]) ?>
                    <?= LeadForm::widget([
                        'key' => 'getRecommendations',
                        'text' => 'Заказать обратный звонок',
                        'options' => [
                            'class' => '',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
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
                <div class="col-md-3 col-lg-3 top-panel__col-logo">
                    <a href="/">
                        <img src="/images/logo.svg" alt="Индиавир" id="logo" />
                    </a>
                    <small class="top-panel__logo-text"><?= Yii::$app->settings->get('default.slogan') ?></small>
                </div>
                <div class="col-md-6 col-lg-6 top-panel__col-contacts">
                    <div class="creative_header_address">
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                            <div class="single_header_address first">
                                <div class="creative_header_icon">
                                    <?= LeadForm::widget([
                                        'key' => 'callMe',
                                        'text' => '<i class="fa fa-phone"></i>',
                                        'options' => [
                                            'class' => '',
                                        ],
                                    ]) ?>
                                </div>
                                <div class="creative_header_address_text">
                                    <div class="h3">Телефон</div>
                                    <div class="creative_header_address_list">
                                        <?php if (Yii::$app->devicedetect->isMobile() || Yii::$app->devicedetect->isTablet()): ?>
                                            <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_city')) ?>"><?= Yii::$app->contactsManager->get('phone_city') ?></a>
                                        <?php else: ?>
                                            <?= LeadForm::widget([
                                                'key' => 'callMe',
                                                'text' => Yii::$app->contactsManager->get('phone_city'),
                                                'options' => [
                                                    'class' => '',
                                                ],
                                            ]) ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                            <div class="single_header_address second">
                                <div class="creative_header_icon">
                                    <?= LeadForm::widget([
                                        'key' => 'callMe',
                                        'text' => '<i class="fa fa-phone"></i>',
                                        'options' => [
                                            'class' => '',
                                        ],
                                    ]) ?>
                                </div>
                                <div class="creative_header_address_text">
                                    <div class="h3">Бесплатная&nbsp;консультация</div>
                                    <div class="creative_header_address_list">
                                        <?php if (Yii::$app->devicedetect->isMobile() || Yii::$app->devicedetect->isTablet()): ?>
                                            <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_mobile')) ?>"><?= Yii::$app->contactsManager->get('phone_mobile') ?></a>
                                            <?php if ($phone_mobile_hiv = Yii::$app->contactsManager->get('phone_mobile_hiv')): ?>
                                                <a href="tel:<?= preg_replace('/[^0-9\+]/', '', $phone_mobile_hiv) ?>"><?= $phone_mobile_hiv ?> <span class="small text-red">— по ВИЧ</span></a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?= LeadForm::widget([
                                                'key' => 'callMe',
                                                'text' => Yii::$app->contactsManager->get('phone_mobile'),
                                                'options' => [
                                                    'class' => '',
                                                ],
                                            ]) ?>
                                            <?php if ($phone_mobile_hiv = Yii::$app->contactsManager->get('phone_mobile_hiv')): ?>
                                                <?= LeadForm::widget([
                                                    'key' => 'callMe',
                                                    'text' => $phone_mobile_hiv . ' <span class="small text-red">— по ВИЧ</span>',
                                                    'options' => [
                                                        'class' => '',
                                                    ],
                                                ]) ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-4 col-xs-12">
                            <div class="single_header_address third">
                                <a href="/contacts" class="creative_header_icon">
                                    <i class="fa fa-map-marker"></i>
                                </a>
                                <div class="creative_header_address_text">
                                    <div class="h3">Главный офис</div>
                                    <div class="creative_header_address_list">
                                        <a href="/contacts"><?= nl2br(Yii::$app->contactsManager->get('address')) ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 top-panel__col-buttons text-right">
                    <div class="top-panel__icons">
                        <?php if ($social_whatsapp = Yii::$app->contactsManager->get('social_whatsapp')):  ?><a href="<?= $social_whatsapp ?>" target="_blank"><img src="/images/icon-wa.svg"></a><?php endif; ?>
                        <?php if ($social_telegram = Yii::$app->contactsManager->get('social_telegram')):  ?><a href="<?= $social_telegram ?>" target="_blank"><img src="/images/icon-tg.svg"></a><?php endif; ?>
                        <?php if ($social_youtube = Yii::$app->contactsManager->get('social_youtube')):   ?><a href="<?= $social_youtube ?>" target="_blank"><img src="/images/icon-youtube.svg"></a><?php endif; ?>
                        <?php if ($social_instagram = Yii::$app->contactsManager->get('social_instagram')): ?><a href="<?= $social_instagram ?>" target="_blank"><img src="/images/icon-instagram.svg"></a><?php endif; ?>
                        <?php if ($social_vkontakte = Yii::$app->contactsManager->get('social_vkontakte')): ?><a href="<?= $social_vkontakte ?>" target="_blank"><img src="/images/icon-vk.svg"></a><?php endif; ?>
                    </div>
                    <div class="top-panel__email">
                        <i class="fa fa-envelope"></i> <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" style="font-size: 13px;"><?= Yii::$app->contactsManager->get('email') ?></a>
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

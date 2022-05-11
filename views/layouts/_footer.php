<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:34 AM
 */

use pantera\leads\widgets\form\LeadForm;
use pantera\content\widgets\block\Block;
use yii\web\View;

/* @var $this View */
?>

<footer id="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 first">
                    <div class="creative_header_address">
                        <div class="single_header_address">
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
                                <h3>Телефон</h3>
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
                        <div class="single_header_address">
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
                                <h3>Бесплатная консультация</h3>
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
                        <div class="single_header_address">
                            <a href="/contacts" class="creative_header_icon">
                                <i class="fa fa-map-marker"></i>
                            </a>
                            <div class="creative_header_address_text">
                                <h3>Главный офис</h3>
                                <div class="creative_header_address_list">
                                    <a href="/contacts" style="font-size: 13px;"><?= nl2br(Yii::$app->contactsManager->get('address')) ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="bottom-panel__icons hidden-sm hidden-xs">
                        <?php if ($social_whatsapp = Yii::$app->contactsManager->get('social_whatsapp')):  ?><a href="<?= $social_whatsapp ?>" target="_blank"><img src="/images/icon-wa.svg"></a><?php endif; ?>
                        <?php if ($social_telegram = Yii::$app->contactsManager->get('social_telegram')):  ?><a href="<?= $social_telegram ?>" target="_blank"><img src="/images/icon-tg.svg"></a><?php endif; ?>
                        <?php if ($social_youtube = Yii::$app->contactsManager->get('social_youtube')):   ?><a href="<?= $social_youtube ?>" target="_blank"><img src="/images/icon-youtube.svg"></a><?php endif; ?>
                        <?php if ($social_instagram = Yii::$app->contactsManager->get('social_instagram')): ?><a href="<?= $social_instagram ?>" target="_blank"><img src="/images/icon-instagram.svg"></a><?php endif; ?>
                        <?php if ($social_vkontakte = Yii::$app->contactsManager->get('social_vkontakte')): ?><a href="<?= $social_vkontakte ?>" target="_blank"><img src="/images/icon-vk.svg"></a><?php endif; ?>
                    </div>
                    <div class="creative_header_address">
                        <div class="single_header_address">
                            <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" class="creative_header_icon">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <div class="creative_header_address_text">
                                <h3>Электронная почта</h3>
                                <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" style="font-size: 13px;"><?= Yii::$app->contactsManager->get('email') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="footer-menu">
                        <?= Block::widget([
                            'position' => 'footer3',
                        ]) ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 last">
                    <?= Block::widget([
                        'position' => 'footer4',
                    ]) ?>
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

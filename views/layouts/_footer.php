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
                <div class="col-sm-6 col-md-3 first">
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
                                <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->settings->get('phone_city', 'contacts')) ?>"><?= Yii::$app->settings->get('phone_city', 'contacts') ?></a>
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
                                <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->settings->get('phone_mobile', 'contacts')) ?>"><?= Yii::$app->settings->get('phone_mobile', 'contacts') ?></a>
                            </div>
                        </div>
                        <div class="single_header_address">
                            <a href="/contacts" class="creative_header_icon">
                                <i class="fa fa-map-marker"></i>
                            </a>
                            <div class="creative_header_address_text">
                                <h3>Главный офис</h3>
                                <a href="/contacts" style="font-size: 13px;"><?= nl2br(Yii::$app->settings->get('address', 'contacts')) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="bottom-panel__icons hidden-sm hidden-xs">
                        <a href="<?= Yii::$app->settings->get('social_facebook', 'contacts') ?>" target="_blank"><img src="/images/icon-fb.svg"></a>
                        <a href="<?= Yii::$app->settings->get('social_whatsapp', 'contacts') ?>" target="_blank"><img src="/images/icon-wa.svg"></a>
                        <a href="<?= Yii::$app->settings->get('social_youtube', 'contacts') ?>" target="_blank"><img src="/images/icon-youtube.svg"></a>
                        <a href="<?= Yii::$app->settings->get('social_instagram', 'contacts') ?>" target="_blank"><img src="/images/icon-instagram.svg"></a>
                        <a href="<?= Yii::$app->settings->get('social_vkontakte', 'contacts') ?>" target="_blank"><img src="/images/icon-vk.svg"></a>
                    </div>
                    <div class="creative_header_address">
                        <div class="single_header_address">
                            <a href="mailto:<?= Yii::$app->settings->get('email', 'contacts') ?>" class="creative_header_icon">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <div class="creative_header_address_text">
                                <h3>Электронная почта</h3>
                                <a href="mailto:<?= Yii::$app->settings->get('email', 'contacts') ?>" style="font-size: 13px;"><?= Yii::$app->settings->get('email', 'contacts') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="footer-menu">
	                    <?= Block::widget([
	                        'position' => 'footer3',
	                    ]) ?>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 last">
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

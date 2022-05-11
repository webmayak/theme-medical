<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\medical\widgets\mainCatalog\MainCatalog;
use frontend\themes\medical\widgets\videoList\VideoList;
use pantera\content\models\ContentPage;
use pantera\content\widgets\block\Block;
use pantera\content\widgets\slider\Slider;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

$this->context->layout = '//front';

/* @var $this View */
/* @var $model ContentPage */
/** @noinspection PhpUndefinedFieldInspection */
?><div class="content-block content-block--slider hidden-sm hidden-xs">
    <div class="container">
        <div class="slider-block">
            <div class="slider-block__left">
                <?= Slider::widget([
                    'pluginOptions' => [
                        'dots' => false,
                        'autoplay' => true,
                        'animateIn' => false,
                        'animateOut' => false,
                        'autoplayHoverPause' => true,
                    ],
                ]) ?>
            </div>
            <div class="slider-block__right">
                <div class="slider-block__info">
                    <div class="h3">НАШИ ПРЕИМУЩЕСТВА:</div>
                    <ul>
                        <li>консультирование</li>
                        <li>информационные услуги</li>
                        <li>доверяют более 25 городов</li>
                        <li>по России и странам СНГ</li>
                    </ul>
                    <div class="slider-block__icons">
                        <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_city')) ?>"><img src="/images/icon-phone-alt.svg" alt="Phone"></a>
                        <a href="<?= Yii::$app->contactsManager->get('social_whatsapp') ?>"><img src="/images/icon-wa-alt.svg" alt="WhatsApp"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (0): ?>

<div class="content-block">
    <div class="container">
        <div class="content-block__body">
            <?= Block::widget([
                'position' => 'text_about',
            ]) ?>
        </div>
    </div>
</div>

<?= $this->render('@theme/views/_features') ?>

<div class="content-block content-block--main-catalog">
    <div class="container">

        <h3 class="main-catalog__subtitle">Препараты для лечения гепатита C</h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(386),
                'limit' => 999,
            ]) ?>
        </div>
        
        <h3 class="main-catalog__subtitle"><a href="/catalog/preparaty-dlya-lechenia-gepatita-b">Препараты для лечения гепатита В</a></h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(393),
                'limit' => 3,
            ]) ?>
        </div>

        <h3 class="main-catalog__subtitle"><a href="/catalog/preparaty-dlya-lechenia-vich">Препараты для лечения ВИЧ</a></h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(387),
                'limit' => 3,
            ]) ?>
        </div>

        <?= $this->render('@theme/views/_fast-consult') ?>
    </div>
</div>
<?php endif; ?>

<div class="content-block">
    <div class="container">
        <div class="content-block__title text-center">Задать вопрос врачу</div>
        <?= LeadForm::widget([
            'key' => 'question-row',
            'mode' => LeadForm::MODE_INLINE,
        ]) ?>
        <?= $this->render('@theme/views/_faq-block') ?>
    </div>
</div>

<div class="container">
    <?= $this->render('@theme/views/_fast-consult') ?>
</div>

<div class="content-block content-block--fillwidth-bg">
    <div class="container">
        <?= Block::widget([
            'position' => 'hepatit_therapy_scheme',
        ]) ?>
        <?php if (0): ?>
        <div class="row">
            <div class="col-md-6">
                <a href="/uploads/elfinder/lechenie-1.jpg" data-fancybox="lechenie"><img src="/uploads/elfinder/lechenie-1.jpg" alt="" class="img-responsive" /></a>
            </div>
            <div class="col-md-6">
                <a href="/uploads/elfinder/lechenie-2.jpg" data-fancybox="lechenie"><img src="/uploads/elfinder/lechenie-2.jpg" alt="" class="img-responsive" /></a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->render('@theme/views/_quality-protection') ?>

<?php if (0): ?>
<div class="content-block">
    <div class="h2 content-block__title text-center">Химические исследования</div>
    <?= Block::widget([
        'position' => 'chemical_research',
    ]) ?>
</div>
<?php endif; ?>

<div class="content-block content-block--video">
    <div class="h2 content-block__title text-center" style="margin-bottom: 0px;">Видео о нас</div>
    <div class="container">
        <div class="front-page-video-holder">
            <?= VideoList::widget([
                'models' => CatalogCategory::findOne(110)->getChildrenActive()->limit(6)->all(),
            ]) ?>
        </div>
    </div>
</div>

<?php if ($model->body || $model->seo->h1): ?>
    <div class="content-block content-block--frontpage-content">
        <div class="container">
            <?php if ($model->seo->h1) : ?>
                <h1 class="title-home">
                    <?= $model->seo->h1 ?>
                </h1>
            <?php endif; ?>
            <?php if ($model->body) : ?>
                <div class="editor-content">
                    <?= $model->body ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

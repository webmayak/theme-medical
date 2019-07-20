<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\mainCatalog\MainCatalog;
use frontend\widgets\portfolioSlider\PortfolioSlider;
use frontend\widgets\stockOther\StockOther;
use pantera\content\models\ContentPage;
use pantera\content\widgets\block\Block;
use pantera\content\widgets\slider\Slider;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

$this->context->layout = '//front';

/* @var $this View */
/* @var $model ContentPage */
/** @noinspection PhpUndefinedFieldInspection */
?>
<div class="content-block content-block--slider">
    <div class="container">
        <?= Slider::widget([
            'pluginOptions' => [
                'dots' => true,
                'autoplay' => true,
                'animateIn' => false,
                'animateOut' => false,
                'autoplayHoverPause' => true,
            ],
        ]) ?>
    </div>
</div>

<?= $this->render('@theme/views/_text_about') ?>
<?= $this->render('@theme/views/_features') ?>

<div class="content-block content-block--main-catalog">
    <div class="container">
        <?= MainCatalog::widget([
            'root' => CatalogCategory::findOne(54),
            'onlyFirstLevel' => true,
        ]) ?>
    </div>
</div>

<div class="content-block">
    <div class="container">
		<?= $this->render('@theme/views/_price') ?>
		<?= $this->render('@theme/views/_fast-consult') ?>
	</div>
</div>

<div class="content-block">
	<div class="content-block__title text-center">Сертификаты на препараты</div>
	<div class="certificates">
		<a href="/uploads/elfinder/certificates/sofo-natko.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofo-natko.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofovir.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofovir.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sovihep.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sovihep.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofo-natko.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofo-natko.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofovir.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofovir.jpg" alt="" /></a>
	</div>
</div>

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

<div class="content-block content-block--fillwidth-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="/uploads/elfinder/lechenie-1.jpg" data-fancybox="lechenie"><img src="/uploads/elfinder/lechenie-1.jpg" alt="" class="img-responsive" /></a>
			</div>
			<div class="col-md-6">
				<a href="/uploads/elfinder/lechenie-2.jpg" data-fancybox="lechenie"><img src="/uploads/elfinder/lechenie-2.jpg" alt="" class="img-responsive" /></a>
			</div>
		</div>
	</div>
</div>

<div class="content-block">
	<div class="container">
		<div class="content-block__title text-center">Вы защищены от подделок</div>
		<div class="quality-protection d-flex d-flex__col-2">
			<div class="bordered-block small">
				<p>Мы с ответсвенностью ГАРАНТИРУЕМ отсутсвие подделок. И вот почему:</p>
				<p>Мы являемся официальным представителем фармацевтической компании JC Pharm (Индия) и у нас вы можете купить оригинальные препараты софосбувир, даклатасвир и ледипасвир производства Индии.</p>
				<p>Дженерики производятся по стандартам и конторлем Gilead Sciences и на их оборудовании.</p>
			</div>
			<div class="bordered-block small">
				<p>Софосбувир-индия.рф - официальный сайт представительства компании JC Pharm в Росcии</p>
				<p>JC Pharm является фармацевтической компанией зарегистированной в Индии</p>
				<p>Являемся официальным дистрибютером компании NATCO и HETERO</p>
				<p>Транспортировка дженерков осуществляется с соблюдением всех правил и температурного режима</p>
			</div>
		</div>
	</div>
</div>

<div class="content-block">
	<div class="container">
		<div class="brands text-center">
			<img src="/uploads/elfinder/brands/1.png" alt="" />
			<img src="/uploads/elfinder/brands/2.png" alt="" />
			<img src="/uploads/elfinder/brands/3.png" alt="" />
			<img src="/uploads/elfinder/brands/4.jpg" alt="" />
			<img src="/uploads/elfinder/brands/5.png" alt="" />
		</div>
	</div>
</div>

<div class="content-block">
	<div class="h2 content-block__title text-center">Химические исследования</div>
	<div class="chemical-research">
		<div class="chemical-research__item">
			<div><img src="/images/icon-doc.svg"></div>
			<div class="chemical-research__item-title">Hepcinat</div>
			<div><img src="/images/download-button.png"></div>
		</div>
		<div class="chemical-research__item">
			<div><img src="/images/icon-doc.svg"></div>
			<div class="chemical-research__item-title">Natdac</div>
			<div><img src="/images/download-button.png"></div>
		</div>
		<div class="chemical-research__item">
			<div><img src="/images/icon-doc.svg"></div>
			<div class="chemical-research__item-title">Hepcinat LP</div>
			<div><img src="/images/download-button.png"></div>
		</div>
		<div class="chemical-research__item">
			<div><img src="/images/icon-doc.svg"></div>
			<div class="chemical-research__item-title">Hepcinat Plus</div>
			<div><img src="/images/download-button.png"></div>
		</div>
	</div>
</div>

<div class="content-block content-block--video">
    <div class="container">
        <div class="front-page-video-holder">
            <?= Block::widget([
                'position' => 'front-video',
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

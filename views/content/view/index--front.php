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

<?= $this->render('@theme/views/_quality-protection') ?>

<div class="content-block">
	<div class="container">
		<div class="brands text-center">
			<?= Block::widget([
                'position' => 'brands',
            ]) ?>
		</div>
	</div>
</div>

<div class="content-block">
	<div class="h2 content-block__title text-center">Химические исследования</div>
	<?= Block::widget([
        'position' => 'chemical_research',
    ]) ?>
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

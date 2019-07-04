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

<div class="content-block">
	<div class="container">
		<div class="text-center">
			<h2>Быстрая доставка препаратов из Индии от ГЕПАТИТА С и др.</h2>
			<p>Компания «ИНДИАВИР» занимается организацией доставки лекарственных препаратов от Гепатита С (Софосбувир, Даклатасвир, Ледипасвир, Велпатасвир) из Индии. Мы заключаем официальный договор с клиентом. Лекарства доставляются курьерской службой EMS к Вашему порогу. Мы уверены в качестве продукции на все 100%. Весь путь от завода до клиента находится под контролем. Все лекарства имеют лицензии и сертификаты. Нам доверяют более 25 городов России и стран СНГ. Заказывая препараты от Гепатита С в компании «INDIAVIR», вы получаете КАЧЕСТВО от производителя и ГАРАНТИЮ выздоровления от Гепатита С НАВСЕГДА. Сотни людей уже вылечились от этой страшной болезни, обратившись в компанию «Индиавир». Обратитесь и Вы! Мы не просто помогаем приобрести лекарства! Мы доводим до полного выздоровления, пока ваш лечащий врач не скажет: «Вы здоровы! Гепатита НЕТ!». Мир Вам и будьте здоровы!</p>
			<p>Команда INDIAVIR.</p>
		</div>
	</div>
</div>

<div class="content-block features">
	<div class="container">
		<div class="kc-elm kc_col-sm-12 kc_column kc_col-sm-12">
		    <div class="kc-col-container">
		        <div class="kc-elm kc_row kc_row_inner">
		            <div class="kc-elm kc_col-sm-4 kc_column_inner kc_col-sm-4 feature_left_side">
		                <div class="kc_wrapper kc-col-inner-container">
		                    <div class="em-feature kc-elm">
		                        <div class="em_feature-icon">
		                            <span><i class="fa fa-magnet"></i></span>
		                        </div>
		                        <div class="em_content_text">
		                            <div class="em-feature-title">
		                                <h2>Оплата</h2></div>
		                            <div class="em-feature-desc">После подтверждения заказа и оформления договора поручения, мы выставляем Вам удобный для Вас счет к оплате. Вы оплачиваете услугу.</div>
		                        </div>
		                    </div>
		                    <div class="em-feature kc-elm">
		                        <div class="em_feature-icon">
		                            <span><i class="fa fa-user-md"></i></span>
		                        </div>
		                        <div class="em_content_text">
		                            <div class="em-feature-title">
		                                <h2>Доставка</h2></div>
		                            <div class="em-feature-desc">Доставка осуществляется после оплаты услуги напрямую из Индии почтой EMS. Срок доставки лекарств 9-18 дней в зависимости от Вашего местожительства.</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="kc-elm kc_col-sm-4 kc_column_inner kc_col-sm-4">
		                <div class="kc_wrapper kc-col-inner-container">
		                    <div class="kc-elm kc_shortcode kc_single_image">

		                        <img src="/images/smiling_doctor.png" class="" alt=""> </div>
		                </div>
		            </div>
		            <div class="kc-elm kc_col-sm-4 kc_column_inner kc_col-sm-4">
		                <div class="kc_wrapper kc-col-inner-container">

		                    <div class="em-feature kc-elm">
		                        <div class="em_feature-icon">
		                            <span><i class="fa fa-stethoscope"></i></span>
		                        </div>
		                        <div class="em_content_text">
		                            <div class="em-feature-title">
		                                <h2>Делайте заказ</h2></div>
		                            <div class="em-feature-desc">Вы оставляете заявку на доставку лекарственного препарата из Индии через наш сайт, эл. почту, онлайн консультанта или звоните нам по телефону. Телефон горячей линии: 8(800) 511-02-30 (звонок бесплатный)</div>
		                        </div>
		                    </div>

		                    <div class="em-feature kc-elm">
		                        <div class="em_feature-icon">
		                            <span><i class="fa fa-flask"></i></span>
		                        </div>
		                        <div class="em_content_text">
		                            <div class="em-feature-title">
		                                <h2>Ваш заказ</h2></div>
		                            <div class="em-feature-desc">Вы получаете свой заказ прямо из Индии от производителя в офисе EMS почты или курьерской доставкой лично в руки.</div>
		                        </div>
		                    </div>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
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

<div class="content-block content-block--main-catalog">
    <div class="container">
        <?= MainCatalog::widget([
            'root' => CatalogCategory::findOne(54),
            'onlyFirstLevel' => true,
        ]) ?>
    </div>
</div>

<div class="content-block content-block--video">
    <div class="container">
        <div class="title-home">Видео</div>
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

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

<div class="content-block">
	<div class="container">
		<div class="features">
			<div class="row">
				<div class="col-md-6">
					<div class="feature">
						<div class="feature__image">
							<img src="/images/icon_bank_card.png"></img>
						</div>
						<div class="feature__title">
							Оплата
						</div>
						<div class="feature__text">
							<p>После подтверждения заказа и оформления договора поручения, мы выставляем Вам удобный для Вас счет к оплате. Вы оплачиваете услугу.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="feature feature--right">
						<div class="feature__image">
							<img src="/images/icon_phone.png"></img>
						</div>
						<div class="feature__title">
							Делайте заказ
						</div>
						<div class="feature__text">
							<p>Вы оставляете заявку на доставку лекарственного препарата из Индии через наш сайт, эл. почту, онлайн консультанта или звоните нам по телефону. Телефон горячей линии: 8(800) 511-02-30 (звонок бесплатный)</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="feature">
						<div class="feature__image">
							<img src="/images/icon_airplane.png"></img>
						</div>
						<div class="feature__title">
							Доставка
						</div>
						<div class="feature__text">
							<p>Доставка осуществляется после оплаты услуги напрямую из Индии почтой EMS. Срок доставки лекарств 9-18 дней в зависимости от Вашего местожительства.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="feature feature--right">
						<div class="feature__image">
							<img src="/images/icon_pills.png"></img>
						</div>
						<div class="feature__title">
							Ваш заказ
						</div>
						<div class="feature__text">
							<p>Вы получаете свой заказ прямо из Индии от производителя в офисе EMS почты или курьерской доставкой лично в руки.</p>
						</div>
					</div>
				</div>
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

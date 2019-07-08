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
        <table class="table table-hover price-table">
        	<tr>
        		<th class="col-md-3">Препарат</th>
        		<th class="col-md-3">1 Месяц</th>
        		<th class="col-md-3">3 Месяца</th>
        		<th class="col-md-3">6 Месяцев</th>
        	</tr>
        	<tr>
        		<td>
        			<img src="/images/sovihep.png">
        		</td>
        		<td><strong>49900</strong> руб. при получении</td>
        		<td>
        			<p><strong>70900</strong> руб. при получении</p>
        			<p><strong>68900</strong> руб. по предоплате</p>
        		</td>
        		<td>Договорная</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="/images/sovihep.png">
        		</td>
        		<td><strong>49900</strong> руб. при получении</td>
        		<td>
        			<p><strong>70900</strong> руб. при получении</p>
        			<p><strong>68900</strong> руб. по предоплате</p>
        		</td>
        		<td>Договорная</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="/images/sovihep.png">
        		</td>
        		<td><strong>49900</strong> руб. при получении</td>
        		<td>
        			<p><strong>70900</strong> руб. при получении</p>
        			<p><strong>68900</strong> руб. по предоплате</p>
        		</td>
        		<td>Договорная</td>
        	</tr>
        	<tr>
        		<td>
        			<img src="/images/sovihep.png">
        		</td>
        		<td><strong>49900</strong> руб. при получении</td>
        		<td>
        			<p><strong>70900</strong> руб. при получении</p>
        			<p><strong>68900</strong> руб. по предоплате</p>
        		</td>
        		<td>Договорная</td>
        	</tr>
        </table>
        <div class="fast-consult__block">
	        <div class="row">
	        	<div class="col-md-4">
	        		<div class="fast-consult">
		        		<div class="fast-consult__icon">
	        				<img src="/images/icon-phone-bg.svg">
		        		</div>
		        		<div class="fast-consult__text">
			        		<div class="fast-consult__title">Быстрая консультация</div>
			        		<div class="fast-consult__phone">+8 (983) 622-24-54</div>
			        	</div>
			        </div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="fast-consult">
		        		<div class="fast-consult__icon">
		        			<img src="/images/icon-wa.svg">
		        		</div>
		        		<div class="fast-consult__text">
			        		<div class="fast-consult__title">Ответим на все Ваши вопросы</div>
			        		<div class="fast-consult__phone">+8 (983) 622-24-54</div>
			        	</div>
			        </div>
	        	</div>
	        	<div class="col-md-4">
	        		<div class="fast-consult__social-icons">
		        		<a href=""><img src="/images/icon-fb.svg"></a>
		        		<a href=""><img src="/images/icon-ok.svg"></a>
		        		<a href=""><img src="/images/icon-instagram.svg"></a>
		        		<a href=""><img src="/images/icon-vk.svg"></a>
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

<div class="content-block">
	<h2 class="text-center">Сертификаты на препараты</h2>
	<div class="certificates">
		<a href="/uploads/elfinder/certificates/sofo-natko.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofo-natko.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofovir.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofovir.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sovihep.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sovihep.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofo-natko.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofo-natko.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofovir.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofovir.jpg" alt="" /></a>
	</div>
</div>

<div class="content-block">
	<h2 class="text-center">Задать вопрос врачу</h2>
	<div class="text-center">
		
	</div>
</div>

<div class="content-block">
	<div class="container">
		<h2 class="text-center">Вы защищены от подделок</h2>
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
	<h2 class="text-center">Химические исследования</h2>
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

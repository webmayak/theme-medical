<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 5:16 PM
 */

use pantera\content\models\ContentPage;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */
?><div class="review-item__left">
	<div class="review-item__author">
		Андрей Петров
	</div>
	<div class="review-item__rating">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</div>
	<div class="review-item__date">
		Дата публикации<br/>
		23.09.2017
	</div>
	<div class="review-item__city">
		Местоположение<br/>
		г. Владивосток
	</div>
</div>
<div class="review-item__right">
	<div class="review-item__text">
		Здравствуйте. Меня зовут Андрей, много лет я был инфицирован вирусом Гепатита С. Знал о терапии против Гепатита уже давно но лечиться не спешил так как 100% результата добивались лишь некоторые а в основном все было напрасно. После появления Софосбувира и даклатасвира многие из моих знакомых стали лечиться от гепатита С препаратами из Индии, я смотрел наблюдаясь, пока ждал результатов цена на лекарство снизилась почти в два раза. Люди салим говорить о том что вылечиваются и ничего не возвращается. Заказал доставку препаратов Hepcinat и Natdac в компании «Гепамед», прошел курс лечения 3 месяца и вирус не обнаружен, стал замечать что стало реально больше сил. Усталость просто исчезла и до самого вечера есть силы работать и делать много дел. Софосбувир реально работает и советую всем не откладывая лечить Гепатит С. Спасибо сотруднику гепамед Анне за помощь во время лечения, перед началом лечения мне объяснила все очень подробно, какие анализы сдавать, что можно что нельзя этих анализов хватило врачу что бы назначить схему терапии. Благодарю за помощь и качественные препараты, сейчас моя мама которая тоже больна гепатитом с допивает курс лечения, и раз я советую маме то советую и каждому из вас.
	</div>
	<div class="review-item__audio">
		<div class="review-item__audio-left">
			<div class="review-item__label"><i class="fa fa-volume-up"></i> Аудио - отзыв</div>
			<div class="review-item__button"><a class="btn btn-primary btn-sm">Прослушать &rarr;</a></div>
		</div>
		<div class="review-item__audio-right">
			<audio controls>
			  <source src="/uploads/reviews/review.ogg" type="audio/ogg">
			  <source src="/uploads/reviews/review.mp3" type="audio/mpeg">
			  Ваш браузер не поддерживает вопроизведение аудиофайлов этого формата.
			</audio>
		</div>
	</div>
</div>
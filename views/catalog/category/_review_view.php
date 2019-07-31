<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 5:16 PM
 */

use pantera\content\models\ContentPage;
use yii\web\View;
use yii\helpers\Html;

/* @var $this View */
/* @var $model ContentPage */
?><div class="review-item__left">
	<div class="review-item__author">
		<?= Html::encode($model->name) ?>
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
		<?= Yii::$app->formatter->asDate($model->created_at) ?>
	</div>
</div>
<div class="review-item__right">
	<div class="review-item__text">
		<?= $model->description ?>
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
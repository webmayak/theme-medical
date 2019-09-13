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
		Оставлен
		<?= Yii::$app->formatter->asDate($model->created_at) ?>
	</div>
</div>
<div class="review-item__right">
	<?php if (trim(strip_tags($model->description))): ?>
	<div class="review-item__text">
		<?= $model->description ?>
	</div>
	<?php endif; ?>
	<?php if (!empty($model->media[0]) && $model->media[0]->issetMedia() && preg_match('/image/', $model->media[0]->type)) : ?>
	<div class="review-item__image">
		<a href="<?= $model->media[0]->image() ?>" data-fancybox="reviews">
			<img class="img-thumbnail" src="<?= $model->media[0]->image(200, 120, false) ?>" alt="Отзыв - <?= Html::encode($model->name) ?>" />
		</a>
	</div>
	<?php endif; ?>
	<?php if (!empty($model->media[0]) && $model->media[0]->issetMedia() && preg_match('/audio/', $model->media[0]->type)) : ?>
	<div class="review-item__audio">
		<div class="review-item__audio-left">
			<div class="review-item__label"><i class="fa fa-volume-up"></i> Аудио - отзыв</div>
			<div class="review-item__button"><a class="btn btn-primary btn-sm" onclick="document.getElementById('audio-<?= $model->id ?>').play();">Прослушать &rarr;</a></div>
		</div>
		<div class="review-item__audio-right">
			<audio controls id="audio-<?= $model->id ?>">
			  <source src="<?= $model->media[0]->url ?>" type="<?= $model->media[0]->type ?>">
			  Ваш браузер не поддерживает вопроизведение аудиофайлов этого формата.
			</audio>
		</div>
	</div>
	<?php endif; ?>
</div>

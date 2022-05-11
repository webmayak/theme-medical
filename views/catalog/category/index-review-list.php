<?php

use pantera\content\widgets\block\Block;
use pantera\leads\widgets\form\LeadForm;
use yii\data\ArrayDataProvider;
use yii\web\View;
use yii\widgets\ListView;
use yii\web\JsExpression;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Отзывы наших клиентов';
$this->params['breadcrumbs'][] = $this->title;

?><h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>

<?= Block::widget([
    'position' => 'reviews_page_top',
]) ?>

<?= ListView::widget([
    'dataProvider' =>  new ArrayDataProvider([
        'allModels' => $model->childrenActive,
    ]),
    'summary' => false,
    'itemView' => '_review_view',
    'options' => [
        'class' => 'reviews',
    ],
    'itemOptions' => [
        'class' => 'review-item',
    ],
]) ?>

<section class="review-form-wrapper">
    <?= LeadForm::widget([
        'mode' => LeadForm::MODE_INLINE,
        'key' => 'review',
    ]) ?>
</section>

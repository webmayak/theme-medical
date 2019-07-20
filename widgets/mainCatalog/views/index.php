<?php

use pantera\leads\widgets\form\LeadForm;
use yii\bootstrap\Tabs;
use yii\web\View;

/* @var $this View */
/* @var $items array */
/* @var $titleAsH1 bool */
/* @var $onlyFirstLevel bool */
/* @var $content string */
?>
<?php if ($titleAsH1) : ?>
    <h1 class="title-home">
        <?= Yii::$app->seo->getH1() ?: 'Каталог' ?>
    </h1>
<?php else : ?>
    <div class="title-home">
        Каталог
    </div>
<?php endif; ?>

<?php
if ($onlyFirstLevel) {
    echo $content;
} else {
    echo Tabs::widget([
        'items' => $items,
        'options' => [
            'class' => 'm-b-25',
        ],
    ]);
}
?>

<?= $this->render('@theme/views/_text_about') ?>

<?= $this->render('@theme/views/_features') ?>

<div class="content-block">
    <div class="container">
        <div class="content-block__title text-center">Задать вопрос врачу</div>
        <?= LeadForm::widget([
            'key' => 'question-row',
            'mode' => LeadForm::MODE_INLINE,
        ]) ?>
    </div>
</div>

<?= $this->render('@theme/views/_fast-consult') ?>

<?php

use frontend\widgets\leads\LeadForm;
use yii\helpers\Url;

?><?= LeadForm::widget([
    'key' => 'order',
    'text' => 'Заказать',
    'options' => [
        'class' => $class,
        'href' => Url::to(['/leads/default/modal', 'key' => 'order', 'productId' => $model->id]),
    ],
]) ?>

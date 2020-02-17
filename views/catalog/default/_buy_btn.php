<?php

use frontend\widgets\leads\LeadForm;
use yii\helpers\Url;

?><?= LeadForm::widget([
    'key' => 'order',
    // для препаратов от гепатита С 'Запросить цену' вместо 'Заказать'
    'text' => $model->type->key == 'service' ? 'Запросить цену' : 'Заказать',
    'options' => [
        'class' => $class,
        'href' => Url::to(['/leads/default/modal', 'key' => 'order', 'productId' => $model->id]),
    ],
]) ?>

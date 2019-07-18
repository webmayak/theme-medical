<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 4:26 PM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $index integer */

$hasImage = $model->media && $model->media->issetMedia();

?><a href="<?= $model->present()->getUrl() ?>" class="catalog-item<?= $hasImage ? ' with-image' : ' no-image' ?>">
    <?php if ($hasImage): ?>
    <div class="media-top">
        <div class="block-img">
            <?= Html::img($model->media->image(340, 276, false), ['alt'=>$model->name]); ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="catalog-item__footer">
        <div class="catalog-item__title">
            <?= Html::encode($model->name) ?>
        </div>
        <div class="catalog-item__announce">
            Дженерик препарата: Sovaldi (Совальди)<br/>
            В упаковке: 28 Таблеток.<br/>
            Производитель: Hetero Индия
        </div>
    </div>
</a>

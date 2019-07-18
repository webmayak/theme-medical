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
    <div class="catalog-item__image">
        <?= Html::img($model->media->image(340, 276, false), ['alt'=>$model->name]); ?>
    </div>
    <?php endif; ?>
    <div class="catalog-item__info">
        <div class="catalog-item__rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="catalog-item__title">
            <?= Html::encode($model->name) ?>
        </div>
        <div class="catalog-item__announce">
            Дженерик препарата: Sovaldi (Совальди)<br/>
            В упаковке: 28 Таблеток.<br/>
            Производитель: Hetero Индия
        </div>
        <div class="catalog-item__prices">
            <div class="row">
                <div class="col-xs-6">
                    <span class="btn btn-primary">Купить</span>
                </div>
                <div class="col-xs-6">
                    <span class="btn btn-primary">Купить</span>
                </div>
            </div>
        </div>
    </div>
</a>

<?php

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;

// для препаратов от гепатита С не выводим цены
if ($model->type->key == 'service') {
    return;
}

/* @var $this View */
/* @var $model CatalogCategory */
?><div class="catalog-item__prices">
    <div class="row">
        <?php if ($price_gepc_1 = $model->present()->getAttributeValueByKey('price_gepc_1')): ?>
        <div class="col-xs-6">
            <div class="catalog-item__price">
                <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price_gepc_1')->name) ?>:</span>
                <span class="price-value"><?= $price_gepc_1 ?></span>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($price_gepc_2 = $model->present()->getAttributeValueByKey('price_gepc_2')): ?>
        <div class="col-xs-6">
            <div class="catalog-item__price">
                <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price_gepc_2')->name) ?>:</span>
                <span class="price-value"><?= $price_gepc_2 ?></span>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($price_gepb_hiv_1 = $model->present()->getAttributeValueByKey('price_gepb_hiv_1')): ?>
        <div class="col-xs-6">
            <div class="catalog-item__price">
                <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price_gepb_hiv_1')->name) ?>:</span>
                <span class="price-value"><?= $price_gepb_hiv_1 ?></span>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($price_gepb_hiv_2 = $model->present()->getAttributeValueByKey('price_gepb_hiv_2')): ?>
        <div class="col-xs-6">
            <div class="catalog-item__price">
                <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price_gepb_hiv_2')->name) ?>:</span>
                <span class="price-value"><?= $price_gepb_hiv_2 ?></span>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($price = $model->present()->getAttributeValueByKey('price')): ?>
        <div class="col-xs-6">
            <div class="catalog-item__price">
                <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price')->name) ?>:</span>
                <span class="price-value"><?= $price ?></span>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

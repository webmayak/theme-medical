<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 4:26 PM
 */

use common\modules\catalog\models\CatalogCategory;
use common\modules\catalog\models\CatalogCategoryAttributeValue;
use frontend\widgets\leads\LeadForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
?><div class="catalog-item__info">
    <div class="catalog-item__title">
        <a href="<?= $model->present()->getUrl() ?>"><?= Html::encode($model->name) ?></a>
    </div>
    <div class="catalog-item__rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </div>
    <?php if ($announce = $model->present()->getAttributeValueByKey('announce')): ?>
    <div class="catalog-item__announce">
        <?= nl2br($announce) ?>
    </div>
    <?php endif; ?>
    <div class="catalog-item__prices">
        <div class="row">
            <?php if ($price_fast_delivery = $model->present()->getAttributeValueByKey('price_fast_delivery')): ?>
            <div class="col-xs-6">
                <div class="catalog-item__price">
                    <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price_fast_delivery')->name) ?>:</span>
                    <span class="price-value"><?= $price_fast_delivery ?></span>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($price_india_delivery = $model->present()->getAttributeValueByKey('price_india_delivery')): ?>
            <div class="col-xs-6">
                <div class="catalog-item__price">
                    <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price_india_delivery')->name) ?>:</span>
                    <span class="price-value"><?= $price_india_delivery ?></span>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($price_of_1 = $model->present()->getAttributeValueByKey('price_of_1')): ?>
            <div class="col-xs-6">
                <div class="catalog-item__price">
                    <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price_of_1')->name) ?>:</span>
                    <span class="price-value"><?= $price_of_1 ?></span>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($price_of_12 = $model->present()->getAttributeValueByKey('price_of_12')): ?>
            <div class="col-xs-6">
                <div class="catalog-item__price">
                    <span class="price-label"><?= Html::encode($model->present()->getAttributeByKey('price_of_12')->name) ?>:</span>
                    <span class="price-value"><?= $price_of_12 ?></span>
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
    <div class="catalog-item__button">
        <a class="btn btn-primary" href="<?= $model->present()->getUrl() ?>">Подробнее</a>
        <?= LeadForm::widget([
            'key' => 'order',
            'text' => 'Заказать',
            'options' => [
                'class' => 'btn btn-primary btn-buy',
                'href' => Url::to(['/leads/default/modal', 'key' => 'order', 'productId' => $model->id]),
            ],
        ]) ?>
    </div>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 4:26 PM
 */

use common\modules\catalog\models\CatalogCategory;
use common\modules\catalog\models\CatalogCategoryAttributeValue;
use yii\helpers\Html;
use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $model CatalogCategory */

$announce = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 86]);
$price_prepay = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 88]);
$price_afterpay = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 89]);

?><div class="catalog-item__info">
    <div class="catalog-item__rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </div>
    <div class="catalog-item__title">
        <a href="<?= $model->present()->getUrl() ?>"><?= Html::encode($model->name) ?></a>
    </div>
    <div class="catalog-item__announce">
        <?= $announce ? nl2br($announce->value) : '' ?>
    </div>
    <div class="catalog-item__prices">
        <div class="row">
            <div class="col-xs-6">
                <div class="catalog-item__price">
                    <span class="price-label">Цена по предоплате:</span>
                    <span class="price-value"><?= $price_prepay ? $price_prepay->value : '' ?></span>
                </div>
                <div class="catalog-item__button">
                    <?= LeadForm::widget([
                        'key' => 'order',
                        'text' => 'Купить',
                        'options' => [
                            'class' => 'btn btn-primary',
                        ],
                    ]) ?>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="catalog-item__price">
                    <span class="price-label">Цена при получении:</span>
                    <span class="price-value"><?= $price_afterpay ? $price_afterpay->value : '' ?></span>
                </div>
                <div class="catalog-item__button">
                    <?= LeadForm::widget([
                        'key' => 'order',
                        'text' => 'Купить',
                        'options' => [
                            'class' => 'btn btn-primary',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

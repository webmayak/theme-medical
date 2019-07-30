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

$announce = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 86]);
$price_prepay = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 88]);
$price_afterpay = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 89]);

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
    <div class="catalog-item__announce">
        <?= $announce ? nl2br($announce->value) : '' ?>
    </div>
    <div class="catalog-item__prices">
        <div class="row">
            <div class="col-xs-6">
                <?php if ($price_prepay->value): ?>
                <div class="catalog-item__price">
                    <span class="price-label">Цена по предоплате:</span>
                    <span class="price-value"><?= $price_prepay->value ?></span>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-xs-6">
                <?php if ($price_afterpay->value): ?>
                <div class="catalog-item__price">
                    <span class="price-label">Цена при получении:</span>
                    <span class="price-value"><?= $price_afterpay->value ?></span>
                </div>
                <?php endif; ?>
            </div>
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

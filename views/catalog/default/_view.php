<?php

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */

$hasImage = $model->media && $model->media->issetMedia();
?>
<div class="catalog-item<?= $hasImage ? ' with-image' : ' no-image' ?>">
    <?php if ($hasImage) : ?>
    <div class="catalog-item__image">
        <a href="<?= $model->present()->getUrl() ?>"><?= Html::img($model->media->image(340, 276), ['alt'=>$model->name]); ?></a>
    </div>
    <?php endif; ?>
    <div class="catalog-item__info">
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
        
        <?= Yii::$app->controller->renderPartial('@frontend/themes/medical/views/catalog/default/_prices', ['model' => $model]) ?>

        <div class="catalog-item__button">
            <a class="btn btn-primary" href="<?= $model->present()->getUrl() ?>">Подробнее</a>
            <?php if (0): ?>
            <?= Yii::$app->controller->renderPartial('@frontend/themes/medical/views/catalog/default/_buy_btn', [
                'model' => $model,
                'class' => 'btn btn-primary btn-buy',
            ]) ?>
            <?php endif; ?>
        </div>
    </div>
</div>

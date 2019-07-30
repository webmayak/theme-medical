<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use common\modules\catalog\models\CatalogCategoryAttributeValue;
use frontend\themes\medical\widgets\categoryList\CategoryList;
use frontend\widgets\twigRender\TwigRender;
use frontend\widgets\leads\LeadForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
$this->params['breadcrumbs'] = [];
foreach ($model->parents as $parent) {
    if ($parent->depth > 0) {
        $this->params['breadcrumbs'][] = [
            'label' => $parent->name,
            'url' => $parent->present()->getUrl()
        ];
    }
}
$this->params['breadcrumbs'][] = $model->name;
$announce = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 86]);
$price_prepay = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 88]);
$price_afterpay = CatalogCategoryAttributeValue::findOne(['category_id' => $model->id, 'attribute_id' => 89]);

?><div class="product-layout row">
    <div class="<?php if (!$model->childrenActive) : ?>col-md-8<?php else: ?>col-md-12<?php endif; ?>">
        <?php if ($hasMedia) : ?>
            <div class="product-main-image">
                <img src="<?= $model->media->image(600, 400) ?>" alt="<?= Html::encode($model->name) ?>">
            </div>
        <?php endif; ?>
        <h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
        <?php if ($model->description) : ?>
        <div class="product-description">
        <?= TwigRender::widget([
            'text' => $model->description,
        ]) ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if (!$model->childrenActive) : ?>
    <div class="col-md-4">
        <div class="product-sidebar">
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
                    <?= LeadForm::widget([
                        'key' => 'order',
                        'text' => 'Заказать',
                        'options' => [
                            'class' => 'btn btn-primary btn-buy btn-block btn-lg',
                            'href' => Url::to(['/leads/default/modal', 'key' => 'order', 'productId' => $model->id]),
                        ],
                    ]) ?>
                </div>
            </div>

        </div>
    </div>
    <?php endif; ?>
</div>

<?php if ($model->childrenActive) : ?>
    <div class="main-catalog__subset">
        <?= CategoryList::widget([
            'models' => $model->childrenActive,
            'itemView' => '@frontend/themes/medical/views/catalog/default/_view',
            'options' => [
                'class' => 'row',
            ],
            'itemOptions' => [
                'class' => 'col-md-6 col-lg-4',
            ],
        ]) ?>
    </div>
<?php endif; ?>

<?= $this->render('@theme/views/_fast-consult') ?>

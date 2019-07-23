<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use common\modules\catalog\models\CatalogCategoryAttributeValue;
use frontend\widgets\categoryList\CategoryList;
use frontend\widgets\twigRender\TwigRender;
use yii\helpers\Html;
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

?><div class="product-layout row">
    <div class="col-md-8">
        <?php if ($hasMedia) : ?>
            <div class="product-main-image">
                <img src="<?= $model->media->image(600, 400) ?>" alt="<?= Html::encode($model->name) ?>">
            </div>
        <?php endif; ?>
        <?php if ($model->description) : ?>
        <div class="product-description">
        <?= TwigRender::widget([
            'text' => $model->description,
        ]) ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="col-md-4">
        <div class="product-sidebar">
            <h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
            <div class="product-announce">
                <?= $announce ? nl2br($announce->value) : '' ?>
            </div>
        </div>
    </div>
</div>

<?php if ($model->childrenActive) : ?>
    <div class="content-block content-block--children-items">
        <?= CategoryList::widget([
            'models' => $model->childrenActive,
        ]) ?>
    </div>
<?php endif; ?>

<?= $this->render('@theme/views/_fast-consult') ?>

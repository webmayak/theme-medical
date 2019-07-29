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
            <?= Yii::$app->controller->renderPartial('@frontend/themes/medical/views/catalog/default/_view_inner', ['model' => $model]) ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php if ($model->childrenActive) : ?>
    <div class="content-block content-block--children-items">
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

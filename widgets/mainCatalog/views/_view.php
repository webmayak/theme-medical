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
/* @var $index integer */

$hasImage = $model->media && $model->media->issetMedia();

?>
<div class="catalog-item<?= $hasImage ? ' with-image' : ' no-image' ?>">
    <?php if ($hasImage) : ?>
    <div class="catalog-item__image">
        <a href="<?= $model->present()->getUrl() ?>"><?= Html::img($model->media->image(340, 276), ['alt'=>$model->name]); ?></a>
    </div>
    <?php endif; ?>
    <?= Yii::$app->controller->renderPartial('@frontend/themes/medical/widgets/mainCatalog/views/_view_inner', ['model' => $model]) ?>
</div>

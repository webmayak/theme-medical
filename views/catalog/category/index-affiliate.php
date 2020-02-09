<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\categoryList\CategoryList;
use frontend\widgets\portfolioSlider\PortfolioSlider;
use frontend\widgets\teamList\TeamList;
use frontend\widgets\twigRender\TwigRender;
use frontend\widgets\videoList\VideoList;
use pantera\leads\widgets\form\LeadForm;
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
$tseny = $model->present()->getRelationCategoryByTypeKey('tseny');
?>
<div class="content-block">
    <h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
    <?php if ($model->description) : ?>
    <div class="category__body">
        <?php if ($hasMedia) : ?>
            <div class="image pull-right">
                <img src="<?= $model->media->image(300, 400) ?>" alt="<?= Html::encode($model->name) ?>">
            </div>
        <?php endif; ?>
        <?= TwigRender::widget([
            'text' => $model->description,
        ]) ?>
        <div class="clearfix"></div>
    </div>
    <?php endif; ?>
</div>

<?php if ($contacts_map = $model->present()->getAttributeValueByKey('contacts_map')) : ?>
    <div class="content-block content-block__contacts-map" style="padding-top: 30px;">
        <h2 class="affiliates-list__title" style="margin-bottom: 20px;">
            <?= Html::encode($model->name) ?> — наш офис на карте
        </h2>
        <?= $contacts_map ?>
    </div>
<?php endif; ?>

<?= $this->render('@theme/views/_fast-consult') ?>

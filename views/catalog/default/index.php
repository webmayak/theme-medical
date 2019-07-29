<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 4:44 PM
 */

use frontend\themes\medical\widgets\mainCatalog\MainCatalog;
use yii\web\View;
use yii\helpers\Html;
use common\modules\catalog\models\CatalogCategory;

/* @var $this View */
$this->params['breadcrumbs'][] = $this->title;

$topLevelCategories = CatalogCategory::findOne(54)->children;

?><h1 class="title-home"><?= Yii::$app->seo->getH1() ?: 'Каталог' ?></h1>

<?php foreach ($topLevelCategories as $category): ?>
    <h2><?= Html::a($category->name, $category->present()->getUrl()) ?></h2>
    <?= MainCatalog::widget([
        'root' => $category,
        'onlyFirstLevel' => true,
        'options' => [
            'class' => 'row',
        ],
        'itemOptions' => [
            'class' => 'col-md-6 col-lg-4',
        ],
    ]) ?>
<?php endforeach; ?>

<?= $this->render('@theme/views/_fast-consult') ?>

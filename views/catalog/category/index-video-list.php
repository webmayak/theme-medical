<?php

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\medical\widgets\videoList\VideoList;
use frontend\widgets\twigRender\TwigRender;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */

?><h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>

<?php if ($model->description) : ?>
<div class="editor-content">
    <?= TwigRender::widget([
        'text' => $model->description,
    ]) ?>
</div>
<?php endif; ?>

<?= VideoList::widget([
    'category' => $model,
]) ?>

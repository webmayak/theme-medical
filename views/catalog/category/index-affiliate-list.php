<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\medical\widgets\categoryList\CategoryList;
use frontend\widgets\twigRender\TwigRender;
use frontend\components\ContactsManager;
use pantera\content\widgets\block\Block;
use yii\helpers\Html;
use yii\web\View;

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

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?>
<div class="content-block">
    <h1 class="title-home"><?= Yii::$app->seo->getH1() ?></h1>
    <div class="category__body">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <?= TwigRender::widget([
                    'text' => Yii::$app->contactsManager->getContactsPageText() ?: $model->description,
                ]) ?>
            </div>
            <?php if ($hasMedia) : ?>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="image">
                        <img src="<?= $model->media->image() ?>" alt="<?= Html::encode($model->name) ?>" class="img-responsive">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if ($affiliate = Yii::$app->contactsManager->affiliate) : ?>
	<?php if ($affiliate_contacts_map = Yii::$app->contactsManager->get('contacts_map')) : ?>
		<div class="content-block content-block__contacts-map" style="padding-top: 30px;">
			<h2 class="affiliates-list__title" style="margin-bottom: 20px;">
				<?= Html::encode($affiliate->name) ?> — наш офис на карте
			</h2>
		    <?= $affiliate_contacts_map ?>
		</div>
	<?php endif; ?>
<?php else: ?>
	<div class="content-block content-block__contacts-map" style="padding-top: 30px;">
		<h2 class="affiliates-list__title" style="margin-bottom: 20px;">
			Наш офис на карте
		</h2>
	    <?= Block::widget([
	        'position' => 'contacts_map',
	    ]) ?>
	</div>
<?php endif; ?>

<?php if ($model->childrenActive) : ?>
    <div class="content-block content-block--affiliates">
        <h2 class="affiliates-list__title">Наши филиалы</h2>
        <?= CategoryList::widget([
            'models' => $model->childrenActive,
            'itemView' => '_affiliate_view',
            'options' => ['class'=>'affiliates-list row'],
            'itemOptions' => ['class'=>'col-md-2 col-sm-4 col-xs-6'],
        ]) ?>
    </div>
<?php endif; ?>

<div class="content-block">
	<?= $this->render('@theme/views/_fast-consult') ?>
</div>

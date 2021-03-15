<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/24/18
 * Time: 1:33 PM
 */

use common\modules\catalog\models\CatalogCategory;
use common\modules\catalog\models\CatalogCategoryAttributeValue;
use frontend\widgets\leads\order\LeadOrder;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model LeadOrder */
/* @var $key string */
$product = CatalogCategory::findOne(Yii::$app->request->get('productId'));
$this->title = 'Быстрый заказ';

$form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]);
?>
<?php if ($product) : ?>
    <div class="product-small product-small_bottom-border">
        <div class="product-small__content row">
            <div class="col-md-3">
                <?php
                if ($product->media && $product->media->issetMedia()) {
                    echo Html::img($product->media->image(), [
                        'class' => 'product-small__image',
                    ]);
                }
                ?>
            </div>
            <div class="product-small__content-left col-md-6">
                <?= Html::a($product->name, $product->present()->getUrl(), [
                    'class' => 'product-small__name',
                ]) ?>
                <?= Yii::$app->controller->renderPartial('@frontend/themes/medical/views/catalog/default/_prices', ['model' => $product]) ?>
            </div>
            <div class="product-small__content-right col-md-3">
                <span class="product-small__amount-label">
                    Количество:
                </span>
                <?= $form->field($model, 'amount', [
                    'options' => [
                        'class' => '',
                    ],
                ])->textInput([
                    'class' => 'product-small__amount form-control',
                    'type' => 'number',
                    'min' => 0,
                ])->label(false)->error(false) ?>
            </div>
        </div>
    </div>
    <?= Html::activeHiddenInput($model, 'product', [
        'value' => $product->name,
    ]) ?>
<?php endif; ?>
<?php
echo $form->field($model, 'name')->textInput([
    'placeholder' => $model->getAttributeLabel('name'),
])->label(false);

echo $form->field($model, 'email')->textInput([
    'type' => 'email',
    'placeholder' => $model->getAttributeLabel('email'),
])->label(false);

echo $form->field($model, 'phone')->widget(MaskedInput::class, [
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => $model->getAttributeLabel('phone'),
        'class' => 'form-control',
    ],
])->label(false);

echo $form->field($model, 'address')->textarea([
    'rows' => 3,
    'placeholder' => $model->getAttributeLabel('address'),
])->label(false);

echo $form->field($model, 'comment')->textarea([
    'rows' => 3,
    'placeholder' => $model->getAttributeLabel('comment'),
])->label(false);

?>
<div class="text-right">
    <small class="pull-left text-left" style="padding-top: 5px;">После получения заявки мы с вами свяжемся</small>
    <?php echo Html::submitButton(Html::tag('span', 'Отправить', [
        'class' => 'ladda-label',
    ]), [
        'class' => 'btn btn-primary ladda-button btn-lg',
        'data' => [
            'style' => 'zoom-in'
        ],
    ]);?>
</div>

<?php

ActiveForm::end();

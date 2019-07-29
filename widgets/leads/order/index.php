<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/24/18
 * Time: 1:33 PM
 */

use common\modules\catalog\models\CatalogCategory;
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
        <?php
        if ($product->media->issetMedia()) {
            echo Html::img($product->media->image(), [
                'class' => 'product-small__image',
            ]);
        }
        ?>
        <div class="product-small__content">
            <div class="product-small__content-left">
                <?= Html::a($product->name, $product->present()->getUrl(), [
                    'class' => 'product-small__name',
                ]) ?>
                <ul class="product-small__options">
                    <li>
                        Цена по предоплате
                        <span class="product-small__option-value">
                    1000 руб.
                </span>
                    </li>
                    <li>
                        Цена при получении
                        <span class="product-small__option-value">
                    10000 руб.
                </span>
                    </li>
                </ul>
            </div>
            <div class="product-small__content-right">
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
    'rows' => 4,
    'placeholder' => $model->getAttributeLabel('address'),
])->label(false);

echo $form->field($model, 'comment')->textarea([
    'rows' => 4,
    'placeholder' => $model->getAttributeLabel('comment'),
])->label(false);

echo Html::submitButton(Html::tag('span', 'Купить', [
    'class' => 'ladda-label',
]), [
    'class' => 'btn btn-primary ladda-button',
    'data' => [
        'style' => 'zoom-in'
    ],
]);

ActiveForm::end();

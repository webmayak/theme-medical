<?php

namespace frontend\themes\medical\widgets\mainCatalog;

use common\modules\catalog\models\CatalogCategory;
use yii\data\ArrayDataProvider;
use yii\bootstrap\Tabs;
use yii\widgets\ListView;

class MainCatalog extends \yii\base\Widget
{
    public $root = null;
    /* @var bool Флаг что нужно вывесли плиткой только первый уровень */
    public $onlyFirstLevel = false;
    /* @var array|null */
    public $options = ['class' => 'row'];
    /* @var array|null */
    public $itemOptions = ['class' => 'col-md-6 col-lg-6'];

    public function run()
    {
        parent::run();
        $root = $this->root ?? CatalogCategory::find()->roots()->one();
        if ($this->onlyFirstLevel) {
            $dataProvider = new ArrayDataProvider([
                'allModels' => $root->children,
                'pagination' => false,
            ]);
            return ListView::widget([
                'summary' => false,
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
                'options' => $this->options,
                'itemOptions' => $this->itemOptions,
            ]);
        } else {
            $items = [];
            foreach ($root->children as $category) {
                $dataProvider = new ArrayDataProvider([
                    'models' => $category->children,
                    'totalCount' => count($category->children),
                    'pagination' => false,
                ]);
                if ($dataProvider->totalCount === 0) {
                    continue;
                }
                $items[] = [
                    'label' => $category->name,
                    'content' => $this->render('_tab', [
                        'model' => $category,
                        'dataProvider' => $dataProvider,
                    ]),
                ];
            }
            return Tabs::widget([
                'items' => $items,
            ]);
        }
    }
}

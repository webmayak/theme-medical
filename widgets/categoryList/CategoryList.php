<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/11/18
 * Time: 5:39 PM
 */

namespace frontend\themes\medical\widgets\categoryList;

use common\modules\catalog\models\CatalogCategory;
use yii\base\Widget;
use yii\data\ArrayDataProvider;

class CategoryList extends Widget
{
    /* @var CatalogCategory[] */
    public $models;
    /* @var false|array Настройки для пейджера */
    public $pagination = false;

    public function run()
    {
        parent::run();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $this->models,
            'totalCount' => count($this->models),
            'pagination' => $this->pagination,
        ]);
        if ($this->models) {
            return $this->render('index', [
                'dataProvider' => $dataProvider,
                'view' => '_view',
            ]);
        }
    }
}

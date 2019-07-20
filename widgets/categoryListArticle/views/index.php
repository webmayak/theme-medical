<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/2/18
 * Time: 1:28 PM
 */

use yii\data\ArrayDataProvider;
use yii\web\View;
use yii\widgets\ListView;

/* @var $this View */
/* @var $dataProvider ArrayDataProvider */
/* @var $view string */

?><div class="articles">
	<?= ListView::widget([
	    'dataProvider' => $dataProvider,
	    'summary' => false,
	    'itemView' => $view,
	    'options' => [
	        'class' => 'row',
	    ],
	    'itemOptions' => function($model, $key, $index, $widget) {
	    	switch ($key % 3) {
	    		case 1:
	    			$colClass = 'col-md-6';
	    			break;
	    		case 2:
	    			$colClass = 'col-md-12';
	    			break;
	    		default:
	    			$colClass = 'col-md-6';
	    			break;
	    	}
	        return ['class' => $colClass];
	    },
	]); ?>
</div>

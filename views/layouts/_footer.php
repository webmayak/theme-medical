<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:34 AM
 */

use pantera\content\widgets\block\Block;
use yii\web\View;

/* @var $this View */
?>

<footer id="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 first">
                    <?= Block::widget([
                        'position' => 'footer1',
                    ]) ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <?= Block::widget([
                        'position' => 'footer2',
                    ]) ?>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="footer-menu">
	                    <?= Block::widget([
	                        'position' => 'footer3',
	                    ]) ?>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 last">
                    <?= Block::widget([
                        'position' => 'footer4',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?= Block::widget([
                        'position' => 'copyrightLeft',
                    ]) ?>
                </div>
                <div class="col-md-3">
                    <?= Block::widget([
                        'position' => 'copyrightCenter',
                    ]) ?>
                </div>
                <div class="col-md-3">
                    <?= Block::widget([
                        'position' => 'copyrightRight',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php

use pantera\content\models\ContentBlock;
use pantera\content\widgets\block\Block;
use yii\web\View;

$block = ContentBlock::find()->andWhere(['status' => ContentBlock::STATUS_ACTIVE, 'position' => 'special_popup'])->one();
if (!$block) return;
if (strpos($block->body, 'img') === false && empty(trim(strip_tags($block->body)))) return;
$blockContentHash = md5("{$block->title}{$block->body}");
if (!empty($_COOKIE['special_popup_hash']) && ($_COOKIE['special_popup_hash']==$blockContentHash)) return;

/* @var $this View */
?>
<style>
#modal-popup .block p:last-child {
    margin-bottom: 0;
}

#modal-popup.modal {
  text-align: center;
}

@media screen and (min-width: 768px) { 
  #modal-popup.modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

#modal-popup .modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
#modal-popup img {
    height: auto !important;
    width: 100% !important;
}
</style>
<div id="modal-popup" class="modal modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" style="position: relative; margin: 15px 15px 0 0; z-index: 100;">✕</button>
            <div class="modal-body" style="position: relative; z-index: 99;">
                <?= Block::widget([
                    'position' => 'special_popup',
                ]) ?>
            </div>
        </div>
    </div>
</div>

<?php 

$this->registerJs(
    "
    $('#modal-popup').modal('show');
    $('#modal-popup').on('hidden.bs.modal', function(){Cookies.set('special_popup_hash', '{$blockContentHash}');});
    "
);

<?php
use yii\widgets\ListView;

$this->title = 'Cписок пользователей';
 ?>
<div class="list-users">
  <?= ListView::widget([
      'dataProvider' => $dataProvider,
      'itemView' => '_list',
        'itemOptions' => [
            'tag' => 'div',
            'class' => 'panel panel-default',
        ],
      'emptyText' => '<div class="text-center"> Список путст!</div>',
  ]) ?>
</div>

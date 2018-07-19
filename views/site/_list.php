<?php
use yii\helpers\Html;
if (!empty($model->gravatar_id)) {
  $avatar = $model->gravatar_id;
}else {
  $avatar = '/img/no-avatar.png';
}
 ?>
<div class="panel-body">
  <div class="col-md-1">
    <?php if (Yii::$app->user->can('adminAccess')): ?>
      <?php  echo  Html::a(
        '<img src="'.$avatar.'" class="img-thumbnail" width="50" alt="Cinque Terre">',
         ['user/profile/show', 'id' => $model->user_id]
       );?>
    <?php else: ?>
      <img src="<?=$avatar?>" class="img-thumbnail" width="50" alt="Cinque Terre">
    <?php endif; ?>
  </div>
  <div class="col-md-2">
    <?php if (Yii::$app->user->can('adminAccess')): ?>
      <?php  echo  Html::a( $model->name,
         ['user/profile/show', 'id' => $model->user_id]
       );?>
    <?php else: ?>
      <?=$model->name ?>
    <?php endif; ?>
  </div>
  <div class="col-md-2">

  </div>
  <div class="col-md-2">

  </div>
</div>

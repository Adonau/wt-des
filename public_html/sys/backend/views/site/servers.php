<?php

/* @var $this \yii\web\Site*/
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use common\widgets\Alert;
use yii\widgets\DetailView;
AppAsset::register($this);
?>
<div class="all__style__page flex-column">

  <a href="<?=Yii::$app->urlManager->createUrl(['listserver/index'])?>" class="btn__shadov">Сервера</a>

  <a href="<?=Yii::$app->urlManager->createUrl(['icon/index'])?>" class="btn__shadov">Иконки</a>
  <div class="wrap__box__servers flex-row">
    <div class="wrap__servers_end flex-column">
      <h2>Сервера у которых окончилась оплата</h2>
      <?php foreach ($servers as $serv ): ?>
        <?php if( $serv->date_end != null): ?>
          <?php if( $serv->date_end <= date('Y-m-d')): ?>
          <div class="servers__date__end flex-row">
            <span class="date__end"><?= $serv->name ?></span>
            <span class="date__end"><?= $serv->date ?></span>
            <span class="date__end"><?= $serv->date_end ?></span>    
          </div>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <div class="wrap__servers_end flex-column">
      <h2>Сервера у которых 7 дней до конца оплаты</h2>
      <?php $time = strtotime("+7 day"); ?>
      <?php $day = date("Y-m-d", $time); ?>

      <?php foreach ($servers as $serv ): ?>
        <?php if( $serv->date_end != null): ?>
          <?php if( ($serv->date_end > date('Y-m-d')) && ( $serv->date_end < $day) ): ?>
          <div class="servers__date__day flex-row">
            <span class="date__day"><?= $serv->name ?></span>
            <span class="date__day"><?= $serv->date ?></span>
            <span class="date__day"><?= $serv->date_end ?></span>    
          </div>
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php foreach ($aside as $as) : ?>
    <div class="aside__banner">
        <?php
        if ($as->date_end < date('Y-m-d')) {

            echo Html::tag('div', '', ['class' => 'flex-row aside__banner-img', 'style' => 'background-image: url(/image/gif_aside/gif-main.jpg);']);
        } else if ($as->date_end >= date('Y-m-d')) {

            echo Html::a('', Url::to($as->bannerLink), ['class' => 'flex-row aside__banner-img', 'target' => '_blank', 'rel' => 'nofollow', 'style' => 'background-image: url(/image/gif_aside/' .  $as->bannerUrl . ');']);
        }
        ?>
    </div>
<?php endforeach; ?>
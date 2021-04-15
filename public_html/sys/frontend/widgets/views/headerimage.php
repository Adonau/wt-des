<?php
use yii\helpers\Html;

$sum = 0;
$sum2 = 0;
$sum3 = 0;
foreach ($info as $inf) {
    $stat = 1;
    $sum +=  $stat;
    if (date('Y-m-d') > $inf->date) {
        $stat = 1;
        $sum2 +=  $stat;
    }
    if ($inf->date >= date('Y-m-d')) {
        $stat = 1;
        $sum3 +=  $stat;
    }
}
$result = $sum . "\n" . 'серв.';
$result2 = $sum2 . "\n" . 'серв.';
$result3 = $sum3 . "\n" . 'серв.';


foreach ($imgheader as $img) {
    if ($img->date_end < date('Y-m-d')) {

        echo Html::beginTag('div', ['class' => 'flex-row header__image header__image-main'])

            . Html::beginTag('div', ['class' => 'flex-row  header__inform'])

            . Html::beginTag('div', ['class' => 'flex-column header__inform-list'])

            . Html::beginTag('div', ['class' => 'flex-row header__inform-item'])
            . Html::tag('span', 'Зарегистрировано : ', ['class' => 'header__inform-word'])
            . Html::tag('span', $result, ['class' => 'header__inform-num'])
            . Html::endTag('div')

            . Html::beginTag('div', ['class' => 'flex-row header__inform-item'])
            . Html::tag('span', 'Открылись : ', ['class' => 'header__inform-word'])
            . Html::tag('span', $result2, ['class' => 'header__inform-num'])
            . Html::endTag('div')

            . Html::beginTag('div', ['class' => 'flex-row header__inform-item'])
            . Html::tag('span', 'Ожидают открытия : ', ['class' => 'header__inform-word'])
            . Html::tag('span', $result3, ['class' => 'header__inform-num'])
            . Html::endTag('div')

            . Html::endTag('div')

            . Html::endTag('div')

            . Html::endTag('div');
    } else {

        echo Html::beginTag('a', ['class' => 'flex-row header__image header__image-a', 'href' => $img->link, 'target' => '_blank', 'rel' => 'nofollow'])

            . Html::beginTag('div', ['class' => 'flex-row  header__inform'])

            . Html::beginTag('div', ['class' => 'flex-column header__inform-list'])

            . Html::beginTag('div', ['class' => 'flex-row header__inform-item'])
            . Html::tag('span', 'Зарегистрировано : ', ['class' => 'header__inform-word'])
            . Html::tag('span', $result, ['class' => 'header__inform-num'])
            . Html::endTag('div')

            . Html::beginTag('div', ['class' => 'flex-row header__inform-item'])
            . Html::tag('span', 'Открылись : ', ['class' => 'header__inform-word'])
            . Html::tag('span', $result2, ['class' => 'header__inform-num'])
            . Html::endTag('div')

            . Html::beginTag('div', ['class' => 'flex-row header__inform-item'])
            . Html::tag('span', 'Ожидают открытия : ', ['class' => 'header__inform-word'])
            . Html::tag('span', $result3, ['class' => 'header__inform-num'])
            . Html::endTag('div')

            . Html::endTag('div')

            . Html::endTag('div')

            . Html::endTag('a');
    }
}



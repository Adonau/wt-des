<?php

if (isset(Yii::$app->view->params['title-h1'])) {
    echo '<div class="flex-column text-container">';
    echo Yii::$app->view->params['title-h1'];
    echo Yii::$app->view->params['text-h1'];

    if (isset(Yii::$app->view->params['title-h2'])) {
        echo Yii::$app->view->params['title-h2'];
        echo Yii::$app->view->params['text-h2'];
    }

    if (isset(Yii::$app->view->params['title-h3'])) {
        echo Yii::$app->view->params['title-h3'];
        echo Yii::$app->view->params['text-h3'];
    }

    if (isset(Yii::$app->view->params['title-h4'])) {
        echo Yii::$app->view->params['title-h4'];
        echo Yii::$app->view->params['text-h4'];
    }

    if (isset(Yii::$app->view->params['title-h5'])) {
        echo Yii::$app->view->params['title-h5'];
        echo Yii::$app->view->params['text-h5'];
    }

    if (isset(Yii::$app->view->params['title-h6'])) {
        echo Yii::$app->view->params['title-h6'];
        echo Yii::$app->view->params['text-h6'];
    }

    echo '</div>';
}

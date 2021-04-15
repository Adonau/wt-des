<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class QuestsOnPetsController extends Controller
{
    public function actionQuestForTheWolf()
    {
        return $this->render('quest-for-the-wolf');
    }
    
    public function actionQuestForTheKookaburra()
    {
        return $this->render('quest-for-the-kookaburra');
    }
}
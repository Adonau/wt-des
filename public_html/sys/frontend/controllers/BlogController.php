<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class BlogController extends Controller
{
    public function actionSelectionserver()
    {
        return $this->render('selectionserver');
    }

    public function actionQuestAntharas()
    {
        return $this->render('quest-antharas');
    }
    
    public function actionQuestValakas()
    {
        return $this->render('quest-valakas');
    }
    public function actionQuestsOnPets()
    {
        return $this->render('quests-on-pets');
    }
}

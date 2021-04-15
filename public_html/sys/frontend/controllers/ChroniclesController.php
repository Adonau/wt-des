<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Listserver;
use common\models\ChroniclesPages;

/**
 * Chronicle controller
 */
class ChroniclesController extends Controller
{
    public function actionC4()
    {
        $name = 'c4';
        $ch = 'C4';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('c4', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }


    public function actionInterlude()
    {
        $name = 'interlude';
        $ch = 'Interlude';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('interlude', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionInterludeWithAddition()
    {
        $name = 'interlude-addition';
        $ch = 'Interlude';
        $dp = '<i class="fa fa-plus-square" aria-hidden="true"></i>';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->andwhere('icon_dp = :icon_dp', [':icon_dp' => $dp])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->andwhere('icon_dp = :icon_dp', [':icon_dp' => $dp])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->andwhere('icon_dp = :icon_dp', [':icon_dp' => $dp])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->andwhere('icon_dp = :icon_dp', [':icon_dp' => $dp])->all();

        return $this->render('interlude-with-addition', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    
    public function actionGraciaEpilogue()
    {
        $name = 'epilogue';
        $ch = 'Epilogue';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('gracia-epilogue', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionGraciaFinal()
    {
        $name = 'final';
        $ch = 'Gracia Final';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('gracia-final', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionFreya()
    {
        $name = 'freya';
        $ch = 'Freya';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('freya', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionHighFive()
    {
        $name = 'high-five';
        $ch = 'High five';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('high-five', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionClassic()
    {
        $name = 'classic';
        $ch = 'Classic';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('classic', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionGoddessOfDestruction()
    {
        $name = 'god';
        $ch = 'GoD';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('goddess-of-destruction', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionLindvior()
    {
        $name = 'lindvior';
        $ch = 'Lindvior';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('lindvior', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionErtheia()
    {
        $name = 'ertheia';
        $ch = 'Ertheia';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('ertheia', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionInfiniteOdyssey()
    {
        $name = 'odyssey';
        $ch = 'Odyssey';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('infinite-odyssey', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionHelios()
    {
        $name = 'helios';
        $ch = 'Helios';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('helios', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionGrandCrusade()
    {
        $name = 'crusade';
        $ch = 'Gr.Crusade';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('grand-crusade', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionSalvation()
    {
        $name = 'salvation';
        $ch = 'Salvation';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('salvation', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionOrfen()
    {
        $name = 'orfen';
        $ch = 'Orfen';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('orfen', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    
    public function actionFafurion()
    {
        $name = 'fafurion';
        $ch = 'Fafurion';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('fafurion', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionPreludeOfWar()
    {
        $name = 'prelude';
        $ch = 'Prelude';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('prelude-of-war', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionHomunculus()
    {
        $name = 'homunculus';
        $ch = 'Homunculus';
        $pages = ChroniclesPages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('chronicle = :chronicle', [':chronicle' => $ch])->all();

        return $this->render('homunculus', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
}

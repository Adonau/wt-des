<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Listserver;
use common\models\TypePages;
class ServersTypeController extends Controller
{
    public function actionRvr()
    {
        $name = 'rvr';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_rvr = :icon_rvr', [':icon_rvr' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_rvr = :icon_rvr', [':icon_rvr' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_rvr = :icon_rvr', [':icon_rvr' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_rvr = :icon_rvr', [':icon_rvr' => $ch])->all();

        return $this->render('rvr', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionGve()
    {
        $name = 'gve';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_gve = :icon_gve', [':icon_gve' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_gve = :icon_gve', [':icon_gve' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_gve = :icon_gve', [':icon_gve' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_gve = :icon_gve', [':icon_gve' => $ch])->all();

        return $this->render('gve', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

    public function actionMultiprof()
    {
        $name = 'multa';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_mul = :icon_mul', [':icon_mul' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_mul = :icon_mul', [':icon_mul' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_mul = :icon_mul', [':icon_mul' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_mul = :icon_mul', [':icon_mul' => $ch])->all();

        return $this->render('multiprof', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionTopServersL2()
    {
        $name = 'budget';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('top-servers-l2', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionObt()
    {
        $name = 'obt';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_obt = :icon_obt', [':icon_obt' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_obt = :icon_obt', [':icon_obt' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_obt = :icon_obt', [':icon_obt' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_obt = :icon_obt', [':icon_obt' => $ch])->all();

        return $this->render('obt', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionPromotionsAndBonuses()
    {
        $name = 'bonuses';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_bonus = :icon_bonus', [':icon_bonus' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_bonus = :icon_bonus', [':icon_bonus' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_bonus = :icon_bonus', [':icon_bonus' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_bonus = :icon_bonus', [':icon_bonus' => $ch])->all();

        return $this->render('promotions-and-bonuses', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionForeignServers()
    {
        $name = 'foreign';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_lang = :icon_lang', [':icon_lang' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_lang = :icon_lang', [':icon_lang' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_lang = :icon_lang', [':icon_lang' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_lang = :icon_lang', [':icon_lang' => $ch])->all();

        return $this->render('foreign-servers', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionServersWithAddition()
    {
        $name = 'addition';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_dp = :icon_dp', [':icon_dp' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_dp = :icon_dp', [':icon_dp' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_dp = :icon_dp', [':icon_dp' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_dp = :icon_dp', [':icon_dp' => $ch])->all();

        return $this->render('servers-with-addition', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionLowRateServers()
    {
        $name = 'low';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 0, 15])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 0, 15])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 0, 15])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 0, 15])->all();

        return $this->render('low-rate-servers', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionMidRateServers()
    {
        $name = 'mid';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 16, 150])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 16, 150])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 16, 150])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 16, 150])->all();

        return $this->render('mid-rate-servers', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionPvpServers()
    {
        $name = 'pvp';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 151, 100000000])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 151, 100000000])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 151, 100000000])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 151, 100000000])->all();

        return $this->render('pvp-servers', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionCraftServers()
    {
        $name = 'craft';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_kraft = :icon_kraft', [':icon_kraft' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_kraft = :icon_kraft', [':icon_kraft' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_kraft = :icon_kraft', [':icon_kraft' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_kraft = :icon_kraft', [':icon_kraft' => $ch])->all();

        return $this->render('craft-servers', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionPtsServers()
    {
        $name = 'pts';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_pts = :icon_pts', [':icon_pts' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_pts = :icon_pts', [':icon_pts' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_pts = :icon_pts', [':icon_pts' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_pts = :icon_pts', [':icon_pts' => $ch])->all();

        return $this->render('craft-servers', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionBotAllowed()
    {
        $name = 'bot';
        $ch = '1';
        $pages = TypePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_bot = :icon_bot', [':icon_bot' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_bot = :icon_bot', [':icon_bot' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_bot = :icon_bot', [':icon_bot' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_bot = :icon_bot', [':icon_bot' => $ch])->all();

        return $this->render('bot-allowed', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
}

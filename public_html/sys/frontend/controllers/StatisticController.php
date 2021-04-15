<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Listserver;

class StatisticController extends Controller
{
    public function actionToday()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('today', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionTomorrow()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('tomorrow', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionYesterday()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('yesterday', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionNextweek()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('nextweek', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionLastweek()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('lastweek', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionBudget()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('budget', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionObt()
    {
        $ch = '<i class="fa fa-balance-scale" aria-hidden="true"></i>';
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_obt = :icon_obt', [':icon_obt' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_obt = :icon_obt', [':icon_obt' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_obt = :icon_obt', [':icon_obt' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_obt = :icon_obt', [':icon_obt' => $ch])->all();

        return $this->render('obt', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionBonuses()
    {
        $ch = '<i class="fa fa-gift" aria-hidden="true"></i>';
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_bonus = :icon_bonus', [':icon_bonus' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_bonus = :icon_bonus', [':icon_bonus' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_bonus = :icon_bonus', [':icon_bonus' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_bonus = :icon_bonus', [':icon_bonus' => $ch])->all();

        return $this->render('bonuses', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionForeignServers()
    {
        $ch = '1';
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_lang = :icon_lang', [':icon_lang' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_lang = :icon_lang', [':icon_lang' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_lang = :icon_lang', [':icon_lang' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_lang = :icon_lang', [':icon_lang' => $ch])->all();
        
        return $this->render('foreign-servers', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionServersWithAddition()
    {
        $ch = '<i class="fa fa-plus-square" aria-hidden="true"></i>';
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_dp = :icon_dp', [':icon_dp' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_dp = :icon_dp', [':icon_dp' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_dp = :icon_dp', [':icon_dp' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_dp = :icon_dp', [':icon_dp' => $ch])->all();
        
        return $this->render('servers-with-addition', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionLowRateServers()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 0,15])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 0,15])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 0,15])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 0,15])->all();
        
        return $this->render('low-rate-servers', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionMidRateServers()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 16,150])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 16,150])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 16,150])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 16,150])->all();
        
        return $this->render('mid-rate-servers', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionPvpServers()
    {
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 151,100000000])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 151,100000000])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 151,100000000])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 151,100000000])->all();
        
        return $this->render('pvp-servers', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionCraftServers()
    {
        $ch = '1';
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where('icon_kraft = :icon_kraft', [':icon_kraft' => $ch])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where('icon_kraft = :icon_kraft', [':icon_kraft' => $ch])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where('icon_kraft = :icon_kraft', [':icon_kraft' => $ch])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where('icon_kraft = :icon_kraft', [':icon_kraft' => $ch])->all();
        
        return $this->render('craft-servers', [
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

}

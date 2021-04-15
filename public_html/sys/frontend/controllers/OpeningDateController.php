<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Listserver;
use common\models\DatePages;

class OpeningDateController extends Controller
{
    public function actionToday()
    {
        $name = 'today';
        $pages = DatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('today', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionTomorrow()
    {
        $name = 'tomorrow';
        $pages = DatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('tomorrow', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionYesterday()
    {
        $name = 'yesterday';
        $pages = DatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('yesterday', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionNextWeek()
    {
        $name = 'nextweek';
        $pages = DatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('next-week', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }
    public function actionLastWeek()
    {
        $name = 'lastweek';
        $pages = DatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->all();

        return $this->render('last-week', [
            'pages' => $pages,
            'list_earlier_vip' => $server_list_earli_vip,
            'list_already_vip' => $server_list_already_vip,
            'list_earlier' => $server_list_earli,
            'list_already' => $server_list_already,
        ]);
    }

}
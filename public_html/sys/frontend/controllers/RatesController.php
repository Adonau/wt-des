<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Listserver;
use common\models\RatePages;

/**
 * Ratw controller
 */
class RatesController extends Controller
{
    public function actionFromX1ToX10()
    {
        $name = 'x1-x10';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 1, 10])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 1, 10])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 1, 10])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 1, 10])->all();

        return $this->render(
            'from-x1-to-x10',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionFromX11ToX50()
    {
        $name = 'x11-x50';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 11, 50])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 11, 50])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 11, 50])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 11, 50])->all();

        return $this->render(
            'from-x11-to-x50',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionFromX51ToX100()
    {
        $name = 'x51-x100';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 51, 100])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 51, 100])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 51, 100])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 51, 100])->all();

        return $this->render(
            'from-x51-to-x100',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionFromX101ToX500()
    {
        $name = 'x101-x500';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 101, 500])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 101, 500])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 101, 500])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 101, 500])->all();

        return $this->render(
            'from-x101-to-x500',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionFromX501ToX1000()
    {
        $name = 'x501-x1000';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 501, 1000])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 501, 1000])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 501, 1000])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 501, 1000])->all();

        return $this->render(
            'from-x501-to-x1000',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionFromX1001ToX5000()
    {
        $name = 'x1001-x5000';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 1001, 5000])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 1001, 5000])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 1001, 5000])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 1001, 5000])->all();

        return $this->render(
            'from-x1001-to-x5000',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionFromX5001ToX10000()
    {
        $name = 'x5001-x10000';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 5001, 10000])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 5001, 10000])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 5001, 10000])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 5001, 10000])->all();

        return $this->render(
            'from-x5001-to-x10000',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionFromX10001ToX50000()
    {
        $name = 'x10001-x50000';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 10001, 50000])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 10001, 50000])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 10001, 50000])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 10001, 50000])->all();

        return $this->render(
            'from-x10001-to-x50000',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionFromX50001ToX100000()
    {
        $name = 'x50001-x100000';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 50001, 100000])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 50001, 100000])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 50001, 100000])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 50001, 100000])->all();

        return $this->render(
            'from-x50001-to-x100000',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }

    public function actionX100001AndHigher()
    {
        $name = 'x100001+';
        $pages = RatePages::find()->where('name_page = :name_page', [':name_page' => $name])->all();
        $server_list_earli_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_ASC])->where(['between', 'rate', 50001, 100000])->all();
        $server_list_already_vip = Listserver::find()->orderBy(['status' => SORT_ASC, 'date' => SORT_DESC])->where(['between', 'rate', 50001, 100000])->all();
        $server_list_earli = Listserver::find()->orderBy(['date' => SORT_ASC])->where(['between', 'rate', 50001, 100000])->all();
        $server_list_already = Listserver::find()->orderBy(['date' => SORT_DESC])->where(['between', 'rate', 50001, 100000])->all();

        return $this->render(
            'x100001-and-higher',
            [
                'pages' => $pages,
                'list_earlier_vip' => $server_list_earli_vip,
                'list_already_vip' => $server_list_already_vip,
                'list_earlier' => $server_list_earli,
                'list_already' => $server_list_already,
            ]
        );
    }
}
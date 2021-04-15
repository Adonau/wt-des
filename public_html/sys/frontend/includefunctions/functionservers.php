<?php

use yii\helpers\Html;
// Функции серверов которые ещё не открылись

function vip_earlier_open($list_earlier_vip)
{
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier_vip as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date >= date('Y-m-d')) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', '<i class="fa fa-btc" aria-hidden="true"></i>&nbsp;- высокобюджетные сервера', ['class' => 'flex-row server__title server__title-hight'])
        . $html
        . Html::endTag('div') : '';
}

function today($list_earlier)
{
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {

        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };
        if ($list->date == date('Y-m-d')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Сегодня : ' . Yii::$app->formatter->asDate('now', 'full') . '', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function tomorrow($list_earlier)
{
    $time = strtotime("+1 day");
    $true_date = date("Y-m-d", $time);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if ($list->date == $true_date) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Завтра : ' . Yii::$app->formatter->asDate('tomorrow', 'full') . '', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function next_7_days($list_earlier)
{
    $time = strtotime("+1 day");
    $true_date = date("Y-m-d", $time);
    $time2 = strtotime("+8 day");
    $true_date2 = date("Y-m-d", $time2);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date > $true_date) && ($list->date <= $true_date2)) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Ближайщие 7 дней', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function after_7_days($list_earlier)
{
    $time = strtotime("+8 day");
    $true_date = date("Y-m-d", $time);
    $time2 = strtotime("+30 day");
    $true_date2 = date("Y-m-d", $time2);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date > $true_date) && ($list->date <= $true_date2)) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Откроются через неделю и более', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function after_month($list_earlier)
{
    $time = strtotime("+30 day");
    $true_date = date("Y-m-d", $time);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if ($list->date > $true_date) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Откроются через месяц и более', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

// Функции серверов которые уже открылись

function vip_alredy_open($list_already_vip)
{
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';
    foreach ($list_already_vip as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date < date('Y-m-d')) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', '<i class="fa fa-btc" aria-hidden="true"></i>&nbsp;- высокобюджетные сервера', ['class' => 'flex-row server__title server__title-hight'])
        . $html
        . Html::endTag('div') : '';
}

function yesterday($list_already)
{
    $time = strtotime("-1 day");
    $true_date = date("Y-m-d", $time);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';
    foreach ($list_already as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if ($list->date == $true_date) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Вчера : ' . Yii::$app->formatter->asDate('yesterday', 'full') . '', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function last_week($list_already)
{
    $time = strtotime("-1 day");
    $true_date = date("Y-m-d", $time);
    $time2 = strtotime("-8 day");
    $true_date2 = date("Y-m-d", $time2);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';
    foreach ($list_already as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date >= $true_date2) && ($list->date < $true_date)) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Открылись на прошлой неделе', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function week_ago($list_already)
{
    $time = strtotime("-8 day");
    $true_date = date("Y-m-d", $time);
    $time2 = strtotime("-30 day");
    $true_date2 = date("Y-m-d", $time2);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';
    foreach ($list_already as $list) {

        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date > $true_date2) && ($list->date < $true_date)) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Открылись более недели назад', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function month_ago($list_already)
{
    $time = strtotime("-30 day");
    $true_date = date("Y-m-d", $time);
    $time_end = strtotime("-60 day");
    $true_date_end = date("Y-m-d", $time_end);
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    $html = '';
    foreach ($list_already as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date <= $true_date) && (($list->date >= $true_date_end) || ($status_servers != 'wsimple_server'))) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Открылись более месяца назад', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

// Функции для страницы с випами


function vip_today($list_earlier)
{
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {

        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };
        if ($list->date == date('Y-m-d') && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Сегодня : ' . Yii::$app->formatter->asDate('now', 'full') . '', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function vip_tomorrow($list_earlier)
{
    $time = strtotime("+1 day");
    $true_date = date("Y-m-d", $time);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date == $true_date) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Завтра : ' . Yii::$app->formatter->asDate('tomorrow', 'full') . '', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function vip_next_7_days($list_earlier)
{
    $time = strtotime("+1 day");
    $true_date = date("Y-m-d", $time);
    $time2 = strtotime("+8 day");
    $true_date2 = date("Y-m-d", $time2);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date > $true_date) && ($list->date <= $true_date2) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Ближайщие 7 дней', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function vip_after_7_days($list_earlier)
{
    $time = strtotime("+8 day");
    $true_date = date("Y-m-d", $time);
    $time2 = strtotime("+30 day");
    $true_date2 = date("Y-m-d", $time2);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date > $true_date) && ($list->date <= $true_date2) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Откроются через неделю и более', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function vip_after_month($list_earlier)
{
    $time = strtotime("+30 day");
    $true_date = date("Y-m-d", $time);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    foreach ($list_earlier as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date > $true_date) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Откроются через месяц и более', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function vip_yesterday($list_already)
{
    $time = strtotime("-1 day");
    $true_date = date("Y-m-d", $time);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';
    foreach ($list_already as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date == $true_date) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Вчера : ' . Yii::$app->formatter->asDate('yesterday', 'full') . '', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function vip_last_week($list_already)
{
    $time = strtotime("-1 day");
    $true_date = date("Y-m-d", $time);
    $time2 = strtotime("-8 day");
    $true_date2 = date("Y-m-d", $time2);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';
    foreach ($list_already as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date >= $true_date2) && ($list->date < $true_date) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Открылись на прошлой неделе', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function vip_week_ago($list_already)
{
    $time = strtotime("-8 day");
    $true_date = date("Y-m-d", $time);
    $time2 = strtotime("-30 day");
    $true_date2 = date("Y-m-d", $time2);
    $html = '';
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';
    foreach ($list_already as $list) {

        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date > $true_date2) && ($list->date < $true_date) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Открылись более недели назад', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

function vip_month_ago($list_already)
{
    $time = strtotime("-30 day");
    $true_date = date("Y-m-d", $time);
    // переменные иконок и тд
    $status_servers = '';
    $icon_stars = '';
    $icon_b_money = '';

    $html = '';
    foreach ($list_already as $list) {
        if ($list->date_end < date('Y-m-d')) {
            $status_servers = 'wsimple_server';
            $icon_stars = '';
            $icon_b_money = '';
        } else {
            $status_servers = $list->status;
            $icon_stars = $list->getStar($list->icon_star);
            $icon_b_money = $list->getMoneyHelp($list->icon_money);
        };

        if (($list->date <= $true_date) && ($status_servers != 'wsimple_server') && ($status_servers != 'vip_server')) {
            $html .= Html::beginTag('div', ['class' => 'flex-row server__container ' . $status_servers . ''])
                . $icon_stars
                . Html::beginTag('div', ['class' => 'server__element server__url-container'])
                . Html::a($list->name, $list->url, ['class' => 'server__url', 'target' => '_blank', 'rel' => 'nofollow'])
                . $list->getIconLang($list->icon_lang);

            if ((($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) || ($list->icon_bonus != NULL)) {
                $html .= Html::beginTag('div', ['class' => 'flex-row server__obt-bonus-container']);
                if (($list->icon_obt != NULL) && ($list->date > date('Y-m-d'))) {
                    $html .=  Html::tag('div', $list->getIconObt($list->icon_obt) . $list->getObtText($list->text_obt), ['class' => 'server__element server__obt-icon']);  // TAG server__element server__obt-icon
                }
                if ($list->icon_bonus != NULL) {
                    $html .= Html::tag('div', $list->getIconBonus($list->icon_bonus) . $list->getBonusText($list->text_bonus), ['class' => 'server__element server__bonus-icon']); // TAG server__element server__bonus-icon
                }
                $html .= Html::endTag('div'); // END TAG server__obt-bonus-container
            }
            $html .= Html::endTag('div') // END TAG server__element server__url-container
                . $icon_b_money
                . $list->getRate($list->rate)
                . Html::beginTag('div', ['class' => 'flex-row server__element server__chronicle-container'])
                . $list->getChronicle($list->chronicle)
                . $list->getIconPTS($list->icon_pts);
            if ($list->icon_dp != NULL) {
                $html .= Html::beginTag('div', ['class' => 'server__element server__additions-icon'])
                    . $list->getIconDop($list->icon_dp);
                if ($list->icon_dp != NULL) {
                    $html .= $list->getDpText($list->text_dop);
                }
                $html .= Html::endTag('div'); // END TAG server__element server__additions-icon
            }
            $html .= $list->getIconMul($list->icon_mul)
                . $list->getIconRvr($list->icon_rvr)
                . $list->getIconGve($list->icon_gve)
                . $list->getIconKraft($list->icon_kraft)
                . $list->getIconBot($list->icon_bot)
                . Html::endTag('div') // END TAG server__chronicle-container
                . Html::tag('div', Yii::$app->formatter->asDate($list->date), ['class' => 'server__element server__date']) // TAG server__date
                . Html::endTag('div'); // END TAG server__container
        }
    }

    return $html ? Html::beginTag('div', ['class' => 'flex-column server'])
        . Html::tag('div', 'Открылись более месяца назад', ['class' => 'flex-row server__title server__title-low'])
        . $html
        . Html::endTag('div') : '';
}

// Вывод текста когда неодного сервера не открывается

function text_lack_of_servers($list_earlier_vip, $list_already_vip, $list_earlier, $list_already)
{
    $time_se_end = strtotime("-60 day");
    $true_se_date_end = date("Y-m-d", $time_se_end);

    $a = "0";
    $b = "0";
    $d = "0";
    $g = "0";

    foreach ($list_earlier_vip as $earlier_vip) {

        if ($earlier_vip->date_end < date('Y-m-d')) {
            $status_se = 'wsimple_server';
        } else {
            $status_se  = $earlier_vip->status;
        }

        if ((($earlier_vip->date >= $true_se_date_end) || ($status_se != 'wsimple_server'))) {
            $a = "1";
        }
    }

    foreach ($list_already_vip as $already_vip) {

        if ($already_vip->date_end < date('Y-m-d')) {
            $status_se = 'wsimple_server';
        } else {
            $status_se  = $already_vip->status;
        }

        if ((($already_vip->date >= $true_se_date_end) || ($status_se != 'wsimple_server'))) {
            $b = "1";
        }
    }

    foreach ($list_earlier as $earlier) {

        if ($earlier->date_end < date('Y-m-d')) {
            $status_se = 'wsimple_server';
        } else {
            $status_se  = $earlier->status;
        }

        if ((($earlier->date >= $true_se_date_end) || ($status_se != 'wsimple_server'))) {
            $d = "1";
        }
    }

    foreach ($list_already as $already) {

        if ($already->date_end < date('Y-m-d')) {
            $status_se = 'wsimple_server';
        } else {
            $status_se  = $already->status;
        }

        if ((($already->date >= $true_se_date_end) || ($status_se != 'wsimple_server'))) {
            $g = "1";
        }
    }

    if (($a == "0") && ($b == "0") && ($d == "0") && ($g == "0")) {
        echo '<div class="flex-column not_server">
                <div class="flex-row not_server-text">
                    <b>По данному запросу серверов нет</b> 
                    <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
                </div>
                <a href="/" class="not_server-link" title="Главная">Пройти на главную</a>
        </div>';
    }
}

function text_today($list_earlier)
{
    $sum = 0;
    foreach ($list_earlier as $stat) {
        if ($stat->date == date('Y-m-d')) {
            $stat = 1;
            $sum +=  $stat;
        }
    }
    if ($sum == 0) {
        echo '<div class="flex-column not_server">
        <div class="flex-row not_server-text">
            <b>Сегодня пусто</b> 
            <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
        </div>
        <a href="#" class="not_server-link" title="Главная">Пройти на главную</a>
        </div>';
    }
}

function text_tomorrow($list_earlier)
{
    $time = strtotime("+1 day");
    $fecha = date("Y-m-d", $time);
    $sum = 0;
    foreach ($list_earlier as $stat) {
        if ($stat->date == $fecha) {
            $stat = 1;
            $sum +=  $stat;
        }
    }
    if ($sum == 0) {
        echo '<div class="flex-column not_server">
        <div class="flex-row not_server-text">
            <b>На завтра открытий нет</b> 
            <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
        </div>
        <a href="#" class="not_server-link" title="Главная">Пройти на главную</a>
        </div>';
    }
}

function text_yesterday($list_already)
{
    $time = strtotime("-1 day");
    $fecha = date("Y-m-d", $time);
    $sum = 0;
    foreach ($list_already as $stat) {
        if ($stat->date == $fecha) {
            $stat = 1;
            $sum +=  $stat;
        }
    }
    if ($sum == 0) {
        echo '<div class="flex-column not_server">
        <div class="flex-row not_server-text">
            <b>Вчера ничего не было</b> 
            <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
        </div>
        <a href="#" class="not_server-link" title="Главная">Пройти на главную</a>
        </div>';
    }
}
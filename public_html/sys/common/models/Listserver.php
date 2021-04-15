<?php

namespace common\models;

use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "listserver".
 *
 * @property int $id
 * @property string $status
 * @property string $name
 * @property string $chronicle
 * @property string $rate
 * @property string $date
 * @property string $url
 * @property string $date_start
 * @property string $date_end
 * @property string $icon_obt
 * @property string $icon_bonus
 * @property string $icon_new
 * @property string $icon_dp
 * @property string $icon_mul
 * @property string $icon_rvr
 * @property string $icon_gve
 * @property string $icon_lang
 * @property string $icon_pts
 * @property string $icon_kraft
 * @property string $icon_bot
 * @property string $text_obt
 * @property string $text_bonus
 * @property string $text_dop
 */
class Listserver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listserver';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'name', 'chronicle', 'rate', 'date', 'url'], 'required'],
            [['date', 'date_start', 'date_end', 'text_obt', 'text_bonus', 'text_dop'], 'safe'],
            [['status', 'url', 'icon_obt', 'icon_bonus', 'icon_star', 'icon_money', 'icon_dp'], 'string', 'max' => 100],
            [['icon_mul', 'icon_rvr', 'icon_gve', 'icon_lang', 'icon_kraft', 'icon_bot'], 'string', 'max' => 250],
            [['name', 'chronicle'], 'string', 'max' => 50],
            [['rate', 'icon_pts'], 'string', 'max' => 15],
            [['icon_pts'], 'string', 'max' => 10],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Статус сервера',
            'name' => 'Название сервера',
            'chronicle' => 'Хроники сервера',
            'rate' => 'Рейты сервера',
            'date' => 'Дата открытия сервера',
            'url' => 'Url',
            'date_start' => 'Начало оплаты',
            'date_end' => 'Конец оплаты',
            'icon_obt' => 'Иконка Obt',
            'icon_bonus' => 'Иконка Bonus',
            'icon_dp' => 'Иконка Дополнений',
            'icon_star' => 'Иконка Star',
            'icon_money' => 'Иконка Money',
            'icon_mul' => 'Иконка Мультипрофа',
            'icon_rvr' => 'Иконка РВР',
            'icon_gve' => 'Иконка ГВЕ',
            'icon_lang' => 'Иконка Языка',
            'icon_kraft' => 'Крафт сервер',
            'icon_pts' => 'icon_pts',
            'icon_bot' => 'icon_bot',
            'text_obt' => 'Текст под обт',
            'text_bonus' => 'Текст под бонус',
            'text_dop' => 'Текст под доп',
        ];
    }
    // Простая логика сброса стилей
    public function getStatus($date_end)
    {
        if ($date_end < date('Y-m-d')) {
            if ($date_end != null) {
                return 'simple__server';
            }
        }
    }
    // Функции иконок спан итемов

    public function getStar($icon_star)
    {
        if ($icon_star == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__star-icon']) .
                '<i class="fa fa-star" aria-hidden="true"></i>' .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'ПРЕМИУМ сервер', ['class' => 'dropdown__title']) .
                Html::endTag('div') .
                Html::endTag('div');

        } else if ($icon_star == '2') {

            return
                Html::beginTag('div', ['class' => 'server__element server__star-icon']) .
                '<i class="fa fa-star-half-o" aria-hidden="true"></i>' .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'ТОП сервер', ['class' => 'dropdown__title']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else if ($icon_star == '3') {

            return
                Html::beginTag('div', ['class' => 'server__element server__star-icon']) .
                '<i class="fa fa-star-o" aria-hidden="true"></i>' .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'ВИП сервер', ['class' => 'dropdown__title']) .
                Html::endTag('div') .
                Html::endTag('div');
        }
    }

    public function getRate($rate)
    {
        return
            Html::tag('div', 'x' . $rate, ['class' => 'server__element server__rate']);
    }

    public function getChronicle($chronicle)
    {
        return
            Html::tag('div', $chronicle, ['class' => 'server__element server__chronicle']);
    }

    // иконки бюджета, обт, бонусы
    public function getMoneyHelp($icon_money)
    {
        if ($icon_money == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__budget-icon']) .
                '<i class="fa fa-btc" aria-hidden="true"></i>' .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Высокобюджетный Сервер', ['class' => 'dropdown__title']) .
                Html::tag('div', 'Высокий бюджет на рекламу.', ['class' => 'dropdown__text']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else {

            return '';
        }
    }

    public function getIconObt($icon_obt)
    {
        if ($icon_obt == '1') {
            return
                $icon_obt = '<i class="fa fa-balance-scale" aria-hidden="true"></i>';
        }
    }

    public function getIconBonus($icon_bonus)
    {
        if ($icon_bonus != NULL) {
            return
                $icon_bonus = '<i class="fa fa-gift" aria-hidden="true"></i>';
        }
    }

    public function getObtText($text_obt)
    {
        if ($text_obt != NULL) {

            return
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Проводится открытый бета тест', ['class' => 'dropdown__title']) .
                Html::tag('div', $text_obt, ['class' => 'dropdown__text']) .
                Html::endTag('div');
        } else {

            return
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Проводится открытый бета тест', ['class' => 'dropdown__title']) .
                Html::endTag('div');
        }
    }

    public function getBonusText($text_bonus)
    {
        if ($text_bonus != NULL) {

            return
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Имеются акции и бонусы', ['class' => 'dropdown__title']) .
                Html::tag('div', $text_bonus, ['class' => 'dropdown__text']) .
                Html::endTag('div');
        } else {

            return
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Имеются акции и бонусы', ['class' => 'dropdown__title']) .
                Html::endTag('div');
        }
    }

    public function getIconDop($icon_dp)
    {
        if ($icon_dp == '1') {
            return
                $icon_dp = '<i class="fa fa-plus-square" aria-hidden="true"></i>';
        }
    }

    public function getDpText($text_dop)
    {
        if ($text_dop != NULL) {

            return
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Имеются дополнения', ['class' => 'dropdown__title']) .
                Html::tag('div', $text_dop, ['class' => 'dropdown__text']) .
                Html::endTag('div');
        } else {

            return
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Имеются дополнения', ['class' => 'dropdown__title']) .
                Html::endTag('div');
        }
    }

    public function getIconMul($icon_mul)
    {
        if ($icon_mul == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__additions-icon']) .
                '<i class="dp--icon">MuL</i>' .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Мультипрофа', ['class' => 'dropdown__title']) .
                Html::tag('div', 'Скиллы всех классов доступные для персонажа.', ['class' => 'dropdown__text']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else {
            return  '';
        }
    }

    public function getIconRvr($icon_rvr)
    {
        if ($icon_rvr == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__additions-icon']) .
                '<i class="dp--icon">RvR</i>' .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'RvR', ['class' => 'dropdown__title']) .
                Html::tag('div', 'Клиет игры полностью переработан.', ['class' => 'dropdown__text']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else {
            return  '';
        }
    }

    public function getIconGve($icon_gve)
    {
        if ($icon_gve == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__additions-icon']) .
                '<i class="dp--icon">GvE</i>' .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'GvE', ['class' => 'dropdown__title']) .
                Html::tag('div', 'Гейм плей игры переработан.', ['class' => 'dropdown__text']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else {
            return '';
        }
    }

    public function getIconKraft($icon_kraft)
    {
        if ($icon_kraft == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__additions-icon']) .
                Html::beginTag('i', ['class' => 'fa fa-gavel', 'aria-hidden' => "true"]) . Html::endTag('i') .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Крафт сервер', ['class' => 'dropdown__title']) .
                Html::tag('div', 'Повышен спойл и шанс крафта.', ['class' => 'dropdown__text']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else {
            return  '';
        }
    }

    public function getIconPTS($icon_pts)
    {
        if ($icon_pts == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__additions-icon']) .
                Html::beginTag('i', ['class' => 'dp--icon']) . 'PTS' . Html::endTag('i') .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'PTS сервер', ['class' => 'dropdown__title']) .
                Html::tag('div', 'Механика клиента соответствует оригиналу.', ['class' => 'dropdown__text']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else {
            return  '';
        }
    }

    public function getIconLang($icon_lang)
    {
        if ($icon_lang == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__lang-icon']) .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Иностранный сервер', ['class' => 'dropdown__title']) .
                Html::tag('div', 'Преобладает иностранный язык.', ['class' => 'dropdown__text']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else {
            return  '';
        }
    }

    public function getIconBot($icon_bot)
    {
        if ($icon_bot == '1') {

            return
                Html::beginTag('div', ['class' => 'server__element server__additions-icon']) .
                Html::beginTag('i', ['class' => 'dp--icon']) . 'BOT' . Html::endTag('i') .
                Html::beginTag('div', ['class' => 'flex-column dropdown']) .
                Html::tag('div', 'Разрешён Бот', ['class' => 'dropdown__title']) .
                Html::tag('div', 'На сервере разрешён любой софт.', ['class' => 'dropdown__text']) .
                Html::endTag('div') .
                Html::endTag('div');
        } else {
            return  '';
        }
    }
}

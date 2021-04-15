<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advertising".
 *
 * @property int $id
 * @property string $small_banner
 * @property string $big_banner
 * @property string $header_banner
 * @property string $price__phavorit
 * @property string $price__top
 * @property string $price__top_two
 * @property string $price__vip
 * @property string $price__vip_two
 * @property string $price__vip_three
 * @property string $web__money__rub
 * @property string $web__money__ue
 * @property string $price_top_econ
 * @property string $price_top_two_econ
 * @property string $price_vip_econ
 * @property string $price_vip_two_econ
 * @property string $price_vip_three_econ
 */
class Advertising extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advertising';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['small_banner', 'big_banner', 'header_banner', 'price__phavorit', 'price__top', 'price__top_two', 'price__vip', 'price__vip_two', 'price__vip_three', 'price_top_econ', 'price_top_two_econ' ,'price_vip_econ','price_vip_two_econ', 'price_vip_three_econ', 'web__money__rub', 'web__money__ue'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'small_banner' => 'Цена баннер в асайд',
            'big_banner' => 'Цена крупный Баннер',
            'header_banner' => 'Баннер в Хедере',
            'price__phavorit' => 'Цена  Phavorit',
            'price__top' => 'Цена  Top 30 дней',
            'price__top_two' => 'Цена  Top 15 дней',
            'price__vip' => 'Цена Vip 30 дней',
            'price__vip_two' => 'Цена  Vip 15 дней',
            'price__vip_three' => 'Цена  Vip 10 дней',

            'price_top_econ' => 'Цена  Top 30 дней Эконом',
            'price_top_two_econ' => 'Цена  Top 15 дней Эконом',
            'price_vip_econ' => 'Цена Vip 30 дней Эконом',
            'price_vip_two_econ' => 'Цена  Vip 15 дней Эконом',
            'price_vip_three_econ' => 'Цена  Vip 10 дней Эконом',

            'web__money__rub' => 'Web  Money  Рубли',
            'web__money__ue' => 'Web  Money  Доллары',
        ];
    }
}

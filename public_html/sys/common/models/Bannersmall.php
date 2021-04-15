<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bannersmall".
 *
 * @property int $id
 * @property string $bannerUrl
 * @property string $bannerLink
 */
class Bannersmall extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bannersmall';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bannerUrl', 'bannerLink'], 'required'],
            [['bannerUrl', 'bannerLink'], 'string', 'max' => 100],
            [['date_start', 'date_end'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bannerUrl' => 'Url адрес',
            'bannerLink' => 'Ссылка на сайт',
            'date_start' => 'Начало оплаты',
            'date_end' => 'Конец оплаты',
        ];
    }
}

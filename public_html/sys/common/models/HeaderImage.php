<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "header_image".
 *
 * @property int $id
 * @property string $image
 * @property string $date_start
 * @property string $date_end
 */
class HeaderImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'header_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'link', 'date_start', 'date_end'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Ссылка на сайт',
            'image' => 'Url Изображения',
            'date_start' => 'Начало оплаты',
            'date_end' => 'Конец оплаты',
        ];
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_ban".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $cause
 */
class SiteBan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site_ban';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'cause'], 'required'],
            [['cause'], 'string'],
            [['name', 'url'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'url' => 'Url адерс',
            'cause' => 'Причина бана',
        ];
    }
}

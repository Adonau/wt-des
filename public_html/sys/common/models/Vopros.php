<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vopros".
 *
 * @property int $id
 * @property string $vopros
 */
class Vopros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vopros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vopros'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vopros' => 'Vopros',
        ];
    }
}

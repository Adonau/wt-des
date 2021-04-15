<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $mail
 * @property string $icq
 * @property string $teleg
 * @property string $other_one
 * @property string $other__two
 * @property string $other__three
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['other__two'], 'required'],
            [['mail', 'icq', 'teleg', 'other_one', 'other__two', 'other__three'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mail' => 'Почта',
            'icq' => 'Icq',
            'teleg' => 'Телега',
            'other_one' => 'Рубли',
            'other__two' => 'Баксы',
            'other__three' => 'Киви',
        ];
    }
}

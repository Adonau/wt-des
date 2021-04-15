<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "imagearticle".
 *
 * @property int $id
 * @property string $url
 * @property string $link
 * @property string $text_head
 * @property string $text_content
 */
class Imagearticle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'imagearticle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'link', 'text_head', 'text_content'], 'required'],
            [['text_head', 'text_content'], 'string'],
            [['date_start', 'date_end'], 'safe'],
            [['url', 'link'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url адрес',
            'link' => 'Ссылка на сайт',
            'text_head' => 'Заголовок текста(золотой цвет)',
            'text_content' => 'Котент текст(под заголовком)',
            'date_start' => 'Начало оплаты',
            'date_end' => 'Конец оплаты',
        ];
    }
}

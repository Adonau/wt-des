<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $link_news
 * @property string $date_news
 * @property string $text_news
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_news'], 'safe'],
            [['text_news'], 'string'],
            [['link_news'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link_news' => 'Ссылка на покупателя',
            'date_news' => 'Дата создания новости',
            'text_news' => 'Текст новостей',
        ];
    }
}

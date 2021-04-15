<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "text_pages".
 *
 * @property int $id
 * @property string $definition_pages
 * @property string $title_pages
 * @property string $text_pages
 * @property string $title_num2
 * @property string $text_num2
 * @property string $title_num3
 * @property string $text_num3
 * @property string $title_num4
 * @property string $text_num4
 * @property string $title_num5
 * @property string $text_num5
 */
class TextPages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'text_pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_pages', 'text_num2', 'text_num3', 'text_num4', 'text_num5'], 'string'],
            [['definition_pages', 'title_pages', 'title_num2', 'title_num3', 'title_num4', 'title_num5'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'definition_pages' => 'Страница сайта',
            'title_pages' => 'Заголовок страницы',
            'text_pages' => 'Текст страницы',
            'title_num2' => 'Второй заголовок',
            'text_num2' => 'Второй текст',
            'title_num3' => 'Третий заголовок',
            'text_num3' => 'Третий текст',
            'title_num4' => 'Четвертый заголовок',
            'text_num4' => 'Четвертый текст',
            'title_num5' => 'Пятый заголовок',
            'text_num5' => 'Пятый текст',
        ];
    }
}

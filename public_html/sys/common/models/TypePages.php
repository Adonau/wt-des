<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type_pages".
 *
 * @property int $id
 * @property string $name_page
 * @property string $canonical
 * @property string $under_title
 * @property string $title_page
 * @property string $description_page
 * @property string $key_words_page
 * @property string $heading_h1
 * @property string $heading_h1_text
 * @property string $heading_h2
 * @property string $heading_h2_text
 * @property string $heading_h3
 * @property string $heading_h3_text
 * @property string $heading_h4
 * @property string $heading_h4_text
 * @property string $heading_h5
 * @property string $heading_h5_text
 * @property string $heading_h6
 * @property string $heading_h6_text
 */
class TypePages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_page', 'title_page', 'description_page', 'key_words_page', 'heading_h1', 'canonical', 'under_title'], 'required'],
            [['description_page', 'key_words_page', 'heading_h1_text', 'heading_h2_text', 'heading_h3_text', 'heading_h4_text', 'heading_h5_text', 'heading_h6_text'], 'string'],
            [['name_page', 'title_page', 'heading_h1', 'heading_h2', 'heading_h3', 'heading_h4', 'heading_h5', 'heading_h6'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_page' => 'Название страницы',
            'canonical' => 'Канонический url',
            'under_title' => 'Текст под заголовком H1',
            'title_page' => 'Title страницы',
            'description_page' => 'Description страницы',
            'key_words_page' => 'Key Words страницы',
            'heading_h1' => 'Заголовок H1',
            'heading_h1_text' => 'Текст для H1',
            'heading_h2' => 'Заголовок H2',
            'heading_h2_text' => 'Текст для H2',
            'heading_h3' => 'ЗаголовокH3',
            'heading_h3_text' => 'Текст для H3',
            'heading_h4' => 'Заголовок H4',
            'heading_h4_text' => 'Текст для H4',
            'heading_h5' => 'Заголовок H5',
            'heading_h5_text' => 'Текст для H5',
            'heading_h6' => 'Заголовок H6',
            'heading_h6_text' => 'Текст для H6',
        ];
    }
}

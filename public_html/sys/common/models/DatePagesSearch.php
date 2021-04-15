<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DatePages;

/**
 * DatePagesSearch represents the model behind the search form of `common\models\DatePages`.
 */
class DatePagesSearch extends DatePages
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name_page', 'title_page', 'description_page', 'key_words_page', 'heading_h1', 'heading_h1_text', 'heading_h2', 'heading_h2_text', 'heading_h3', 'heading_h3_text', 'heading_h4', 'heading_h4_text', 'heading_h5', 'heading_h5_text', 'heading_h6', 'heading_h6_text', 'canonical', 'under_title'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DatePages::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name_page', $this->name_page])
            ->andFilterWhere(['like', 'title_page', $this->title_page])
            ->andFilterWhere(['like', 'under_title', $this->under_title])
            ->andFilterWhere(['like', 'title_page', $this->title_page])
            ->andFilterWhere(['like', 'description_page', $this->description_page])
            ->andFilterWhere(['like', 'key_words_page', $this->key_words_page])
            ->andFilterWhere(['like', 'heading_h1', $this->heading_h1])
            ->andFilterWhere(['like', 'heading_h1_text', $this->heading_h1_text])
            ->andFilterWhere(['like', 'heading_h2', $this->heading_h2])
            ->andFilterWhere(['like', 'heading_h2_text', $this->heading_h2_text])
            ->andFilterWhere(['like', 'heading_h3', $this->heading_h3])
            ->andFilterWhere(['like', 'heading_h3_text', $this->heading_h3_text])
            ->andFilterWhere(['like', 'heading_h4', $this->heading_h4])
            ->andFilterWhere(['like', 'heading_h4_text', $this->heading_h4_text])
            ->andFilterWhere(['like', 'heading_h5', $this->heading_h5])
            ->andFilterWhere(['like', 'heading_h5_text', $this->heading_h5_text])
            ->andFilterWhere(['like', 'heading_h6', $this->heading_h6])
            ->andFilterWhere(['like', 'heading_h6_text', $this->heading_h6_text]);

        return $dataProvider;
    }
}

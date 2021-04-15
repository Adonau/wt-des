<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TextPages;

/**
 * TextPagesSearch represents the model behind the search form of `common\models\TextPages`.
 */
class TextPagesSearch extends TextPages
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['definition_pages', 'title_pages', 'text_pages', 'title_num2', 'text_num2', 'title_num3', 'text_num3', 'title_num4', 'text_num4', 'title_num5' , 'text_num5' ], 'safe'],
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
        $query = TextPages::find();

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

        $query->andFilterWhere(['like', 'definition_pages', $this->definition_pages])
            ->andFilterWhere(['like', 'title_pages', $this->title_pages])
            ->andFilterWhere(['like', 'text_pages', $this->text_pages])
            ->andFilterWhere(['like', 'title_num2', $this->title_num2])
            ->andFilterWhere(['like', 'text_num2', $this->text_num2])
            ->andFilterWhere(['like', 'title_num3', $this->title_num3])
            ->andFilterWhere(['like', 'text_num3', $this->text_num3])
            ->andFilterWhere(['like', 'title_num4', $this->title_num4])
            ->andFilterWhere(['like', 'text_num4', $this->text_num4])
            ->andFilterWhere(['like', 'title_num5', $this->title_num5])
            ->andFilterWhere(['like', 'text_num5', $this->text_num5]);
        
        return $dataProvider;
    }
}

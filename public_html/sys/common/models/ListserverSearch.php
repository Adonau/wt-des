<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Listserver;

/**
 * ListserverSearch represents the model behind the search form of `common\models\Listserver`.
 */
class ListserverSearch extends Listserver
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['status', 'name', 'chronicle', 'rate', 'date', 'url', 'date_start', 'date_end', 'icon_obt', 'icon_bonus', 'icon_dp', 'text_obt', 'text_bonus', 'text_dop', 'icon_mul', 'icon_rvr' ,'icon_gve', 'icon_lang', 'icon_kraft', 'icon_star', 'icon_pts', 'icon_bot'], 'safe'],         
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
        $query = Listserver::find();

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
            'date' => $this->date,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'icon_star' =>  $this->icon_star,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'chronicle', $this->chronicle])
            ->andFilterWhere(['like', 'rate', $this->rate])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'icon_obt', $this->icon_obt])
            ->andFilterWhere(['like', 'icon_bonus', $this->icon_bonus])
            ->andFilterWhere(['like', 'icon_dp', $this->icon_dp])
            ->andFilterWhere(['like', 'text_obt', $this->text_obt])
            ->andFilterWhere(['like', 'text_bonus', $this->text_bonus])
            ->andFilterWhere(['like', 'text_dop', $this->text_dop])
            ->andFilterWhere(['like', 'icon_mul', $this->icon_mul])
            ->andFilterWhere(['like', 'icon_rvr', $this->icon_rvr])
            ->andFilterWhere(['like', 'icon_gve', $this->icon_gve])
            ->andFilterWhere(['like', 'icon_lang', $this->icon_lang])
            ->andFilterWhere(['like', 'icon_kraft', $this->icon_kraft])
            ->andFilterWhere(['like', 'icon_pts', $this->icon_pts])
            ->andFilterWhere(['like', 'icon_star', $this->icon_star])
            ->andFilterWhere(['like', 'icon_bot', $this->icon_bot]);

        return $dataProvider;
    }
}

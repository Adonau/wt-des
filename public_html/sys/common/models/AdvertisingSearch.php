<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Advertising;

/**
 * AdvertisingSearch represents the model behind the search form of `common\models\Advertising`.
 */
class AdvertisingSearch extends Advertising
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['small_banner', 'big_banner', 'bsnner_header', 'price__phavorit', 'price__top', 'price__top_two', 'price__vip', 'price__vip_two', 'price_top_econ', 'price_top_two_econ' ,'price_vip_econ','price_vip_two_econ', 'price_vip_three_econ', 'price__vip_three', 'web__money__rub', 'web__money__ue'], 'safe'],
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
        $query = Advertising::find();

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

        $query->andFilterWhere(['like', 'small_banner', $this->small_banner])
             ->andFilterWhere(['like', 'big_banner', $this->big_banner])
             ->andFilterWhere(['like', 'header_banner', $this->header_banner])
            ->andFilterWhere(['like', 'price__phavorit', $this->price__phavorit])
            ->andFilterWhere(['like', 'price__top', $this->price__top])
            ->andFilterWhere(['like', 'price__top_two', $this->price__top_two])
            ->andFilterWhere(['like', 'price__vip', $this->price__vip])
            ->andFilterWhere(['like', 'price__vip_two', $this->price__vip_two])
            ->andFilterWhere(['like', 'price__vip_three', $this->price__vip_three])
            ->andFilterWhere(['like', 'web__money__rub', $this->web__money__rub])
            ->andFilterWhere(['like', 'web__money__ue', $this->web__money__ue]);

        return $dataProvider;
    }
}

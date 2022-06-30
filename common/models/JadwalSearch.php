<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Jadwal;

/**
 * JadwalSearch represents the model behind the search form of `common\models\Jadwal`.
 */
class JadwalSearch extends Jadwal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['kelas', 'senin', 'selasa', 'rabu', 'kamis', 'jumat'], 'safe'],
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
        $query = Jadwal::find();

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

        $query->andFilterWhere(['like', 'kelas', $this->kelas])
            ->andFilterWhere(['like', 'senin', $this->senin])
            ->andFilterWhere(['like', 'selasa', $this->selasa])
            ->andFilterWhere(['like', 'rabu', $this->rabu])
            ->andFilterWhere(['like', 'kamis', $this->kamis])
            ->andFilterWhere(['like', 'jumat', $this->jumat]);

        return $dataProvider;
    }
}

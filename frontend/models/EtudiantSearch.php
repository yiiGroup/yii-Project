<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Etudiant;

/**
 * EtudiantSearch represents the model behind the search form about `frontend\models\Etudiant`.
 */
class EtudiantSearch extends Etudiant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cin', 'firstname', 'lastname', 'adresse', 'ni'], 'safe'],
            [['num_tel'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Etudiant::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'num_tel' => $this->num_tel,
        ]);

        $query->andFilterWhere(['like', 'cin', $this->cin])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'adresse', $this->adresse])
            ->andFilterWhere(['like', 'ni', $this->ni]);

        return $dataProvider;
    }
}

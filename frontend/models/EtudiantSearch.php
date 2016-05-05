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
<<<<<<< HEAD
            [['cin', 'firstname', 'lastname', 'adresse', 'ni'], 'safe'],
=======
            [['cin', 'firstname', 'lastname', 'adress', 'ni'], 'safe'],
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
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
<<<<<<< HEAD
            ->andFilterWhere(['like', 'adresse', $this->adresse])
=======
            ->andFilterWhere(['like', 'adress', $this->adress])
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
            ->andFilterWhere(['like', 'ni', $this->ni]);

        return $dataProvider;
    }
}

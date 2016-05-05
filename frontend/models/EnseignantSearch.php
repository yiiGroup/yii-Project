<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
<<<<<<< HEAD
use frontend\models\Enseignant;
use \yii\data\SqlDataProvider ;
=======
use frontend\models\Enseignant;use yii\data\SqlDataProvider;

>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

/**
 * EnseignantSearch represents the model behind the search form about `frontend\models\Enseignant`.
 */
class EnseignantSearch extends Enseignant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'adress', 'num_tel', 'cin', 'matricule'], 'safe'],
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
<<<<<<< HEAD
=======
    public function search($params)
    {
        $query = Enseignant::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'num_tel', $this->num_tel])
            ->andFilterWhere(['like', 'cin', $this->cin])
            ->andFilterWhere(['like', 'matricule', $this->matricule]);

        return $dataProvider;
    }

    public function searchParMatricule($params)
    {
        $query = Enseignant::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'num_tel', $this->num_tel])
            ->andFilterWhere(['like', 'cin', $this->cin])
            ->andFilterWhere(['like', 'matricule', $this->matricule]);

        return $dataProvider;
    }
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966
    public function search2($params)
    {
        $query = Enseignant::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }



        $dataProvider = new SqlDataProvider([
            'sql' => 'select firstname, lastname from enseignant en, ens_mat ens
where ens.id_ens = en.cin
AND ens.id_g IN (

SELECT li.id_groupe
FROM list_insc_etud li, etudiant e2, user u
WHERE u.matricule = e2.ni
AND e2.cin = li.id_etud
AND u.matricule = :param
)',
            'params' => [':param' => yii::$app->user->identity->matricule]
        ]);







        return $dataProvider;
    }
<<<<<<< HEAD
    public function search($params)
    {
        $query = Enseignant::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'num_tel', $this->num_tel])
            ->andFilterWhere(['like', 'cin', $this->cin])
            ->andFilterWhere(['like', 'matricule', $this->matricule]);

        return $dataProvider;
    }
}
=======



    }
>>>>>>> a53c17914c92d9e22e0b831cad0d057ae11da966

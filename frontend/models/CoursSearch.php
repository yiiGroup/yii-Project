<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Cours;
use yii\data\SqlDataProvider;


/**
 * CoursSearch represents the model behind the search form about `frontend\models\Cours`.
 */
class CoursSearch extends Cours
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_att', 'id_ens', 'id_g'], 'integer'],
            [['texte'], 'safe'],
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
        $query = Cours::find();

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
            'id' => $this->id,
            'id_att' => $this->id_att,
            'id_ens' => $this->id_ens,
            'id_g' => $this->id_g,
        ]);

        $query->andFilterWhere(['like', 'texte', $this->texte]);

        return $dataProvider;
    }

    public function searchByTeacher($params)
    {
        $dataProvider = new SqlDataProvider([
            'sql' =>'SELECT c . texte ,g . designation  as designation
FROM `cours` c, Groupe g, attatechments a
WHERE c.id_g = g.id
AND c.id_att = a.id
And c.id_ens=:param',

            'params' => [':param'=>$params],
        ]);



        return $dataProvider;
    }


}

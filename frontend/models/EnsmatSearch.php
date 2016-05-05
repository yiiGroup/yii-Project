<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
/**
 * EnsmatSearch represents the model behind the search form about `frontend\models\EnsMat`.
 */
class EnsmatSearch extends EnsMat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_mat', 'id_g'], 'integer'],
            [['id_ens'], 'safe'],
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
        $query = EnsMat::find();

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
            'id_mat' => $this->id_mat,
            'id_g' => $this->id_g,
        ]);

        $query->andFilterWhere(['like', 'id_ens', $this->id_ens]);

        return $dataProvider;
    }
    public function searchMatricule($params)
    {

        $dataProvider = new SqlDataProvider([
            'sql' =>'SELECT g.designation  FROM ens_mat e,Groupe g  WHERE g.id=e.id_g and e.id_ens=:param',
            'params' => [':param'=>$params],
        ]);



        return $dataProvider;
    }


}

<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Groupe;

/**
 * GroupeSearch represents the model behind the search form about `frontend\models\Groupe`.
 */
class GroupeSearch extends Groupe
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_s'], 'integer'],
            [['designation'], 'safe'],
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
        $query = Groupe::find();

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
            'id_s' => $this->id_s,
        ]);

        $query->andFilterWhere(['like', 'designation', $this->designation]);

        return $dataProvider;
    }
}
